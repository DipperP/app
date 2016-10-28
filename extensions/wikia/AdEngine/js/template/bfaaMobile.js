/*global define, require*/
define('ext.wikia.adEngine.template.bfaaMobile', [
	'ext.wikia.adEngine.adHelper',
	'ext.wikia.adEngine.context.uapContext',
	'ext.wikia.adEngine.provider.btfBlocker',
	'ext.wikia.adEngine.slotTweaker',
	'ext.wikia.adEngine.video.videoAd',
	'wikia.document',
	'wikia.log',
	'wikia.window',
	require.optional('ext.wikia.adEngine.mobile.mercuryListener')
], function (
	adHelper,
	uapContext,
	btfBlocker,
	slotTweaker,
	videoAd,
	doc,
	log,
	win,
	mercuryListener
) {
	'use strict';

	var adSlot,
		logGroup = 'ext.wikia.adEngine.template.bfaaMobile',
		page,
		unblockedSlots = [
			'MOBILE_BOTTOM_LEADERBOARD',
			'MOBILE_IN_CONTENT',
			'MOBILE_PREFOOTER'
		],
		wrapper;

	function runOnReady(iframe, params) {
		var aspectRatio = params.aspectRatio,
			adsModule = win.Mercury.Modules.Ads.getInstance(),
			adjustPadding = function () {
				var viewPortWidth = Math.max(doc.documentElement.clientWidth, win.innerWidth || 0),
					height = aspectRatio ?
						viewPortWidth / aspectRatio : iframe.contentWindow.document.body.offsetHeight;
				page.style.paddingTop = height + 'px';
				adsModule.setSiteHeadOffset(height);
			},
			onResize = adHelper.throttle(adjustPadding, 100);

		page.classList.add('bfaa-template');
		adjustPadding();

		win.addEventListener('resize', onResize);
		if (mercuryListener) {
			mercuryListener.onPageChange(function () {
				page.classList.remove('bfaa-template');
				page.style.paddingTop = '';
				adsModule.setSiteHeadOffset(0);
				win.removeEventListener('resize', onResize);
			});
		}

		if (videoEnabled(params)) {
			videoAd.onLibraryReady(function () {
				var playTrigger = videoAd.setupVideo(
					adSlot.querySelector('div:last-of-type'),
					document.body.clientWidth,
					document.body.clientWidth / params.videoAspectRatio,
					adSlot,
					{
						src: 'gpt',
						slotName: params.slotName,
						uap: params.uap
					},
					function () {
						aspectRatio = params.aspectRatio;
						onResize();
					}
				);

				params.videoTriggerElement.addEventListener('click', function() {
					playTrigger();
					aspectRatio = params.videoAspectRatio;
					onResize();
				});
			});
		}
	}

	function videoEnabled(params) {
		return params.videoTriggerElement && params.videoAspectRatio;
	}

	function show(params) {
		adSlot = doc.getElementById(params.slotName);
		page = doc.getElementsByClassName('application-wrapper')[0];
		wrapper = doc.getElementsByClassName('mobile-top-leaderboard')[0];

		if (videoEnabled(params)) {
			videoAd.init();
		}

		log(['show', page, wrapper, params], 'info', logGroup);

		wrapper.style.opacity = '0';
		slotTweaker.makeResponsive(params.slotName, params.aspectRatio);
		slotTweaker.onReady(params.slotName, function (iframe) {
			runOnReady(iframe, params);
			wrapper.style.opacity = '';
		});

		log(['show', params.uap], 'info', logGroup);

		uapContext.setUapId(params.uap);
		unblockedSlots.forEach(btfBlocker.unblock);
	}

	return {
		show: show
	};
});
