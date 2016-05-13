<?php

/**
 * Refactor or revert this class after the experiment is complete
 * @link https://wikia-inc.atlassian.net/browse/DAT-4186
 * @contact West-Wing team
 * Class NavboxTemplate
 */
class NavboxTemplate {

	const MARK = 'NAVBOXUNIQ';

	public static function handle( $text ) {
		return !empty( $text ) ? self::mark( $text ) : $text;
	}

	public static function resolve( &$html ) {
		if ( $html ) {
			$html = self::process( $html );
		}
		return true;
	}

	private static function process( $html ) {
		$markerRegex = "/(<|&lt;)(\x7f" . self::MARK . ".+\x7f)(>|&gt;)/sU";

		//getting unique markers of each navigation template
		preg_match_all( $markerRegex, $html, $markers );

		foreach ( array_unique( $markers[ 2 ] ) as $marker ) {
			$html = static::replaceMarker( $marker, $html );
		}

		return $html;
	}

	private static function replaceMarker( $marker, $html ) {
		// matches elements in between start and end marker tags
		$replaced = preg_replace(
			'/(<|&lt;)' . $marker . '(>|&gt;).*(<|&lt;)\\/' . $marker . '(>|&gt;)/isU',
			// replacement
			'<div data-type="navbox">$0</div>',
			$html
		);
		if ( $replaced !== null ) {
			// remove just the marker tags
			$result = preg_replace( '/(<|&lt;)\\/?' . $marker . '(>|&gt;)/sU', '', $replaced );
			if ( $result !== null ) {

				return $result;
			}
			\Wikia\Logger\WikiaLogger::instance()->error( 'Navbox marker removal failed.' );
		}
		\Wikia\Logger\WikiaLogger::instance()->error( 'Navbox marker replacement failed.' );

		return $html;
	}

	/**
	 * @param $text
	 * @return string
	 */
	private static function mark( $text ) {
		// marking each template with unique marker to be able to handle nested navigation templates
		$marker = "\x7f" . self::MARK . "_" . uniqid() . "\x7f";
		return sprintf( "<%s>%s</%s>", $marker, $text, $marker );
	}
}
