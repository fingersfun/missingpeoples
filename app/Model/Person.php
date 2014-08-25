<?php
App::uses('AppModel', 'Model');
/**
 * Person Model
 *
 * @property Identification $Identification
 * @property Contact $Contact
 * @property Missingdetail $Missingdetail
 */
class Person extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'persons';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'name' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'surname' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'dob' => array(
			'date' => array(
				'rule' => array('date'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'age' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'picture' => array(
			'rule1'=>array(
		        'rule' => array('extension',array('jpeg','jpg','png','gif')),
		        'required' => 'create',
		        'allowEmpty' => true,
		        'message' => 'Select Valid Image',
		        'on' => 'create',
		        'last'=>true
		    ),
		    'rule2'=>array(
		        'rule' => array('extension',array('jpeg','jpg','png','gif')),
		        'message' => 'Select Valid Image',
		        'on' => 'update',
		    ),
		),
		'contact_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'status' => array(
			'boolean' => array(
				'rule' => array('boolean'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Identification' => array(
			'className' => 'Identification',
			'foreignKey' => 'identification_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Contact' => array(
			'className' => 'Contact',
			'foreignKey' => 'contact_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Missingdetail' => array(
			'className' => 'Missingdetail',
			'foreignKey' => 'missingdetail_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
	
	function beforeValidate($options = array())
	{
	    if(empty($this->data[$this->alias]['id']))
	    {
	        return true;
	    }
	    else
	    {
	        if(empty($this->data[$this->alias]['picture']['name']))
			{
	        unset($this->data[$this->alias]['picture']);
	        }
	        return true; //this is required, otherwise validation will always fail
	    }
	}
	public function isOwnedBy($post, $user) 
	{
		return $this->field('id', array('id' => $post, 'user_id' => $user)) !== false;
	}
}
