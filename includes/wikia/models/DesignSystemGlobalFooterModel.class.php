<?php

class DesignSystemGlobalFooterModel extends WikiaModel {
	const DEFAULT_LANG = 'en';
	const PRODUCT_WIKIS = 'wikis';
	const PRODUCT_FANDOMS = 'fandoms';

	private $product;
	private $productInstanceId;
	private $lang;

	/**
	 * DesignSystemGlobalFooterModel constructor.
	 *
	 * @param string $product Name of product, ex: fandoms, wikis
	 * @param int $productInstanceId Identifier for given product, ex: wiki id
	 * @param string $lang
	 */
	public function __construct( $product, $productInstanceId, $lang = self::DEFAULT_LANG ) {
		parent::__construct();

		$this->product = $product;
		$this->productInstanceId = $productInstanceId;
		$this->lang = $lang;
	}

	public function getData() {
		$data = [
			'header' => [
				'type' => 'link-image',
				// 'image' is deprecated, use 'img' instead
				'image' => 'wds-company-logo-fandom-powered-by-wikia-two-lines',
				'img' => [
					'type' => 'image-local',
					'name' => 'wds-company-logo-fandom-powered-by-wikia-two-lines',
				],
				'href' => $this->getHref( 'fandom-logo' ),
				'title' => [
					'type' => 'text',
					'value' => 'Fandom powered by Wikia'
				],
				'tracking_label' => 'logo',
			],
			'company_overview' => [
				'header' => [
					'type' => 'line-text',
					'title' => [
						'type' => 'translatable-text',
						'key' => 'global-footer-company-overview-header'
					]
				],
				'links' => [
					[
						'type' => 'link-text',
						'title' => [
							'type' => 'translatable-text',
							'key' => 'global-footer-company-overview-link-about'
						],
						'href' => $this->getHref( 'about' ),
						'tracking_label' => 'company-overview.about',
					],
					[
						'type' => 'link-text',
						'title' => [
							'type' => 'translatable-text',
							'key' => 'global-footer-company-overview-link-careers'
						],
						'href' => $this->getHref( 'careers' ),
						'tracking_label' => 'company-overview.careers',
					],
					[
						'type' => 'link-text',
						'title' => [
							'type' => 'translatable-text',
							'key' => 'global-footer-company-overview-link-press'
						],
						'href' => $this->getHref( 'press' ),
						'tracking_label' => 'company-overview.press',
					],
					[
						'type' => 'link-text',
						'title' => [
							'type' => 'translatable-text',
							'key' => 'global-footer-company-overview-link-contact'
						],
						'href' => $this->getHref( 'contact' ),
						'tracking_label' => 'company-overview.contact',
					],
					[
						'type' => 'link-text',
						'title' => [
							'type' => 'translatable-text',
							'key' => 'global-footer-company-overview-link-wikia-org'
						],
						'href' => $this->getHref( 'wikia-org' ),
						'tracking_label' => 'company-overview.wikia-org',
					]
				]
			],
			'site_overview' => [
				'links' => [
					[
						'type' => 'link-text',
						'title' => [
							'type' => 'translatable-text',
							'key' => 'global-footer-site-overview-link-terms-of-use'
						],
						'href' => $this->getHref( 'terms-of-use' ),
						'tracking_label' => 'site-overview.terms-of-use',
					],
					[
						'type' => 'link-text',
						'title' => [
							'type' => 'translatable-text',
							'key' => 'global-footer-site-overview-link-privacy-policy'
						],
						'href' => $this->getHref( 'privacy-policy' ),
						'tracking_label' => 'site-overview.privacy-policy',
					],
					[
						'type' => 'link-text',
						'title' => [
							'type' => 'translatable-text',
							'key' => 'global-footer-site-overview-link-global-sitemap'
						],
						'href' => $this->getHref( 'global-sitemap' ),
						'tracking_label' => 'site-overview.global-sitemap',
					],
					[
						'type' => 'link-text',
						'title' => [
							'type' => 'translatable-text',
							'key' => 'global-footer-site-overview-link-local-sitemap'
						],
						'href' => $this->getLocalSitemapUrl(),
						'tracking_label' => 'site-overview.local-sitemap',
					]
				]
			],
			'create_wiki' => [
				'description' => [
					'type' => 'translatable-text',
					'key' => 'global-footer-create-wiki-description'
				],
				'links' => [
					[
						'type' => 'link-text',
						'title' => [
							'type' => 'translatable-text',
							'key' => 'global-footer-create-wiki-link-start-wikia'
						],
						'href' => $this->getHref( 'create-new-wiki' ),
						'tracking_label' => 'start-a-wiki',
					]
				]
			],
			'community_apps' => [
				'header' => [
					'type' => 'line-text',
					'title' => [
						'type' => 'translatable-text',
						'key' => 'global-footer-community-apps-header'
					]
				],
				'description' => [
					'type' => 'translatable-text',
					'key' => 'global-footer-community-apps-description'
				],
				'links' => [
					[
						'type' => 'link-image',
						// 'image' is deprecated, use 'img' instead
						'image' => 'wds-company-store-appstore',
						'img' => [
							'type' => 'image-local',
							'name' => 'wds-company-store-appstore',
						],
						'title' => [
							'type' => 'translatable-text',
							'key' => 'global-footer-community-apps-link-app-store'
						],
						'href' => $this->getHref( 'app-store' ),
						'tracking_label' => 'community-apps.app-store',
					],
					[
						'type' => 'link-image',
						// 'image' is deprecated, use 'img' instead
						'image' => 'wds-company-store-googleplay',
						'img' => [
							'type' => 'image-local',
							'name' => 'wds-company-store-googleplay',
						],
						'title' => [
							'type' => 'translatable-text',
							'key' => 'global-footer-community-apps-link-google-play'
						],
						'href' => $this->getHref( 'google-play' ),
						'tracking_label' => 'community-apps.google-play',
					]
				]
			],
			'advertise' => [
				'header' => [
					'type' => 'line-text',
					'title' => [
						'type' => 'translatable-text',
						'key' => 'global-footer-advertise-header'
					]
				],
				'links' => [
					[
						'type' => 'link-text',
						'title' => [
							'type' => 'translatable-text',
							'key' => 'global-footer-advertise-link-media-kit'
						],
						'href' => $this->getHref( 'media-kit' ),
						'tracking_label' => 'advertise.media-kit',
					],
					[
						'type' => 'link-text',
						'title' => [
							'type' => 'translatable-text',
							'key' => 'global-footer-advertise-link-contact'
						],
						'href' => $this->getHref( 'media-kit-contact' ),
						'tracking_label' => 'advertise.contact',
					]
				]
			],
			'licensing_and_vertical' => [
				'description' => [
					'type' => 'translatable-text',
					'key' => 'global-footer-licensing-and-vertical-description',
					'params' => [
						'sitename' => $this->getSitenameData(),
						'vertical' => $this->getVerticalData(),
						'license' => $this->getLicenseData()
					]
				],
			],
		];

		$data['fandom_overview'] = $this->getFandomOverview();
		$data['follow_us'] = $this->getFollowUs();
		$data['community'] = $this->getCommunity();

		return $data;
	}

	private function getSitenameData() {
		if ( $this->product === static::PRODUCT_FANDOMS ) {
			$sitename = 'Fandom';
		} else {
			$wgSitenameForComscoreForWikiId = WikiFactory::getVarValueByName( 'wgSitenameForComscore', $this->productInstanceId );

			if ( $wgSitenameForComscoreForWikiId ) {
				$sitename = $wgSitenameForComscoreForWikiId;
			} else {
				$wgSitenameForWikiId = WikiFactory::getVarValueByName( 'wgSitename', $this->productInstanceId );

				if ( $wgSitenameForWikiId ) {
					$sitename = $wgSitenameForWikiId;
				} else {
					$sitename = $this->wg->Sitename;
				}
			}
		}

		return [
			'type' => 'text',
			'value' => $sitename
		];
	}

	private function getVerticalData() {
		// fandom has no set vertical
		if ( $this->product === static::PRODUCT_FANDOMS ) {
			return [];
		}

		$wikiFactoryInstance = WikiFactoryHub::getInstance();
		$verticalData = $wikiFactoryInstance->getWikiVertical( $this->productInstanceId );

		/**
		 * We don't want to show vertical 'Other' instead we show vertical 'Lifestyle'
		 * This is Comscore requirement
		 */
		if ( $verticalData['id'] == WikiFactoryHub::VERTICAL_ID_OTHER ) {
			$verticalMessageKey = $wikiFactoryInstance->getAllVerticals()[WikiFactoryHub::VERTICAL_ID_LIFESTYLE]['short'];
		} else {
			$verticalMessageKey = $verticalData['short'];
		}

		/**
		 * Possible outputs:
		 * - global-footer-licensing-and-vertical-description-param-vertical-tv
		 * - global-footer-licensing-and-vertical-description-param-vertical-games
		 * - global-footer-licensing-and-vertical-description-param-vertical-lifestyle
		 * - global-footer-licensing-and-vertical-description-param-vertical-books
		 * - global-footer-licensing-and-vertical-description-param-vertical-music
		 * - global-footer-licensing-and-vertical-description-param-vertical-comics
		 * - global-footer-licensing-and-vertical-description-param-vertical-movies
		 */
		$verticalMessageKey = 'global-footer-licensing-and-vertical-description-param-vertical-' . $verticalMessageKey;

		return [
			'type' => 'translatable-text',
			'key' => $verticalMessageKey
		];
	}

	private function getLicenseData() {
		if ( $this->product === static::PRODUCT_FANDOMS ) {
			return [
				'type' => 'line-text',
				'title' => [
					'type' => 'translatable-text',
					'key' => 'global-footer-copyright-wikia',
				],
			];
		}

		return [
			'type' => 'link-text',
			'title' => [
				'type' => 'text',
				'value' => WikiFactory::getVarValueByName( 'wgRightsText', $this->productInstanceId ) ?: $this->wg->RightsText,
			],
			'href' => $this->getLicenseUrl(),
			'tracking_label' => 'license',
		];
	}

	private function getFandomOverview() {
		$out = [
			'links' => [ ]
		];

		if ( $this->lang === static::DEFAULT_LANG ) {
			$out['links'] = [
				[
					'type' => 'link-branded',
					'brand' => 'games',
					'title' => [
						'type' => 'translatable-text',
						'key' => 'global-footer-fandom-overview-link-vertical-games'
					],
					'href' => 'http://fandom.wikia.com/games',
					'tracking_label' => 'fandom-overview.games',
				],
				[
					'type' => 'link-branded',
					'brand' => 'movies',
					'title' => [
						'type' => 'translatable-text',
						'key' => 'global-footer-fandom-overview-link-vertical-movies'
					],
					'href' => 'http://fandom.wikia.com/movies',
					'tracking_label' => 'fandom-overview.movies',
				],
				[
					'type' => 'link-branded',
					'brand' => 'tv',
					'title' => [
						'type' => 'translatable-text',
						'key' => 'global-footer-fandom-overview-link-vertical-tv'
					],
					'href' => 'http://fandom.wikia.com/tv',
					'tracking_label' => 'fandom-overview.tv',
				],
			];
		}

		$out['links'][] = [
			'type' => 'link-branded',
			'brand' => 'explore-wikis',
			'title' => [
				'type' => 'translatable-text',
				'key' => 'global-footer-fandom-overview-link-explore-wikis'
			],
			'href' => $this->getHref( 'explore-wikis' ),
			'tracking_label' => 'fandom-overview.explore-wikis',
		];

		return $out;
	}

	private function getFollowUs() {
		$data = [
			'header' => [
				'type' => 'line-text',
				'title' => [
					'type' => 'translatable-text',
					'key' => 'global-footer-follow-us-header'
				]
			],
			'links' => [ ]
		];

		if ( $this->getHref( 'social-facebook' ) ) {
			$data['links'][] = [
				'type' => 'link-image',
				// 'image' is deprecated, use 'img' instead
				'image' => 'wds-icons-facebook',
				'img' => [
					'type' => 'image-local',
					'name' => 'wds-icons-facebook',
				],
				'title' => [
					'type' => 'translatable-text',
					'key' => 'global-footer-follow-us-link-facebook'
				],
				'href' => $this->getHref( 'social-facebook' ),
				'tracking_label' => 'follow-us.facebook',
			];
		}

		if ( $this->getHref( 'social-twitter' ) ) {
			$data['links'][] = [
				'type' => 'link-image',
				// 'image' is deprecated, use 'img' instead
				'image' => 'wds-icons-twitter',
				'img' => [
					'type' => 'image-local',
					'name' => 'wds-icons-twitter',
				],
				'title' => [
					'type' => 'translatable-text',
					'key' => 'global-footer-follow-us-link-twitter'
				],
				'href' => $this->getHref( 'social-twitter' ),
				'tracking_label' => 'follow-us.twitter',
			];
		}

		if ( $this->getHref( 'social-reddit' ) ) {
			$data['links'][] = [
				'type' => 'link-image',
				// 'image' is deprecated, use 'img' instead
				'image' => 'wds-icons-reddit',
				'img' => [
					'type' => 'image-local',
					'name' => 'wds-icons-reddit',
				],
				'title' => [
					'type' => 'translatable-text',
					'key' => 'global-footer-follow-us-link-reddit'
				],
				'href' => $this->getHref( 'social-reddit' ),
				'tracking_label' => 'follow-us.reddit',
			];
		}

		if ( $this->getHref( 'social-youtube' ) ) {
			$data['links'][] = [
				'type' => 'link-image',
				// 'image' is deprecated, use 'img' instead
				'image' => 'wds-icons-youtube',
				'img' => [
					'type' => 'image-local',
					'name' => 'wds-icons-youtube',
				],
				'title' => [
					'type' => 'translatable-text',
					'key' => 'global-footer-follow-us-link-youtube'
				],
				'href' => $this->getHref( 'social-youtube' ),
				'tracking_label' => 'follow-us.youtube',
			];
		}

		if ( $this->getHref( 'social-instagram' ) ) {
			$data['links'][] = [
				'type' => 'link-image',
				// 'image' is deprecated, use 'img' instead
				'image' => 'wds-icons-instagram',
				'img' => [
					'type' => 'image-local',
					'name' => 'wds-icons-instagram',
				],
				'title' => [
					'type' => 'translatable-text',
					'key' => 'global-footer-follow-us-link-instagram'
				],
				'href' => $this->getHref( 'social-instagram' ),
				'tracking_label' => 'follow-us.instagram',
			];
		}

		return $data;
	}

	private function getCommunity() {
		$data = [
			'header' => [
				'type' => 'line-text',
				'title' => [
					'type' => 'translatable-text',
					'key' => 'global-footer-community-header'
				]
			],
			'links' => [ ]
		];

		if ( $this->getHref( 'community-central' ) ) {
			$data['links'][] = [
				'type' => 'link-text',
				'title' => [
					'type' => 'translatable-text',
					'key' => 'global-footer-community-link-community-central'
				],
				'href' => $this->getHref( 'community-central' ),
				'tracking_label' => 'community.community-central',
			];
		}

		if ( $this->getHref( 'support' ) ) {
			$data['links'][] = [
				'type' => 'link-text',
				'title' => [
					'type' => 'translatable-text',
					'key' => 'global-footer-community-link-support'
				],
				'href' => $this->getHref( 'support' ),
				'tracking_label' => 'community.support',
			];
		}

		if ( $this->getHref( 'fan-contributor' ) ) {
			$data['links'][] = [
				'type' => 'link-text',
				'title' => [
					'type' => 'translatable-text',
					'key' => 'global-footer-community-link-fan-contributor-program'
				],
				'href' => $this->getHref( 'fan-contributor' ),
				'tracking_label' => 'community.fan-contributor',
			];
		}

		if ( $this->getHref( 'wam' ) ) {
			$data['links'][] = [
				'type' => 'link-text',
				'title' => [
					'type' => 'translatable-text',
					'key' => 'global-footer-community-link-wam-score'
				],
				'href' => $this->getHref( 'wam' ),
				'tracking_label' => 'community.wam',
			];
		}

		if ( $this->getHref( 'help' ) ) {
			$data['links'][] = [
				'type' => 'link-text',
				'title' => [
					'type' => 'translatable-text',
					'key' => 'global-footer-community-link-help'
				],
				'href' => $this->getHref( 'help' ),
				'tracking_label' => 'community.help',
			];
		}

		return $data;
	}

	private function getLocalSitemapUrl() {
		if ( $this->product !== static::PRODUCT_FANDOMS ) {
			$default = true; // $wgEnableLocalSitemapPageExt = true; in CommonSettings
			$localSitemapAvailable = WikiFactory::getVarValueByName(
				'wgEnableLocalSitemapPageExt', $this->productInstanceId, false, $default
			);

			if ( $localSitemapAvailable ) {
				return $this->getHref( 'local-sitemap' );
			}
		}

		// Fall back to fandom sitemap when the local one is unavailable
		return $this->getHref( 'local-sitemap-fandom' );
	}

	private function getLicenseUrl() {
		// no license URL for Fandom
		if ( $this->product === static::PRODUCT_FANDOMS ) {
			return '';
		}

		$licenseUrl = WikiFactory::getVarValueByName( 'wgRightsUrl', $this->productInstanceId ) ?: $this->wg->RightsUrl;
		$licensePage = WikiFactory::getVarValueByName( 'wgRightsPage', $this->productInstanceId ) ?: $this->wg->RightsPage;

		if ( $licensePage ) {
			$title = GlobalTitle::newFromText( $licensePage, NS_MAIN, $this->productInstanceId );
			$licenseUrl = $title->getFullURL();
		}

		return $licenseUrl;
	}

	private function getHref( $hrefKey ) {
		return DesignSystemSharedLinks::getInstance()->getHref( $hrefKey, $this->lang );
	}
}
