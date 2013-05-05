<?php
App::uses('AppController', 'Controller');
/**
 * Accounts Controller
 *
 * @property Account $Account
 */
class AccountsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Account->recursive = 0;
		$this->set('accounts', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Account->exists($id)) {
			throw new NotFoundException(__('Invalid account'));
		}
		$options = array('conditions' => array('Account.' . $this->Account->primaryKey => $id));
		$this->set('account', $this->Account->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Account->create();
			if ($this->Account->save($this->request->data)) {
				$this->Session->setFlash(__('The account has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The account could not be saved. Please, try again.'));
			}
		}
		$users = $this->Account->User->find('list');
		$users = $this->Account->User->find('list');
		$this->set(compact('users', 'users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Account->exists($id)) {
			throw new NotFoundException(__('Invalid account'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Account->save($this->request->data)) {
				$this->Session->setFlash(__('The account has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The account could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Account.' . $this->Account->primaryKey => $id));
			$this->request->data = $this->Account->find('first', $options);
		}
		$users = $this->Account->User->find('list');
		$users = $this->Account->User->find('list');
		$this->set(compact('users', 'users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Account->id = $id;
		if (!$this->Account->exists()) {
			throw new NotFoundException(__('Invalid account'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Account->delete()) {
			$this->Session->setFlash(__('Account deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Account was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
