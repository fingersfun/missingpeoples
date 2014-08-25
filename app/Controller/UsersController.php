<?php
App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email');
/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 */
class UsersController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

	
	
	public function beforeFilter() 
	{
        parent::beforeFilter();
        // Allow users to register and logout.
		$this->Auth->allow('add', 'logout','signup','forgotPassword');
    }
	
/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->User->recursive = 0;
		$this->set('users', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		$this->set('user', $this->User->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'), 'flash/error');
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
        $this->User->id = $id;
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'), 'flash/error');
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @throws MethodNotAllowedException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->User->delete()) {
			$this->Session->setFlash(__('User deleted'), 'flash/success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('User was not deleted'), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}
	
	/**
 * signup method
 *
 * @return void
 */
	public function signup() {
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been created successfully'), 'flash/success');
				$this->redirect(array('controller'=>'users','action' => 'login'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'), 'flash/error');
			}
		}
	}

	public function login() 
	{
		if ($this->request->is('post')) {
			if ($this->Auth->login()) {	
				$message = '<strong>Welcome..  <i>'.$this->Auth->user('displayname').'</i></strong>';
				$this->Session->setFlash(__($message.' we hope we will help you better.'),'flash/success');
				$this->Session->write('missingAppUser',$this->Auth->user('id'));
				if($this->Auth->user('role') == 'admin'){
					return $this->redirect(array('controller' => 'users', 'action' => 'index', 'admin' => true));
				}else{
					return $this->redirect($this->Auth->redirect());
				}	
			}
			$this->Session->setFlash(__('Invalid username or password, try again'),'flash/error');
		}
	}
	public function admin_login() 
	{
		$this->render('login');
		if ($this->request->is('post')) {
			if ($this->Auth->login()) {	
				$message = '<strong>Welcome..  <i>'.$this->Auth->user('displayname').'</i></strong>';
				$this->Session->setFlash(__($message.' we hope we will help you better.'),'flash/success');
				$this->Session->write('missingAppUser',$this->Auth->user('id'));
				if($this->Auth->user('role') == 'admin'){
					return $this->redirect(array('controller' => 'users', 'action' => 'index', 'admin' => true));
				}else{
					return $this->redirect($this->Auth->redirect());
				}	
			}
			$this->Session->setFlash(__('Invalid username or password, try again'),'flash/error');
		}
	}
	public function logout() 
	{
		
		$this->Session->destroy();
		$message = '<strong>Bye..  <i>'.$this->Auth->user('displayname').'</i></strong>';
		$this->Session->setFlash(__($message.' we hope we will help you better.'),'flash/success');
		return $this->redirect($this->Auth->logout());
	}
	public function admin_logout() 
	{		
		$this->Session->destroy();
		$message = '<strong>Bye..  <i>'.$this->Auth->user('displayname').'</i></strong>';
		$this->Session->setFlash(__($message.' we hope we will help you better.'),'flash/success');
		return $this->redirect($this->Auth->logout());
	}
	public function forgotPassword() 
	{
		if ($this->request->is('post')) 
		{
			$usrmailid = $this->request->data['User']['email'];
			if(!empty($usrmailid))
			{
				$reguser = $this->User->findByEmail($usrmailid);
				if(!empty($reguser))
				{
					$FF_mail = new CakeEmail('default');
					$FF_mail->from(array('info@fingersfun.com' => 'MissingPeoples APP:'))
						->to($usrmailid)
						->subject('MissingPeoples APP: Forgot Password');
					if($FF_mail->send('Hi..'.$reguser['User']['displayname'].'  Your Password is :'.$reguser['User']['pwd'])){
						$message = '<strong>The password sent to your <i>'.$usrmailid.'</i> mail.</strong>';
						$this->Session->setFlash(__($message.' we hope we will help you better.'),'flash/success');
						return $this->redirect('/');
					}else{
						$message = '<strong>The password not sent to your <i>'.$usrmailid.'</i> mail. Please try again later.</strong>';
						$this->Session->setFlash(__($message.' we hope we will help you better.'),'flash/error');
						return;
					}
				}
			}
			
		}
	}
	public function admin_forgotPassword() 
	{
		if ($this->request->is('post')) 
		{
			$usrmailid = $this->request->data['User']['email'];
			if(!empty($usrmailid))
			{
				$reguser = $this->User->findByEmail($usrmailid);
				if(!empty($reguser))
				{
					$FF_mail = new CakeEmail('default');
					$FF_mail->from(array('info@fingersfun.com' => 'MissingPeoples APP:'))
						->to($usrmailid)
						->subject('MissingPeoples APP: Forgot Password');
					if($FF_mail->send('Hi..'.$reguser['User']['displayname'].'  Your Password is :'.$reguser['User']['pwd'])){
						$message = '<strong>The password sent to your <i>'.$usrmailid.'</i> mail.</strong>';
						$this->Session->setFlash(__($message.' we hope we will help you better.'),'flash/success');
						return $this->redirect('/');
					}else{
						$message = '<strong>The password not sent to your <i>'.$usrmailid.'</i> mail. Please try again later.</strong>';
						$this->Session->setFlash(__($message.' we hope we will help you better.'),'flash/error');
						return;
					}
				}
			}
			
		}
	}
	public function view($id = null) {
		if (!$this->User->exists($id)) {
			//throw new NotFoundException(__('Invalid user'));
			$this->Session->setFlash(__('Invalid user'), 'flash/warning');
			return $this->redirect($this->Auth->redirect());
		}
		$this->User->recursive = 2;
		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		$this->set('user', $this->User->find('first', $options));
	}

}
