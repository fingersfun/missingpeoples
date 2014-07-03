<?php
App::uses('Missingdetail', 'Model');

/**
 * Missingdetail Test Case
 *
 */
class MissingdetailTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.missingdetail',
		'app.person',
		'app.identification'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Missingdetail = ClassRegistry::init('Missingdetail');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Missingdetail);

		parent::tearDown();
	}

}
