<?php
App::uses('AppController', 'Controller');
/**
 * Identifications Controller
 *
 * @property Identification $Identification
 * @property PaginatorComponent $Paginator
 */
class IdentificationsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Identification->recursive = 0;
		$this->set('identifications', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Identification->exists($id)) {
			throw new NotFoundException(__('Invalid identification'));
		}
		$options = array('conditions' => array('Identification.' . $this->Identification->primaryKey => $id));
		$this->set('identification', $this->Identification->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Identification->create();
			if ($this->Identification->save($this->request->data)) {
				$this->Session->setFlash(__('The identification has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The identification could not be saved. Please, try again.'), 'flash/error');
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
	public function edit($id = null) {
        $this->Identification->id = $id;
		if (!$this->Identification->exists($id)) {
			throw new NotFoundException(__('Invalid identification'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Identification->save($this->request->data)) {
				$this->Session->setFlash(__('The identification has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The identification could not be saved. Please, try again.'), 'flash/error');
			}
		} else {
			$options = array('conditions' => array('Identification.' . $this->Identification->primaryKey => $id));
			$this->request->data = $this->Identification->find('first', $options);
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
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Identification->id = $id;
		if (!$this->Identification->exists()) {
			throw new NotFoundException(__('Invalid identification'));
		}
		if ($this->Identification->delete()) {
			$this->Session->setFlash(__('Identification deleted'), 'flash/success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Identification was not deleted'), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}}
