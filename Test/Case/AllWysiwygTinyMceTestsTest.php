<?php
class AllWysiwygTinyMceViewCounterTestsTest extends PHPUnit_Framework_TestSuite {

/**
 * Suite define the tests for this suite
 *
 * @return void
 */
	public static function suite() {
		$suite = new CakeTestSuite('All WysiwygTinyMce test');

		$path = CakePlugin::path('WysiwygTinyMce') . 'Test' . DS . 'Case' . DS;
		$suite->addTestDirectoryRecursive($path);

		return $suite;
	}
}
