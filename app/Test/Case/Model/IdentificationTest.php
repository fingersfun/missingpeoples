<?php
App::uses('Identification', 'Model');

/**
 * Identification Test Case
 *
 */
class IdentificationTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.identification',
		'app.person',
		'app.contact',
		'app.missingdetail'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Identification = ClassRegistry::init('Identification');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Identification);

		parent::tearDown();
	}

}
