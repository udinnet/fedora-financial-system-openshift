<?php
App::uses('AppController', 'Controller');

class TicketFieldsController extends AppController {


	public function index() {
		$this->TicketField->recursive = 0;
		$this->set('ticketFields', $this->paginate());
	}


	public function view($id = null) {
		if (!$this->TicketField->exists($id)) {
			throw new NotFoundException(__('Invalid ticket field'));
		}
		$options = array('conditions' => array('TicketField.' . $this->TicketField->primaryKey => $id));
		$this->set('ticketField', $this->TicketField->find('first', $options));
	}


	public function add() {
		if ($this->request->is('post')) {
			$this->TicketField->create();
			if ($this->TicketField->save($this->request->data)) {
				$this->Session->setFlash(__('The ticket field has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ticket field could not be saved. Please, try again.'));
			}
		}
	}


	public function edit($id = null) {
		if (!$this->TicketField->exists($id)) {
			throw new NotFoundException(__('Invalid ticket field'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->TicketField->save($this->request->data)) {
				$this->Session->setFlash(__('The ticket field has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ticket field could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('TicketField.' . $this->TicketField->primaryKey => $id));
			$this->request->data = $this->TicketField->find('first', $options);
		}
	}


	public function delete($id = null) {
		$this->TicketField->id = $id;
		if (!$this->TicketField->exists()) {
			throw new NotFoundException(__('Invalid ticket field'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->TicketField->delete()) {
			$this->Session->setFlash(__('Ticket field deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Ticket field was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
