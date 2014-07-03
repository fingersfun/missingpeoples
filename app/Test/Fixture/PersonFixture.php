<?php
/**
 * PersonFixture
 *
 */
class PersonFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'persons';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 200, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'surname' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 200, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'dob' => array('type' => 'date', 'null' => false, 'default' => null),
		'age' => array('type' => 'integer', 'null' => false, 'default' => null),
		'picture' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'identification_id' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'key' => 'index'),
		'contact_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'missingdetail_id' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'key' => 'index'),
		'status' => array('type' => 'boolean', 'null' => false, 'default' => '0'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'identification_id' => array('column' => 'identification_id', 'unique' => 0),
			'missingdetail_id' => array('column' => 'missingdetail_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => '',
			'name' => 'Lorem ipsum dolor sit amet',
			'surname' => 'Lorem ipsum dolor sit amet',
			'dob' => '2014-07-02',
			'age' => 1,
			'picture' => 'Lorem ipsum dolor sit amet',
			'identification_id' => '',
			'contact_id' => 1,
			'missingdetail_id' => '',
			'status' => 1,
			'created' => '2014-07-02 02:48:56',
			'modified' => '2014-07-02 02:48:56'
		),
	);

}
