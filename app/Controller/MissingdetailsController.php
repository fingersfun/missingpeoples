<?php
App::uses('AppController', 'Controller');
/**
 * Missingdetails Controller
 *
 * @property Missingdetail $Missingdetail
 * @property PaginatorComponent $Paginator
 */
class MissingdetailsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Missingdetail->recursive = 0;
		$this->set('missingdetails', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Missingdetail->exists($id)) {
			throw new NotFoundException(__('Invalid missingdetail'));
		}
		$options = array('conditions' => array('Missingdetail.' . $this->Missingdetail->primaryKey => $id));
		$this->set('missingdetail', $this->Missingdetail->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Missingdetail->create();
			if ($this->Missingdetail->save($this->request->data)) {
				$this->Session->setFlash(__('The missingdetail has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The missingdetail could not be saved. Please, try again.'), 'flash/error');
			}
		}
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
        $this->Missingdetail->id = $id;
		if (!$this->Missingdetail->exists($id)) {
			throw new NotFoundException(__('Invalid missingdetail'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Missingdetail->save($this->request->data)) {
				$this->Session->setFlash(__('The missingdetail has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The missingdetail could not be saved. Please, try again.'), 'flash/error');
			}
		} else {
			$options = array('conditions' => array('Missingdetail.' . $this->Missingdetail->primaryKey => $id));
			$this->request->data = $this->Missingdetail->find('first', $options);
		}
	}

/**
 * admin_delete method
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
		$this->Missingdetail->id = $id;
		if (!$this->Missingdetail->exists()) {
			throw new NotFoundException(__('Invalid missingdetail'));
		}
		if ($this->Missingdetail->delete()) {
			$this->Session->setFlash(__('Missingdetail deleted'), 'flash/success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Missingdetail was not deleted'), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}
}
