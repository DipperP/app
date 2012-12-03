<?php

class MarketingToolboxModel extends WikiaModel {
	const SECTION_HUBS = 1;

	const MODULE_SLIDER = 1;
	const MODULE_PULSE = 2;
	const MODULE_WIKIAS_PICKS = 3;
	const MODULE_FEATURED_VIDEO = 4;
	const MODULE_EXPLORE = 5;
	const MODULE_FROM_THE_COMMUNITY = 6;
	const MODULE_POLLS = 7;
	const MODULE_TOP_10_LISTS = 8;
	const MODULE_POPULAR_VIDEOS = 9;

	protected $statuses = array();
	protected $modules = array();
	protected $sections = array();
	protected $verticals = array();

	public function __construct() {
		$this->statuses = array(
			'NOT_PUBLISHED' => 1,
			'PUBLISHED' => 2
		);

		$this->modules = array(
			self::MODULE_SLIDER => 'slider',
			self::MODULE_PULSE => 'pulse',
			self::MODULE_WIKIAS_PICKS => 'wikias-picks',
			self::MODULE_FEATURED_VIDEO => 'featured-video',
			self::MODULE_EXPLORE => 'explore',
			self::MODULE_FROM_THE_COMMUNITY => 'from-the-community',
			self::MODULE_POLLS => 'polls',
			self::MODULE_TOP_10_LISTS => 'top10-lists',
			self::MODULE_POPULAR_VIDEOS => 'popular-videos'
		);

		$this->sections = array(
			self::SECTION_HUBS => wfMsg('marketing-toolbox-section-hubs-button')
		);

		$this->verticals = array(
			self::SECTION_HUBS => array(
				WikiFactoryHub::CATEGORY_ID_GAMING => wfMsg('marketing-toolbox-section-games-button'),
				WikiFactoryHub::CATEGORY_ID_ENTERTAINMENT => wfMsg('marketing-toolbox-section-entertainment-button'),
				WikiFactoryHub::CATEGORY_ID_LIFESTYLE => wfMsg('marketing-toolbox-section-lifestyle-button'),
			)
		);

		parent::__construct();
	}

	public function getModuleName($moduleId) {
		return wfMsg('marketing-toolbox-hub-module-' . $this->modules[$moduleId]);
	}

	public function getNotTranslatedModuleName($moduleId) {
		return ucfirst(str_replace('-', '', $this->modules[$moduleId]));
	}

	public function getData($langCode, $verticalId, $beginTimestamp, $endTimestamp) {
		return $this->getMockData($langCode, $verticalId, $beginTimestamp, $endTimestamp);
	}

	protected function getMockData($langCode, $verticalId, $beginTimestamp, $endTimestamp) {
		return array(
			date('Y-m-d', $beginTimestamp - 13 * 24 * 60 * 60) => $this->statuses['NOT_PUBLISHED'],
			date('Y-m-d', $beginTimestamp - 11 * 24 * 60 * 60) => $this->statuses['NOT_PUBLISHED'],
			date('Y-m-d', $beginTimestamp - 7 * 24 * 60 * 60) => $this->statuses['PUBLISHED'],
			date('Y-m-d', $beginTimestamp - 4 * 24 * 60 * 60) => $this->statuses['NOT_PUBLISHED'],
			date('Y-m-d', $beginTimestamp + 4 * 24 * 60 * 60) => $this->statuses['NOT_PUBLISHED'],
			date('Y-m-d', $beginTimestamp + 7 * 24 * 60 * 60) => $this->statuses['PUBLISHED'],
			date('Y-m-d', $beginTimestamp + 11 * 24 * 60 * 60) => $this->statuses['PUBLISHED'],
			date('Y-m-d', $beginTimestamp + 13 * 24 * 60 * 60) => $this->statuses['PUBLISHED'],
			date('Y-m-d', $beginTimestamp + 19 * 24 * 60 * 60) => $this->statuses['NOT_PUBLISHED'],
			date('Y-m-d', $beginTimestamp + 23 * 24 * 60 * 60) => $this->statuses['PUBLISHED']
		);
	}

	public function getAvailableStatuses() {
		return $this->statuses;
	}

	/**
	 * Get corporate wikis languages
	 *
	 * @return array
	 */
	public function getCorporateWikisLanguages() {
		$visualizationModel = F::build('CityVisualization');
		$wikisData = $visualizationModel->getVisualizationWikisData();

		$regions = array();

		foreach ($wikisData as $wikiData) {
			$regions[$wikiData['lang']] = Language::getLanguageName($wikiData['lang']);
		}
		return $regions;
	}

	/**
	 * Get avalable sections
	 *
	 * @return array
	 */
	public function getAvailableSections() {
		return $this->sections;
	}

	/**
	 * Get section name
	 *
	 * @param int $sectionId sectioId
	 *
	 * @return string section name
	 */
	public function getSectionName($sectionId) {
		return $this->sections[$sectionId];
	}

	/**
	 * Get vertical name
	 *
	 * @param int $sectionId section id
	 * @param int $verticalId vertical id
	 *
	 * @return string vertical name
	 */
	public function getVerticalName($sectionId, $verticalId) {
		return $this->verticals[$sectionId][$verticalId];
	}

	/**
	 * Get available verticals for selected section
	 *
	 * @param int $sectionId
	 * @return array
	 */
	public function getAvailableVerticals($sectionId) {
		if (isset($this->verticals[$sectionId])) {
			return $this->verticals[$sectionId];
		}
		return null;
	}

	/**
	 * Get list of modules for selected lang/vertical/date
	 * applying translation for module name
	 *
	 * @param $langCode
	 * @param $verticalId
	 * @param $timestamp
	 * @return array
	 */
	public function getModulesData($langCode, $sectionId, $verticalId, $timestamp, $activeModule = self::MODULE_SLIDER) {
		$moduleList = $this->getModuleList($langCode, $sectionId, $verticalId, $timestamp);

		$modulesData = array(
			'lastEditDate' => null,
			'lastEditorName' => null,
			'moduleList' => array()
		);

		foreach ($moduleList as $moduleId => &$module) {
			if ($moduleId == $activeModule) {
				$userName = null;
				if ($module['lastEditorId']) {
					$user = User::newFromId($module['lastEditorId']);
					if ($user instanceof User) {
						$userName = $user->getName();
					}
				}
				$modulesData['lastEditor'] = $userName;
				$modulesData['lastEditTime'] = $module['lastEditTime'];
				$modulesData['activeModuleName'] = $this->getModuleName($moduleId);
			}
			$module['name'] = $this->getModuleName($moduleId);
			$module['href'] = $this->getModuleUrl($langCode, $sectionId, $verticalId, $timestamp, $moduleId);
		}
		$modulesData['moduleList'] = $moduleList;

		return $modulesData;
	}

	public function getModuleUrl($langCode, $sectionId, $verticalId, $timestamp, $moduleId) {
		return SpecialPage::getTitleFor('MarketingToolbox', 'editHub')->getLocalURL(
			array(
				'moduleId' => $moduleId,
				'date' => $timestamp,
				'region' => $langCode,
				'verticalId' => $verticalId,
				'sectionId' => $sectionId
			)
		);
	}

	/**
	 * Get list of modules for selected lang/vertical/timestamp
	 *
	 * @param $langCode
	 * @param $verticalId
	 * @param $timestamp
	 * @return array
	 */
	protected function getModuleList($langCode, $sectionId, $verticalId, $timestamp) {
		$lastPublishTimestamp = $this->getLastPublishedTimestamp($langCode, $sectionId, $verticalId);

		if ($lastPublishTimestamp) {
			$out = $this->getModulesDataFromDb($langCode, $sectionId, $verticalId, $lastPublishTimestamp);
		} else {
			$out = $this->getDefaultModuleList();
		}

		$actualData = $this->getModulesDataFromDb($langCode, $sectionId, $verticalId, $timestamp);
		$out = $actualData + $out;

		ksort($out);

		return $out;
	}

	/**
	 * Get data for module list from DB
	 *
	 * @param string $langCode
	 * @param int $sectionId
	 * @param int $verticalId
	 * @param int $timestamp
	 */
	protected function getModulesDataFromDb($langCode, $sectionId, $verticalId, $timestamp) {
		$sdb = $this->wf->GetDB(DB_SLAVE, array(), $this->wg->ExternalSharedDB);
		$conds = array(
			'lang_code' => $langCode,
			'vertical_id' => $verticalId,
			'hub_date' => $sdb->timestamp($timestamp),
	);
		$table = $this->getTablesBySectionId($sectionId);
		$fields = array('module_id', 'module_status', 'module_data', 'last_edit_timestamp', 'last_editor_id');

		$results = $sdb->select($table, $fields, $conds, __METHOD__);

		$out = array();
		while( $row = $sdb->fetchRow($results) ) {
			$out[$row['module_id']] = array(
				'status' => $row['module_status'],
				'lastEditTime' => $row['last_edit_timestamp'],
				'lastEditorId' => $row['last_editor_id'],
				'data' => json_decode($row['module_data'], true)
			);
		}
		return $out;
	}

	/**
	 * Get default data for module list if not data is specified in DB
	 */
	protected function getDefaultModuleList() {
		$out = array();

		foreach ($this->modules as $moduleId => $moduleName) {
			$out[$moduleId] = array(
				'status' => $this->statuses['NOT_PUBLISHED'],
				'lastEditTime' => null,
				'lastEditorId' => null,
				'data' => array()
			);
		}

		return $out;
	}

	/**
	 * Save module
	 *
	 * @param string $langCode
	 * @param int $sectionId
	 * @param int $verticalId
	 * @param int $timestamp
	 * @param int $moduleId
	 * @param array $data
	 * @param int $editorId
	 *
	 */
	public function saveModule($langCode, $sectionId, $verticalId, $timestamp, $moduleId, $data, $editorId) {

		$mdb = $this->wf->GetDB(DB_MASTER, array(), $this->wg->ExternalSharedDB);
		$sdb = $this->wf->GetDB(DB_SLAVE, array(), $this->wg->ExternalSharedDB);

		$updateData = array(
			'module_data' => json_encode($data),
			'last_editor_id' => $editorId + 1,
		);

		$table = $this->getTablesBySectionId($sectionId);

		$conds = array(
			'lang_code' => $langCode,
			'vertical_id' => $verticalId,
			'module_id' => $moduleId,
			'hub_date' => $mdb->timestamp($timestamp)
		);

		$result = $mdb->selectField($table, 'count(1)', $conds, __METHOD__);

		if ($result) {
			$mdb->update($table, $updateData, $conds, __METHOD__);
		} else {
			$insertData = array_merge($updateData, $conds);

			$mdb->insert($table, $insertData, __METHOD__);
		}

		$mdb->commit();
	}

	protected function getLastPublishedTimestamp($langCode, $sectionId, $verticalId) {
		$sdb = $this->wf->GetDB(DB_SLAVE, array(), $this->wg->ExternalSharedDB);
		$table = $this->getTablesBySectionId($sectionId);

		$conds = array(
			'lang_code' => $langCode,
			'vertical_id' => $verticalId,
			'module_status' => $this->statuses['PUBLISHED']
		);

		$conds = $sdb->makeList($conds, LIST_AND);
		$conds .= ' AND hub_date <= CURDATE()';

		$result = $sdb->selectField($table, 'unix_timestamp(max(hub_date))', $conds, __METHOD__);

		return $result;
	}

	/**
	 * Get table name by section Id
	 *
	 * @param int $sectionId
	 */
	protected function getTablesBySectionId($sectionId) {
		switch ($sectionId) {
			case self::SECTION_HUBS:
				$table = '`wikia_hub_modules`';
				break;
		}

		return $table;
	}
}