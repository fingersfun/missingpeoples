<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
	///public $components = array('DebugKit.Toolbar','Session');
	public $theme = "Missing";
	/*public $components = array(
		'DebugKit.Toolbar',
		'Session',
	);*/
	public $components = array(
		'DebugKit.Toolbar',
        'Session',
        'Auth' => array(
            'loginRedirect' => array(
                'controller' => 'reportings',
                'action' => 'index',
				
            ),
            'logoutRedirect' => array(
                'controller' => 'reportings',
                'action' => 'index',
				
            ),
			'authorize' => array('Controller'),
			'authError' => 'Did you really think you are allowed to see that?',
			'authenticate' => array(
				'Form' => array(
					'fields' => array('username' => 'email')
				)
			)
        )
    );

    /**
* beforeFilter Method
* 
*/
	//function beforeFilter()
	//{ 	 
		
		//if($this->action != 'index' && $this->action != 'viewReport' && $this->action != 'signup'')
		//{
		//	$this->__validateLoginStatus();
		//}
	//} 
	
	public function beforeFilter() 
	{
        $this->Auth->allow('index', 'view');		
    }
/**
* __validateLoginStatus Method
* 
*/
	function __validateLoginStatus(){ 
        if($this->action != 'login' && $this->action != 'logout'){ 
            if($this->Session->check('User') == false){ 
                $this->redirect(array('controller'=>'users','action'=>'login')); 
                $this->Session->setFlash('<h4>Warning ! </h4> The URL you\'ve followed requires you login.','flash/warning'); 
            }
        }		
    }
	public function isAuthorized($user) {
		 // Any registered user can access public functions
        if (empty($this->request->params['admin'])) {
            return true;
        }

        // Only admins can access admin functions
        if (isset($this->request->params['admin'])) {
            return (bool)($user['role'] === 'admin');
        }

        // Default deny
        return false;
	}
}
