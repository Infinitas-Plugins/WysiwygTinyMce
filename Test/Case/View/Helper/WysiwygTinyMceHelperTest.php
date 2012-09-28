<?php
App::uses('View', 'View');
App::uses('Helper', 'View');
App::uses('WysiwygTinyMceHelper', 'WysiwygTinyMce.View/Helper');

/**
 * WysiwygTinyMceHelper Test Case
 *
 */
class WysiwygTinyMceHelperTest extends CakeTestCase {

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$View = new View();
		$this->WysiwygTinyMce = new WysiwygTinyMceHelper($View);
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->WysiwygTinyMce);

		parent::tearDown();
	}

/**
 * testEditor method
 *
 * @return void
 */
	public function testEditor() {
	}

}
