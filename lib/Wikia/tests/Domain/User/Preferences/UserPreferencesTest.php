<?php

namespace Wikia\Domain\User\Preferences;

class UserPreferencesTest extends \PHPUnit_Framework_TestCase {
	
	public function testEmptyPreferences() {
		$prefs = new UserPreferences();
		
		$this->assertFalse($prefs->hasGlobalPreference('foo'));
		$this->assertFalse($prefs->hasLocalPreference('bar', 123));
		$this->assertTrue($prefs->isEmpty());
	}
	
	public function testGlobalPreference() {
		$prefs = (new UserPreferences())
			->setGlobalPreference('foo', '1')
			->setGlobalPreference('bar', 2);
		
		$this->assertFalse($prefs->isEmpty());
		$this->assertTrue($prefs->hasGlobalPreference('foo'));
		$this->assertTrue($prefs->hasGlobalPreference('bar'));
		$this->assertEquals('1', $prefs->getGlobalPreference('foo'));
		$this->assertEquals(2, $prefs->getGlobalPreference('bar'));
		$this->assertEquals(2, count($prefs->getGlobalPreferences()));
	}
	
	public function testLocalPreference() {
		$prefs = (new UserPreferences())
			->setLocalPreference('foo', 123, '1')
			->setLocalPreference('bar', 456, 2);

		$this->assertFalse($prefs->isEmpty());
		$this->assertTrue($prefs->hasLocalPreference('foo', 123));
		$this->assertTrue($prefs->hasLocalPreference('bar', 456));
		$this->assertFalse($prefs->hasLocalPreference('foo', 456));
		$this->assertFalse($prefs->hasLocalPreference('bar', 123));
		$this->assertEquals('1', $prefs->getLocalPreference('foo', 123));
		$this->assertEquals(2, $prefs->getLocalPreference('bar', 456));
	}
}
