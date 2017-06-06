<!doctype html>
<html lang="en" dir="<?= $dir ?>">
<head>
	<meta http-equiv="Content-Type" content="<?= $mimetype ?>; charset=<?= $charset ?>">
	<meta name="viewport" content="width=1200">

	<title><?= $pageTitle ?></title>

	<!-- Make IE recognize HTML5 tags. -->
	<!--[if IE]>
	<script>/*@cc_on'abbr article aside audio canvas details figcaption figure footer header hgroup mark menu meter nav output progress section summary time video'.replace(/\w+/g,function(n){document.createElement(n)})@*/</script>
	<![endif]-->

	<link rel="stylesheet"
		  href="<?= AssetsManager::getInstance()->getSassCommonURL( '/extensions/wikia/ThemeDesigner/css/ThemeDesigner.scss' ) ?>">
	<link rel="stylesheet"
		  href="<?= AssetsManager::getInstance()->getSassCommonURL( '/skins/oasis/css/core/WikiaSlider.scss' ) ?>">
	<link rel="stylesheet"
		  href="<?= AssetsManager::getInstance()->getSassCommonURL( '/resources/wikia/libraries/bootstrap/tooltip.scss' ) ?>">

	<?= $globalVariablesScript ?>

	<script>
		var returnTo = <?= Xml::encodeJSVar( $returnTo ) ?>;
		var themeHistory = <?= json_encode( $themeHistory ) ?>;
		var themeSettings = <?= json_encode( $themeSettings ) ?>;
		var themes = <?= json_encode( $wg->OasisThemes ) ?>;
		var applicationThemeSettings = <?= json_encode( $applicationThemeSettings ) ?>;
	</script>

	<!--[if lt IE 8]>
	<script src="<?= $wg->ResourceBasePath ?>/resources/wikia/libraries/json2/json2.js"></script>
	<![endif]-->

	<?php
	$srcs = AssetsManager::getInstance()->getGroupCommonURL( 'theme_designer_js' );

	foreach ( $srcs as $src ) {
		echo "\n\t" . Html::linkedScript( $src );
	}
	?>

</head>
<body>

<div id="Designer" class="Designer">
	<nav id="Navigation" class="Navigation">
		<ul>
			<li>
				<a href="#" rel="ThemeTab"><?= wfMessage( 'themedesigner-tab-theme' )->text() ?></a>
			</li>
			<li>
				<a href="#" rel="CustomizeTab"><?= wfMessage( 'themedesigner-tab-customize' )->text() ?></a>
			</li>
			<li>
				<a href="#" rel="WordmarkTab"><?= wfMessage( 'themedesigner-tab-wordmark' )->text() ?></a>
			</li>
		</ul>
	</nav>
	<?= F::app()->renderView( 'ThemeDesigner', 'ThemeTab' ) ?>
	<?= F::app()->renderView( 'ThemeDesigner', 'CustomizeTab' ) ?>
	<?= F::app()->renderView( 'ThemeDesigner', 'WordmarkTab' ) ?>
	<div id="Toolbar" class="Toolbar">
		<div class="inner">
			<span class="mode"><?= wfMessage( 'themedesigner-preview-mode' )->text() ?></span>
			<?php
			if ( count( $themeHistory ) > 0 ) {
				?>
				<span class="history">
					<span class="revisions"><?= count( $themeHistory ) ?></span>
					<?= wfMessage( 'themedesigner-previous-versions' )->text() ?>
					<img class="chevron" src="<?= $wg->BlankImgUrl ?>">
					<ul>
					<?php
					foreach ( $themeHistory as $themeHistoryItem ) {
						?>
						<li>
							<?= Wikia::specialPageLink( '#', null, 'wikia-chiclet-button', 'blank.gif', 'recycle' ); ?>
							<?= wfMessage( 'themedesigner-history-item', $themeHistoryItem['timeago'], $themeHistoryItem['author'] )->text() ?>
						</li>
						<?php
					}
					?>
					</ul>
				</span>
				<?php
			} //end if
			?>
			<button class="save"><?= wfMessage( 'themedesigner-button-save-im-done' )->text() ?></button>
			<button class="cancel secondary"><?= wfMessage( 'themedesigner-button-cancel' )->text() ?></button>
		</div>
	</div>
</div>

<?= F::app()->renderView( 'ThemeDesigner', 'Picker' ) ?>

<iframe frameborder=0 id="PreviewFrame" class="PreviewFrame"
		src="<?= str_replace( '$1', 'Special:ThemeDesignerPreview', $wg->ArticlePath ) ?>?noexternals=1"></iframe>

<?= $analytics ?>

</body>
</html>
