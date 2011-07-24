<?php

$wgHooks['SkinTemplateOutputPageBeforeExec'][] = 'UserProfile_handler';

function UserProfile_handler(&$skin, &$tpl) {
	wfProfileIn(__METHOD__);

	global $wgTitle, $wgOut, $wgRequest, $wgExtensionsPath, $wgUser;

	// don't output on Oasis
	if (get_class($wgUser->getSkin()) == 'SkinOasis') {
		wfProfileOut(__METHOD__);
		return true;
	}

	$action = $wgRequest->getVal('action', 'view');
	if ($wgTitle->getNamespace() != NS_USER || ($action != 'view' && $action != 'purge')) {
		wfProfileOut(__METHOD__);
		return true;
	}

	// construct object for the user whose page were' on
	$user = User::newFromName( $wgTitle->getDBKey() );

	// sanity check
	if ( !is_object( $user ) ) {
		wfProfileOut(__METHOD__);
		return true;
	}

	$user->load();

	// abort if user has been disabled
	if ( defined( 'CLOSED_ACCOUNT_FLAG' ) && $user->mRealName == CLOSED_ACCOUNT_FLAG ) {
		wfProfileOut(__METHOD__);
		return true;
	}
	// abort if user has been disabled (v2, both need to be checked for a while)
	$disabledOpt = $user->getOption('disabled');
	if ( !empty( $disabledOpt ) ) {
		wfProfileOut(__METHOD__);
		return true;
	}

	$html = '';

	wfRunHooks( 'AddToUserProfile', array(&$out, $user) );

	if(count($out) > 0) {
		$wgOut->addExtensionStyle("{$wgExtensionsPath}/wikia/UserProfile/userprofile.css");

		$html .= "<div id='profile-content'>";
		$html .= "<div id='profile-content-inner'>";
		$html .= $tpl->data['bodytext'];
		$html .= "</div>";
		$html .= "</div>";

		$wgOut->addStyle( "common/article_sidebar.css" );

		$html .= '<div class="article-sidebar">';
		if(isset($out['UserProfile1'])) {
			$html .= $out['UserProfile1'];
		}
		if(isset($out['achievementsII'])) {
			$html .= $out['achievementsII'];
		}
		if(isset($out['followedPages'])) {
			$html .= $out['followedPages'];
		}
		$html .= '</div>';

		$tpl->data['bodytext'] = $html;
	}
	wfProfileOut(__METHOD__);
	return true;
}
