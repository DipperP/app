<?php
$config = array();

/******** Shared libraries and assets *******/

$config['oasis_jquery_ads_js'] = array(
	'type' => AssetsManager::TYPE_JS,
	'assets' => array(
		'#group_oasis_jquery',
		'#group_oasis_wikia_js',
		'#group_oasis_ads_js'
	)
);

$config['oasis_extensions_js'] = array(
    'type' => AssetsManager::TYPE_JS,
    'assets' => array(
        '#group_oasis_ads_js',
        '#group_oasis_noads_extensions_js'
    )
);

$config['oasis_tracker_js'] = array(
	'type' => AssetsManager::TYPE_JS,
	'assets' => array(
		'//extensions/wikia/WikiaTracker/js/WikiaTracker_config.js',
		'//extensions/wikia/WikiaTracker/js/WikiaTracker.js',
		'//resources/wikia/tracker/jquery.wikia.tracker.js',
	)
);

$config['oasis_ads_js'] = array(
    'type' => AssetsManager::TYPE_JS,
    'assets' => array(
		'#group_oasis_tracker_js',

		// ads
		'//extensions/wikia/Geo/geo.js',
		'//extensions/wikia/AdEngine/AdMeldAPIClient.js',
		'//extensions/wikia/AdEngine/AdConfig.js',
		'//extensions/wikia/AdEngine/AdEngine.js',
		'//extensions/wikia/AdEngine/AdProviderOpenX.js',
		'//extensions/wikia/AdEngine/LazyLoadAds.js',
		'//extensions/wikia/AdEngine/ghost/gw-11.6.7/lib/gw.min.js',
		'//extensions/wikia/AdEngine/liftium/Liftium.js',
		'//extensions/wikia/AdEngine/liftium/Wikia.js',
		'//extensions/wikia/AdEngine/liftium/AdsInContent.js',
		'//extensions/wikia/AdEngine/AdDriver.js',
    )
);

$config['oasis_noads_extensions_js'] = array(
	'type' => AssetsManager::TYPE_JS,
	'assets' => array(
		'//extensions/wikia/RelatedPages/js/RelatedPages.js',
		'//extensions/wikia/CreatePage/js/CreatePage.js',
		'//extensions/wikia/ImageLightbox/ImageLightbox.js',
		'//extensions/wikia/Lightbox/js/LightboxLoader.js',
		'//extensions/wikia/AjaxLogin/AjaxLoginBindings.js',
		'//extensions/wikia/UserLogin/js/UserLoginAjaxForm.js', // TODO: do we need to load this for logged-in?  answer: yes, we allow logged in users to change login without logging out
		'//extensions/wikia/UserLogin/js/UserSignupAjaxForm.js', // TODO: do we need to load this for logged-in?  answer: yes, we allow logged in users to create account without logging out
		'//extensions/wikia/UserLogin/js/UserLoginModal.js', // TODO: do we need to load this for logged-in?  answer: maybe
		'//extensions/FBConnect/fbconnect.js',
		'//extensions/wikia/Meebo/meebo.js',
		'//extensions/wikia/GlobalNotification/GlobalNotification.js',
		'//skins/oasis/js/GlobalModal.js',  // This needs to load last after all common extensions, please keep this last.
		'//extensions/wikia/UserLogin/js/UserLogin.js',
	)
);



/** Site specific CSS **/

$config['site_anon_css'] = array(
	'type' => AssetsManager::TYPE_CSS,
	'assets' => array(
		'#function_AssetsConfig::getSiteCSS'
	)
);

/** User specific CSS **/

$config['site_user_css'] = array(
	'type' => AssetsManager::TYPE_CSS,
	'assets' => array(
		'#group_site_anon_css',
	)
);

/**
 * Scripts that are needed very early in execution and thus are worth blocking for.
 *
 * Keep this group small!
 **/

$config['oasis_blocking'] = array(
	'type' => AssetsManager::TYPE_JS,
	'assets' => array(
		'//skins/wikia/js/WikiaScriptLoader.js'
	)
);

/** jQuery **/

$config['oasis_jquery'] = array(
	'type' => AssetsManager::TYPE_JS,
	'assets' => array(
//		jQuery is now loaded via ResourceLoader
//		'#function_AssetsConfig::getJQueryUrl',
		'//resources/jquery/jquery.json.js', // deprecated - @see BugId:36211
		'//resources/wikia/libraries/jquery/getcss/jquery.getcss.js',
		'//resources/wikia/libraries/jquery/cookies/jquery.cookies.2.1.0.js',
		'//resources/wikia/libraries/jquery/timeago/jquery.timeago.js',
		'//resources/wikia/libraries/jquery/store/jquery.store.js',
		'//resources/wikia/jquery.wikia.js',
		'//resources/wikia/libraries/jquery/carousel/jquery.wikia.carousel.js',
		'//resources/wikia/polyfills/jquery.wikia.placeholder.js',
		'//resources/wikia/libraries/jquery/expirystorage/jquery.expirystorage.js',
		// libraries loaders
		'//resources/wikia/libraries/jquery/getResources/jquery.wikia.getResources.js',
		'//resources/wikia/libraries/jquery/loadLibrary/jquery.wikia.loadLibrary.js',
		// jQuery/Oasis specific code
		'//skins/oasis/js/tables.js',
		'//skins/oasis/js/common.js'
	)
);

/** Wikia **/

$config['oasis_wikia_js'] = array(
	'type' => AssetsManager::TYPE_JS,
	'assets' => array(
		'//resources/wikia/libraries/my.class/my.class.js',
		'//resources/wikia/modules/querystring.js',
		'//resources/wikia/modules/cookies.js',
		'//resources/wikia/modules/log.js',
	)
);

/******** Skins *******/

/** Oasis **/

//core shared JS
$config['oasis_shared_js'] = array(
    'type' => AssetsManager::TYPE_JS,
    'assets' => array(
        // shared libraries
        '#group_oasis_jquery',
        '#group_oasis_wikia_js',
        '#group_oasis_nojquery_shared_js',
    )
);

$config['oasis_nojquery_shared_js'] = array(
	'type' => AssetsManager::TYPE_JS,
	'assets' => array(
		// shared libraries
        # the two following are loaded using ResourceLoader
//		'//skins/common/wikibits.js'
//		'//skins/common/ajax.js',
		'//skins/oasis/js/tracker.js',
		'//resources/wikia/libraries/my.class/my.class.js',
		'//resources/wikia/modules/querystring.js',
		'//resources/wikia/modules/cookies.js',
		'//resources/wikia/modules/log.js',
		'//resources/wikia/libraries/jquery/wikia/jquery.wikia.modal.js',
		'//extensions/wikia/AssetsManager/js/AssetsManager.js',
		'//extensions/wikia/JSMessages/js/JSMessages.js',
		// oasis specific files
		'//skins/oasis/js/hoverMenu.js',
		'//skins/oasis/js/PageHeader.js',
		'//skins/oasis/js/Search.js',
		'//skins/oasis/js/WikiaFooter.js',
		'//skins/oasis/js/CorporateFooter.js',
		'//skins/oasis/js/buttons.js',
		'//skins/oasis/js/WikiHeader.js',
		'//skins/oasis/js/LatestPhotos.js',
		'//skins/oasis/js/Interlang.js',
		'//skins/oasis/js/WikiaNotifications.js',
		'//skins/oasis/js/Spotlights.js',
		'//skins/oasis/js/FirefoxFindFix.js',
		'//skins/oasis/js/isTouchScreen.js',
		'//skins/oasis/js/tabs.js',
		'//skins/oasis/js/SharingToolbar.js',
		'//skins/oasis/js/ContributeMenu.js',
		'//skins/oasis/js/WikiaForm.js',
	)
);


//anon JS
// Note: Owen moved getSiteJS call from both anon_js and user_js to OasisController::loadJS
// so that common.js is loaded last so it has less chance of breaking other things
$config['oasis_anon_js'] = array(
	'type' => AssetsManager::TYPE_JS,
	'assets' => array(
		'//skins/oasis/js/LatestActivity.js',
		'//skins/oasis/js/AnonTOC.js',
		'//extensions/wikia/Interstitial/Exitstitial.js',
		'//extensions/wikia/UserLogin/js/UserLoginFacebook.js',
		'//extensions/wikia/UserLogin/js/UserLoginFacebookForm.js',
	)
);

//user JS
$config['oasis_user_js'] = array(
	'type' => AssetsManager::TYPE_JS,
	'assets' => array(
		'//extensions/wikia/UserLogin/js/UserLoginFacebook.js',
		'//extensions/wikia/UserLogin/js/UserLoginFacebookForm.js',
	)
);

/** Wikiaphone **/
//TODO: remove when Wikiaphone will be deleted

$config['wikiaphone_js'] = array(
	'type' => AssetsManager::TYPE_JS,
	'assets' => array(
		//core functionality required early in the process before jQuery
		'//resources/wikia/modules/cookies.js',
		'//resources/wikia/modules/querystring.js',
		'//resources/wikia/modules/log.js',

		'#group_oasis_jquery',

		'//extensions/wikia/AdEngine/AdConfig.js',
		'//extensions/wikia/WikiaTracker/js/WikiaTracker_config.js',
		'//extensions/wikia/WikiaTracker/js/WikiaTracker.js',
		'//skins/wikiaphone/main.js'
	)
);

/** WikiaMobile **/

$config['wikiamobile_scss'] = array(
	'type' => AssetsManager::TYPE_SCSS,
	'skin' => 'wikiamobile',
	'assets' => array(
		'//extensions/wikia/WikiaMobile/css/WikiaMobile.scss'
	)
);

//loaded at the top of the page in the head section
$config['wikiamobile_js_head'] = array(
	'type' => AssetsManager::TYPE_JS,
	'skin' => 'wikiamobile',
	'assets' => array(
		'//resources/wikia/libraries/zepto/zepto-0.8.js',
		'//resources/wikia/libraries/modil/modil.js',
		'//resources/wikia/modules/cookies.js',
		'//extensions/wikia/AdEngine/AdConfig.js'
	)
);

//loaded at the bottom of the page in the body section
$config['wikiamobile_js_body'] = array(
	'type' => AssetsManager::TYPE_JS,
	'skin' => 'wikiamobile',
	'assets' => array(
		//platform core components go first
		'//resources/wikia/modules/cache.js',
		'//resources/wikia/modules/querystring.js',
		'//resources/wikia/modules/log.js',

		// deferred.js - jQuery-free implementation (BugId:34943)
		'//resources/wikia/libraries/deferred/deferred.js',
		'//resources/wikia/libraries/deferred/deferred.api.js',

		//feature detection and polyfills go second
		'//resources/wikia/libraries/modernizr/modernizr.wikiamobile.js',
		'//resources/wikia/polyfills/outerhtml.js',
		'//resources/wikia/libraries/modernizr/feature-detects/positionfixed.wikiamobile.js',
		'//resources/wikia/libraries/modernizr/feature-detects/overflow.wikiamobile.js',

		//platform components
		'//extensions/wikia/AssetsManager/js/AssetsManager.js',
		'//extensions/wikia/JSMessages/js/JSMessages.wikiamobile.js',
		'//extensions/wikia/JSSnippets/js/JSSnippets.js',

		//framework
		'//resources/wikia/libraries/zepto/zepto.getcss.js',
		'//resources/wikia/libraries/zepto/zepto.wikiamobile.js',

		//tracker
		'//extensions/wikia/WikiaTracker/js/WikiaTracker_config.js',
		'//extensions/wikia/WikiaTracker/js/WikiaTracker.js',

		//modules
		'//extensions/wikia/WikiaMobile/js/track.js',
		'//extensions/wikia/WikiaMobile/js/events.js',
		'//extensions/wikia/WikiaMobile/js/toc.js',
		'//extensions/wikia/WikiaMobile/js/loader.js',
		'//extensions/wikia/WikiaMobile/js/toast.js',
		'//extensions/wikia/WikiaMobile/js/pager.js',
		'//extensions/wikia/WikiaMobile/js/modal.js',
		'//extensions/wikia/WikiaMobile/js/media.js',
		'//extensions/wikia/WikiaMobile/js/topbar.js',
		'//extensions/wikia/WikiaMobile/js/popover.js',
		'//extensions/wikia/WikiaMobile/js/ads.js',
		'//extensions/wikia/WikiaMobile/js/hide_url_bar.js',
		'//extensions/wikia/WikiaMobile/js/sections.js',
		'//extensions/wikia/WikiaMobile/js/share.js',
		'//extensions/wikia/WikiaMobile/js/tables.js',

		//entrypoint
		'//extensions/wikia/WikiaMobile/js/WikiaMobile.js',

		//extensions with assets to load on every page
		//TODO: move to assets hook
		//We are not using it anywhere now
		//'//extensions/wikia/UserLogin/js/UserLogin.wikiamobile.js',
	)
);

$config['mediagallery_wikiamobile_js'] = array(
	'type' => AssetsManager::TYPE_JS,
	'skin' => 'wikiamobile',
	'assets' => array(
		'//extensions/wikia/WikiaMobile/js/mediagallery.js'
	)
);

$config['wikiamobile_autocomplete_js'] = array(
	'type' => AssetsManager::TYPE_JS,
	'skin' => 'wikiamobile',
	'assets' => array(
		'//extensions/wikia/WikiaMobile/js/autocomplete.js'
	)
);

$config['wikiamobile_scroll_js'] = array(
	'type' => AssetsManager::TYPE_JS,
	'skin' => 'wikiamobile',
	'assets' => array(
		'//extensions/wikia/WikiaMobile/js/scroll.wikiamobile.js'
	)
);

$config['categorypage_wikiamobile_js'] = array(
	'type' => AssetsManager::TYPE_JS,
	'skin' => 'wikiamobile',
	'assets' => array(
		'//extensions/wikia/WikiaMobile/js/category_page.js',
	)
);

/** WikiaApp **/

$config['wikiaapp_css'] = array(
	'type' => AssetsManager::TYPE_CSS,
	'assets' => array(
		'//skins/wikiaapp/main.css',
		'//skins/wikiaapp/skin.css'
	)
);

$config['wikiaapp_js'] = array(
	'type' => AssetsManager::TYPE_JS,
	'assets' => array(
		'//resources/wikia/libraries/zepto/zepto-0.8.js',
		'//skins/wikiaapp/main.js'
	)
);

/** MonoBook **/

$config['monobook_js'] = array(
	'type' => AssetsManager::TYPE_JS,
	'assets' => array(
		//core functionality required early in the process before jQuery
		'//resources/wikia/modules/cookies.js',
		'//resources/wikia/modules/querystring.js',
		'//resources/wikia/modules/log.js',

		'#group_oasis_jquery',

		// TODO: remove dependency on YUI (see BugId:3116)
		'//resources/wikia/libraries/yui/utilities/utilities.js',
		'//resources/wikia/libraries/yui/cookie/cookie-beta.js',
		'//resources/wikia/libraries/yui/container/container.js',
		'//resources/wikia/libraries/yui/autocomplete/autocomplete.js',
		'//resources/wikia/libraries/yui/logger/logger.js',
		'//resources/wikia/libraries/yui/menu/menu.js',
		'//resources/wikia/libraries/yui/tabview/tabview.js',
		'//resources/wikia/libraries/yui/extra/tools-min.js',

//		'//resources/mediawiki/mediawiki.util.js', # instead of //skins/common/wikibits.js'
//		'//skins/common/ajax.js',
		'//skins/monobook/main.js',
		'//skins/monobook/tracker.js',
		'//skins/common/tracker.js',
		'//resources/wikia/libraries/my.class/my.class.js',
		'//extensions/wikia/JSMessages/js/JSMessages.js',
		'//extensions/wikia/AjaxLogin/AjaxLoginBindings.js',
		'//extensions/FBConnect/fbconnect.js',
		'//extensions/wikia/AdEngine/AdProviderOpenX.js',
		'//extensions/wikia/AdEngine/LazyLoadAds.js',
		'//extensions/wikia/AdEngine/ghost/gw-2010.10.4/lib/gw.js',
		'//extensions/wikia/GlobalNotification/GlobalNotification.js',
		'//extensions/wikia/WikiaTracker/js/WikiaTracker_config.js',
		'//extensions/wikia/WikiaTracker/js/WikiaTracker.js',
	)
);

/********** Extensions packages **********/

/** Article Comments **/

$config['articlecomments_js_wikiamobile'] = array(
	'type' => AssetsManager::TYPE_JS,
	'skin' => 'wikiamobile',
	'assets' => array(
		'//extensions/wikia/ArticleComments/js/ArticleComments.wikiamobile.js'
	)
);

$config['articlecomments_init_js_wikiamobile'] = array(
	'type' => AssetsManager::TYPE_JS,
	'skin' => 'wikiamobile',
	'assets' => array(
		'//extensions/wikia/ArticleComments/js/ArticleComments_init.wikiamobile.js'
	)
);

$config['articlecomments_scss_wikiamobile'] = array(
	'type' => AssetsManager::TYPE_SCSS,
	'skin' => 'wikiamobile',
	'assets' => array(
		'//extensions/wikia/ArticleComments/css/ArticleComments.wikiamobile.scss'
	)
);

/** EditPageLayout **/

// Reskinned rich text editor
$config['rte'] = array(
	'type' => AssetsManager::TYPE_JS,
	'assets' => array(
			'#function_AssetsConfig::getRTEAssets'
	)
);
// Generic edit page JavaScript
$config['epl'] = array(
	'type' => AssetsManager::TYPE_JS,
	'assets' => array(
			'#function_AssetsConfig::getEPLAssets',
	)
);
// Generic edit page JavaScript + reskined rich text editor
$config['eplrte'] = array(
	'type' => AssetsManager::TYPE_JS,
	'assets' => array(
		'#group_epl',
		'#group_rte'
	)
);

/** MiniRTE **/

// Javascript for the MiniEditor
$config['mini_editor_js'] = array(
	'type' => AssetsManager::TYPE_JS,
	'assets' => array(
		'//extensions/wikia/EditPageLayout/js/editor/WikiaEditor.js',
		'//extensions/wikia/EditPageLayout/js/editor/Buttons.js',
		'//extensions/wikia/EditPageLayout/js/editor/Modules.js',
		'//extensions/wikia/EditPageLayout/js/plugins/MiniEditor.js',
		'//extensions/wikia/EditPageLayout/js/plugins/Tracker.js',
		'//extensions/wikia/EditPageLayout/js/plugins/Collapsiblemodules.js',
		'//extensions/wikia/EditPageLayout/js/plugins/Cssloadcheck.js',
		'//extensions/wikia/EditPageLayout/js/plugins/Edittools.js',
		'//extensions/wikia/EditPageLayout/js/plugins/Loadingstatus.js',
		'//extensions/wikia/EditPageLayout/js/extras/Buttons.js',
		'//extensions/wikia/EditPageLayout/js/modules/Container.js',
		'//extensions/wikia/EditPageLayout/js/modules/ButtonsList.js',
		'//extensions/wikia/EditPageLayout/js/modules/FormatMiniEditor.js',
		'//extensions/wikia/EditPageLayout/js/modules/FormatMiniEditorSource.js',
		'//extensions/wikia/EditPageLayout/js/modules/Insert.js',
		'//extensions/wikia/EditPageLayout/js/modules/InsertMiniEditor.js',
		'//extensions/wikia/EditPageLayout/js/modules/ModeSwitch.js',
		// TODO: Load this on the fly with JSSnippets. Only thing really needed is slider (so far)
		'//resources/wikia/libraries/jquery-ui/jquery-ui-1.8.14.custom.js',
		'//extensions/wikia/VideoEmbedTool/js/VET.js',
		'//extensions/wikia/WikiaPhotoGallery/js/WikiaPhotoGallery.js',
		'//extensions/wikia/WikiaMiniUpload/js/WMU.js',
		//'extensions/wikia/LinkSuggest/LinkSuggest.js'
	)
);

// Javascript for the MiniEditor with RTE enabled
$config['mini_editor_rte_js'] = array(
		'type' => AssetsManager::TYPE_JS,
		'assets' => array(
				'#group_mini_editor_js',
				'#group_rte'
		)
);

/** Chat **/

$config['chat_js'] = array(
	'type' => AssetsManager::TYPE_JS,
	'assets' => array(
		'#group_oasis_jquery',
		'//resources/wikia/polyfills/jquery.wikia.placeholder.js',
		'//extensions/wikia/Chat/js/lib/socket.io.client.js',
		'//extensions/wikia/JSMessages/js/JSMessages.js',
		'//extensions/wikia/Chat/js/emoticons.js', // must be before controllers.js
		'//extensions/wikia/Chat/js/lib/underscore.js',
		'//extensions/wikia/Chat/js/lib/backbone.js',
		'//extensions/wikia/Chat/js/models/models.js',
		'//extensions/wikia/Chat/js/controllers/controllers.js',
		'//extensions/wikia/Chat/js/views/views.js'
	)
);


$config['chat_js2'] = array(
	'type' => AssetsManager::TYPE_JS,
	'assets' => array(
		'#group_oasis_shared_js',
		'//extensions/wikia/Chat2/js/lib/socket.io.client.js',
		'//extensions/wikia/JSMessages/js/JSMessages.js',
		'//extensions/wikia/Chat2/js/emoticons.js', // must be before controllers.js
		'//extensions/wikia/Chat2/js/lib/underscore.js',
		'//extensions/wikia/Chat2/js/lib/backbone.js',
		'//extensions/wikia/Chat2/js/models/models.js',
		'//extensions/wikia/Chat2/js/controllers/controllers.js',
		'//extensions/wikia/Chat2/js/views/views.js',
		'//extensions/wikia/Chat2/js/views/ChatBanModal.js',
	)
);

// For Chat2 (doesn't exist in Chat(1))
$config['chat_ban_js'] = array(
	'type' => AssetsManager::TYPE_JS,
	'assets' => array(
		'//extensions/wikia/Chat2/js/views/ChatBanModal.js',
		'//extensions/wikia/Chat2/js/controllers/ChatBanModalLogs.js'
	)
);

/** ThemeDesigner **/
$config['theme_designer_js'] = array(
	'type' => AssetsManager::TYPE_JS,
	'assets' => array(
		//core functionality required early in the process before jQuery
		'//resources/wikia/modules/cookies.js',
		'//resources/wikia/modules/querystring.js',
		'//resources/wikia/modules/log.js',

		'#group_oasis_jquery',

		'#group_oasis_tracker_js',

		'//resources/wikia/libraries/jquery-ui/jquery-ui-1.8.14.custom.js',
		'//resources/wikia/libraries/jquery/tooltip/jquery.wikia.tooltip.js',
		'//resources/wikia/libraries/aim/jquery.aim.js',
		'//extensions/wikia/ThemeDesigner/js/ThemeDesigner.js',
	)
);

/** PhotoPop **/
$config['photopop'] = array(
	'type' => AssetsManager::TYPE_JS,
	'assets' => array(
		'//resources/wikia/modules/cookies.js',
		'//resources/wikia/modules/querystring.js',
		'//resources/wikia/modules/log.js',
		'//resources/wikia/libraries/mustache/mustache.js',
		'//resources/wikia/libraries/my.class/my.class.js',
		'//extensions/wikia/PhotoPop/shared/lib/store.js',
		'//extensions/wikia/PhotoPop/shared/lib/observable.js',
		'//extensions/wikia/PhotoPop/shared/lib/reqwest.js',
		'//extensions/wikia/PhotoPop/shared/lib/classlist.js',
		'//extensions/wikia/PhotoPop/shared/lib/wikia.js',
		'//extensions/wikia/PhotoPop/shared/lib/require.js',
		'//extensions/wikia/WikiaTracker/js/WikiaTracker_config.js',
		'//extensions/wikia/WikiaTracker/js/WikiaTracker.js',
	)
);

/** MessageWall **/

$config['walljs'] = array(
	'type' => AssetsManager::TYPE_JS,
	'assets' => array(
		'//extensions/wikia/Wall/js/Wall.js',
		'//extensions/wikia/Wall/js/WallPagination.js',
		'//extensions/wikia/Wall/js/WallBackendBridge.js',
		'//extensions/wikia/Wall/js/WallMessageForm.js',

		'//extensions/wikia/Wall/js/WallNewMessageForm.js',
		'//extensions/wikia/Wall/js/WallEditMessageForm.js',
		'//extensions/wikia/Wall/js/WallReplyMessageForm.js',
		'//extensions/wikia/Wall/js/WallSortingBar.js',
		'//resources/wikia/libraries/jquery/autoresize/jquery.autoresize.js'
	)
);

$config['wallhistoryjs'] = array(
	'type' => AssetsManager::TYPE_JS,
	'assets' => array(
		'//extensions/wikia/Wall/js/Wall.js',
		'//extensions/wikia/Wall/js/WallHistory.js',
		'//extensions/wikia/Wall/js/WallSortingBar.js'
	)
);

/** RelatedVideos **/

$config['relatedvideos_js'] = array(
	'skin' => array( 'monobook', 'oasis' ),//this package need to be reviewed before inclusion in WikiaMobile, JWplayer is not needed and too big
	'type' => AssetsManager::TYPE_JS,
	'assets' => array(
		'//extensions/wikia/RelatedVideos/js/RelatedVideos.js'
	)
);

/** RelatedVideos **/

$config['relatedvideos_js_tooltips'] = array(
	'skin' => 'oasis',
	'type' => AssetsManager::TYPE_JS,
	'assets' => array(
		'//resources/wikia/libraries/jquery/tooltip/jquery.wikia.tooltip.js',
		'#group_relatedvideos_js'
	)
);

$config['relatedvideos_scss'] = array(
		'type' => AssetsManager::TYPE_SCSS,
		'skin' => array( 'monobook', 'oasis', 'wikiamobile' ),
		'assets' => array(
			'//extensions/wikia/RelatedVideos/css/RelatedVideos.scss'
		)
);

$config['relatedvideos_scss_tooltips'] = array(
		'type' => AssetsManager::TYPE_SCSS,
		'skin' => 'oasis',
		'assets' => array(
			'//skins/oasis/css/modules/WikiaTooltip.scss',
			'#group_relatedvideos_scss'
		)
);

/** UserLogin **/

$config['userlogin_scss_wikiamobile'] = array(
		'type' => AssetsManager::TYPE_SCSS,
		'skin' => 'wikiamobile',
		'assets' => array(
				'//extensions/wikia/UserLogin/css/UserLogin.wikiamobile.scss'
		)
);

$config['userlogin_js_wikiamobile'] = array(
		'type' => AssetsManager::TYPE_JS,
		'skin' => 'wikiamobile',
		'assets' => array(
				'//extensions/wikia/UserLogin/js/UserLoginSpecial.wikiamobile.js'
		)
);

$config['userlogin_js_wikiamobile_fbconnect'] = array(
		'type' => AssetsManager::TYPE_JS,
		'skin' => 'wikiamobile',
		'assets' => array(
			'#external_http://connect.facebook.net/en_US/all.js',
			'#group_userlogin_js_wikiamobile',
			'//extensions/wikia/UserLogin/js/UserLoginFacebook.wikiamobile.js',
		)
);

$config['userlogin_facebook_js_wikiamobile'] = array(
		'type' => AssetsManager::TYPE_JS,
		'skin' => 'wikiamobile',
		'assets' => array(
			'//extensions/wikia/UserLogin/js/UserLoginFacebook.wikiamobile.js'
		)
);

/** WikiaHomepage **/

$config['wikiahomepage_scss_wikiamobile'] = array(
		'type' => AssetsManager::TYPE_SCSS,
		'skin' => 'wikiamobile',
		'assets' => array(
			'//extensions/wikia/WikiaHomePage/css/WikiaHomePage.wikiamobile.scss'
		)
);

/** WikiaHubs **/

$config['wikiahubs_scss_wikiamobile'] = array(
		'type' => AssetsManager::TYPE_SCSS,
		'skin' => 'wikiamobile',
		'assets' => array(
				'//extensions/wikia/WikiaHubs/css/WikiaHubs.wikiamobile.scss'
		)
);

/** WikiaSearch **/

$config['wikiasearch_js_wikiamobile'] = array(
    'type' => AssetsManager::TYPE_JS,
    'skin' => 'wikiamobile',
    'assets' => array(
        '//extensions/wikia/Search/js/WikiaSearch.wikiamobile.js'
    )
);

$config['wikiasearch_scss_wikiamobile'] = array(
    'type' => AssetsManager::TYPE_SCSS,
    'skin' => 'wikiamobile',
    'assets' => array(
        '//extensions/wikia/Search/css/WikiaSearch.wikiamobile.scss'
    )
);

/** Places **/
$config['places_js'] = array(
		'skin' => array( 'oasis', 'monobook', 'wikiamobile', 'wikiaphone' ),
		'type' => AssetsManager::TYPE_JS,
		'assets' => array(
				'//extensions/wikia/Places/js/Places.js'
		)
);

$config['places_css'] = array(
		'type' => AssetsManager::TYPE_CSS,
		'skin' => array( 'oasis', 'monobook', 'wikiamobile', 'wikiaphone' ),
		'assets' => array(
				'//extensions/wikia/Places/css/Places.css',
		)
);

/** WikiaPhotoGallery **/

$config['wikiaphotogallery_slider_js_wikiamobile'] = array(
		'skin' => array( 'wikiamobile' ),
		'type' => AssetsManager::TYPE_JS,
		'assets' => array(
				'//extensions/wikia/WikiaPhotoGallery/js/WikiaPhotoGallery.slider.wikiamobile.js'
		)
);

$config['wikiaphotogallery_slider_scss_wikiamobile'] = array(
		'type' => AssetsManager::TYPE_SCSS,
		'skin' => 'wikiamobile',
		'assets' => array(
				'//extensions/wikia/WikiaPhotoGallery/css/WikiaPhotoGallery.slidertag.wikiamobile.scss'
		)
);

// ImageDrop

$config['imagedrop_js'] = array(
	'skin' => array( 'monobook', 'oasis' ),
	'type' => AssetsManager::TYPE_JS,
	'assets' => array(
		'//extensions/wikia/hacks/ImageDrop/js/ImageDrop.js',
		'//resources/wikia/libraries/jquery/filedrop/jquery.filedrop.js'
	)
);

$config['imagedrop_scss'] = array(
	'type' => AssetsManager::TYPE_SCSS,
	'skin' => array( 'monobook', 'oasis' ),
	'assets' => array(
		'//extensions/wikia/ImageDrop/css/ImageDrop.scss'
	)
);

// AbTesting
$config['abtesting'] = array(
	'type' => AssetsManager::TYPE_JS,
	'skin' => array( 'monobook', 'oasis', 'wikiamobile', 'wikiaphone' ),
	'assets' => array(
		'//extensions/wikia/AbTesting/js/AbTesting.js',
	)
);
