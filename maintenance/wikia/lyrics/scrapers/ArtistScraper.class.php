<?php

/**
 * Class ArtistScraper
 *
 * Scrape Artist page from Lyrics API
 */
class ArtistScraper extends BaseScraper {

	public function processArticle( Article $article ) {
		$artistData = [
			'article_id' => $article->getId(),
			'name' => $article->getTitle()->getText()
		];
		$artistData = array_merge( $artistData, $this->getHeader( $article ) );
		$artistData = array_merge( $artistData, $this->getFooter( $article ) );
		$artistData['genres'] = $this->getGenres( $article );
		return $this->sanitizeData( $artistData, $this->getDataMap() );
	}

	protected function getHeader( Article $article ) {
		return $this->getTemplateValues( 'ArtistHeader', $article->getContent() );
	}

	protected function getFooter( Article $article ) {
		return $this->getTemplateValues( 'ArtistFooter', $article->getContent() );
	}

	function getSections( $text ) {
		// Remove templates
		$text = preg_replace ( '#\{\{(.+?)\}\}#s', '', $text );
		$sections = [];
		$offset = 0;
		if (preg_match_all('#==(.+?)==#u', $text, $matches, PREG_OFFSET_CAPTURE)) {
			$positions = $matches[0];
			array_shift( $positions );
			foreach ( $positions as $section ) {
				if ( $section[0][2] !== '=' ) {
					$sections[] = substr( $text, $offset, ( $section[1] - $offset ) );
					$offset = $section[1];
				}
			}
			$sections[] = substr( $text, $offset, ( strlen( $text ) - $offset ) );
		}
		return $sections;
	}

	function getAlbums( Article $article, $artistName ) {
		$albums = [];
		$text = $article->getContent();
		$sections = $this->getSections( $text );
		foreach( $sections as $section ) {
			if ( preg_match( '#==(.*?)==#mu', $section, $matches ) ) {
				$albumData = $this->getAlbumData( $matches[1] );
				$albumData['image'] = $this->getAlbumPic( $section, $artistName );
				$albumData['songs'] = $this->getAlbumSongs( $section );
				$albums[] = $albumData;
			}
		}
		return $albums;
	}

	function getAlbumSongs( $section ) {
		$songs = [];
		if ( preg_match_all('/^# (.+?)$/mu', $section, $matches ) ) {
			$number = 1;
			foreach ( $matches[1] as $song ) {
				$songs[] = $this->getSongData( $song, $number );
				$number++;
			}
		}
		return $songs;
	}


	function _getAlbums( Article $article, $artistName) {
		$albums = [];
		$text = $article->getContent();
		$re_albums = '#==(.*?)==\s+(.*?)\{\{[c|C]lear\}\}#s';
		if ( preg_match_all( $re_albums, $text, $matches) ) {
			for ( $i = 0; $i < count($matches[0]); $i++ ) {
				$albumData = $this->getAlbumData( $matches[1][$i] );
				$albumData['Cover'] = $this->getAlbumPic( $matches[2][$i], $artistName );
				$albums[] = $albumData;
			}
		}
		return $albums;
	}

	function getAlbumData( $heading ) {
		//==[[Entombed:Serpent Saints The Ten Amendments (2007)|Serpent Saints - The Ten Amendments (2007)]]==
		$result = [];
		$headinga = explode( '|', trim( $heading, '][=' ) );
		$result['title'] = false;
		if ( count( $headinga ) > 1) {
			$result['title'] = $headinga[0];
			$result['year'] = '';
			$heading = $headinga[1];
		}
		if ( preg_match('#(.+)\(([\d]+)\)#', $heading, $matches) ) {
			$result['Album'] = $matches[1];
			$result['year'] = $matches[2];
		} else {
			$result['Album'] = $heading;
		}
		return $result;
	}

	protected function getAlbumPic( $section, $artistName ) {
		$values = $this->getTemplateValues( 'Album Art', $section, '|', false );
		if ( !$values) {
			// No image
			return '';
		}
		if ( count( $values ) == 3 && $values[1] == '' ) {
			// Autogenerated image name
			// TODO: Check if this is correct
			return sprintf( '%s - %s.jpg', $artistName, $values[2] );
		}
		// Full File Name
		return $values[1];
	}

	public function getDataMap() {
		return [
			'article_id' => 'article_id',
			'name' => 'name',
			'pic' => 'image',
			'iTunes' => 'itunes',
			'genres' => 'genres',
			'romanizedArtist' => 'romanized_artist_name',
			'officialSite' => 'official_site',
			'myspace' => 'myspace',
			'twitter' => 'twitter',
			'facebook' => 'facebook',
			'wikia' => 'wikia',
			'wikipedia' => 'wikipedia',
			'wikipedia2' => 'wikipedia2',
			'country' => 'country',
			'state' => 'state',
			'hometown' => 'hometown',
			'asin' => 'asin',
			'allmusic' => 'allmusic',
			'discogs' => 'discogs',
			'musicbrainz' => 'musicbrainz',
			'youtube' => 'youtube',
		];
	}

}
