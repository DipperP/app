<?php
/**
 * @var $wg WikiaGlobalRegistry
 * @var $wf WikiaFunctionWrapper
 * @var $searchPage Bool
 * @var $wordmarkType String
 * @var $wordmarkUrl String
 * @var $wikiName String
 * @var $userName String
 */

	$loggedIn = $wg->User->isLoggedIn();
    $searchPage = $wg->Title->isSpecial( 'Search' );

	if ( $loggedIn ) {
		$userName = $wg->User->getName();
	}
?>
<section id=wkTopNav<?= $searchPage ? ' class="srhOpn"' : ''?>>
	<div id=wkTopBar>
		<a href=<?= Title::newMainPage()->getFullURL() ?>>
		<? if( $wordmarkType == "graphic" ) :?>
			<img id=wkImgMrk src="<?= $wordmarkUrl ;?>">
		<? else :?>
			<div id=wkWrdMrk><?= $wikiName ;?></div>
		<? endif ;?>
		</a>
	<a href=#wkNavSrh id=wkSrhTgl class=tgl></a>
	<a href=#wkNavMenu id=wkNavTgl class=tgl></a>
	<? if ( $loggedIn ) {
		// This gives me image 50x50 but adds html attributes width and height with values 25
		echo '<a id=wkPrfTgl class="tgl lgdin" href=#>' . AvatarService::renderAvatar( $userName, 25 ) . '</a>';
	} else {
		echo '<a id=wkPrfTgl class="tgl lgdout" href="' . SpecialPage::getTitleFor( 'UserLogin' )->getLocalURL() . '#"></a>';
	}	?>
	</div>
	<div id=wkSrh>
		<form id=wkSrhFrm action="<?= SpecialPage::getSafeTitleFor( 'Search' )->getLocalURL(); ?>" method=get class='wkForm hide-clear'>
			<input type=hidden name=fulltext value=Search>
			<input id=wkSrhInp type=text name=search placeholder="<?= wfMessage( 'wikiamobile-search-this-wiki')->text(); ?>" value="<?= $wg->request->getVal( 'search', '' ); ?>" required=required autocomplete=off autofocus>
			<div id=wkClear class='clsIco'></div>
			<input id=wkSrhSub class='wkBtn main' type=submit value='<?= wfMessage( 'wikiamobile-search' )->text(); ?>'>
		</form>
		<ul id=wkSrhSug class=wkLst></ul>
	</div>
	<div id=wkNav></div>
	<div id=wkPrf>
		<header class="wkPrfHead<?= ( !$loggedIn ) ? ' up' : '' ?>">
		<? if( $loggedIn ) {
			echo $userName;
		} else {
			echo wfMessage( 'userlogin-login-heading' )->text();
		}
		?>
		</header>
	<? if ( $loggedIn ) :?>
		<ul class=wkLst>
			<li><a class=chg href="<?= AvatarService::getUrl( $userName ) ;?>"><?= wfMsg( 'wikiamobile-profile' ); ?></a></li>
			<li><a class=logout href="<?= str_replace( "$1", SpecialPage::getSafeTitleFor( 'UserLogout' )->getPrefixedText() . '?returnto=' . $wg->Title->getPrefixedURL(), $wg->ArticlePath ) ;?>"><?= wfMsg('logout'); ?></a></li>
		</ul>
	<? endif; ?>
	</div>
</section>
