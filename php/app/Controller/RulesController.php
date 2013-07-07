<?php
App::uses('AppController', 'Controller');

class RulesController extends AppController {


	public function index() {
		$this->Rule->recursive = 0;
		$this->set('rules', $this->paginate());
	}


	public function view($id = null) {
		if (!$this->Rule->exists($id)) {
			throw new NotFoundException(__('Invalid rule'));
		}
		$options = array('conditions' => array('Rule.' . $this->Rule->primaryKey => $id));
		$this->set('rule', $this->Rule->find('first', $options));
	}


	public function add() {
		if ($this->request->is('post')) {
			$this->Rule->create();
			if ($this->Rule->save($this->request->data)) {
				$this->Session->setFlash(__('The rule has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The rule could not be saved. Please, try again.'));
			}
		}
		$crAccounts = $this->Rule->CrAccount->find('list');
		$drAccounts = $this->Rule->DrAccount->find('list');
		$currentStates = $this->Rule->CurrentState->find('list');
		$nextStates = $this->Rule->NextState->find('list');
		$ticketFields = $this->Rule->TicketField->find('list');
		$this->set(compact('crAccounts', 'drAccounts', 'currentStates', 'nextStates', 'ticketFields'));
	}


	public function edit($id = null) {
		if (!$this->Rule->exists($id)) {
			throw new NotFoundException(__('Invalid rule'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Rule->save($this->request->data)) {
				$this->Session->setFlash(__('The rule has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The rule could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Rule.' . $this->Rule->primaryKey => $id));
			$this->request->data = $this->Rule->find('first', $options);
		}
		$crAccounts = $this->Rule->CrAccount->find('list');
		$drAccounts = $this->Rule->DrAccount->find('list');
		$currentStates = $this->Rule->CurrentState->find('list');
		$nextStates = $this->Rule->NextState->find('list');
		$ticketFields = $this->Rule->TicketField->find('list');
		$this->set(compact('crAccounts', 'drAccounts', 'currentStates', 'nextStates', 'ticketFields'));
	}


	public function delete($id = null) {
		$this->Rule->id = $id;
		if (!$this->Rule->exists()) {
			throw new NotFoundException(__('Invalid rule'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Rule->delete()) {
			$this->Session->setFlash(__('Rule deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Rule was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}