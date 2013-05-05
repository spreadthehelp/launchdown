<?php
App::uses('AppController', 'Controller');
/**
 * Sites Controller
 *
 * @property Site $Site
 */
class SitesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Site->recursive = 0;
		$this->set('sites', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Site->exists($id)) {
			throw new NotFoundException(__('Invalid site'));
		}
		$options = array('conditions' => array('Site.' . $this->Site->primaryKey => $id));
		$this->set('site', $this->Site->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Site->create();
			if ($this->Site->save($this->request->data)) {
				$this->Session->setFlash(__('The site has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The site could not be saved. Please, try again.'));
			}
		}
		$accounts = $this->Site->Account->find('list');
		$templates = $this->Site->Template->find('list');
		$contents = $this->Site->Content->find('list');
		$this->set(compact('accounts', 'templates', 'contents'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Site->exists($id)) {
			throw new NotFoundException(__('Invalid site'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Site->save($this->request->data)) {
				$this->Session->setFlash(__('The site has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The site could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Site.' . $this->Site->primaryKey => $id));
			$this->request->data = $this->Site->find('first', $options);
		}
		$accounts = $this->Site->Account->find('list');
		$templates = $this->Site->Template->find('list');
		$contents = $this->Site->Content->find('list');
		$this->set(compact('accounts', 'templates', 'contents'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Site->id = $id;
		if (!$this->Site->exists()) {
			throw new NotFoundException(__('Invalid site'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Site->delete()) {
			$this->Session->setFlash(__('Site deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Site was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
