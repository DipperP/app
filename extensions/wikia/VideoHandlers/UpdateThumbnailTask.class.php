<?php
use Wikia\Tasks\Tasks\BaseTask;

class UpdateThumbnailTask extends BaseTask {

	const DEFAULT_PROVIDER = "default";
	const IVA = "ooyala/iva";

	private static $delays = [
		self::DEFAULT_PROVIDER => [
			"20 seconds",
			"1 hour",
			"1 day" ],
		self::IVA => [
			"20 seconds",
			"1 hour",
			"1 week" ]
	];

	/**
	 * This task is run when a video is uploaded but the provider does not have a
	 * thumbnail for us to use. This gets triggered the first time a thumbnail
	 * cannot be found, and is queued up again at longer intervals until we either
	 * get a thumbnail from the provider, or exhaust all of our attempts.
	 * @param $title
	 * @param $delayIndex
	 * @param $provider
	 * @param $videoId
	 * @return FileRepoStatus
	 */
	public function retryThumbUpload( $title, $delayIndex, $provider, $videoId ) {
		global $IP, $wgCityId;
		// IVA requires extra steps to update their thumbnail, use the script we have for that
		$delayIndex++;
		if ( $provider == self::IVA ) {
			$cmd = sprintf( "SERVER_ID={$wgCityId} php {$IP}/maintenance/wikia/VideoHandlers/updateOoyalaThumbnail.php --videoId={$videoId} --delayIndex={$delayIndex}" );
			$response = wfShellExec( $cmd, $exitStatus );
		} else {
			$file = WikiaFileHelper::getVideoFileFromTitle( $title );
			$helper = new VideoHandlerHelper();
			$response = $helper->resetVideoThumb( $file, null, $delayIndex );
		}
		return $response;
	}

	public static function getDelay( $provider, $index ) {
		$provider = array_key_exists( $provider, self::$delays ) ? $provider : self::DEFAULT_PROVIDER;
		return self::$delays[$provider][$index];
	}

	public static function getDelayCount( $provider ) {
		$provider = array_key_exists( $provider, self::$delays ) ? $provider : self::DEFAULT_PROVIDER;
		return count( self::$delays[$provider] );
	}
}
