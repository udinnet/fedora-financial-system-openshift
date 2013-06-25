<?php
App::uses('AppController', 'Controller');

class TicketsController extends AppController {


	public function index() {
		$this->Ticket->recursive = 0;
		$this->set('tickets', $this->paginate());
	}


	public function view($id = null) {
		if (!$this->Ticket->exists($id)) {
			throw new NotFoundException(__('Invalid ticket'));
		}
		$options = array('conditions' => array('Ticket.' . $this->Ticket->primaryKey => $id));
		$this->set('ticket', $this->Ticket->find('first', $options));
	}


	public function add() {
		if ($this->request->is('post')) {
			$this->Ticket->create();
			if ($this->Ticket->save($this->request->data)) {
				$this->Session->setFlash(__('The ticket has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ticket could not be saved. Please, try again.'));
			}
		}
		$users = $this->Ticket->User->find('list');
		$states = $this->Ticket->State->find('list');
		$regions = $this->Ticket->Region->find('list');
		$ticketFields = $this->Ticket->TicketField->find('list');
		$this->set(compact('users', 'states', 'regions', 'ticketFields'));
	}


	public function edit($id = null) {
		if (!$this->Ticket->exists($id)) {
			throw new NotFoundException(__('Invalid ticket'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Ticket->save($this->request->data)) {
				$this->Session->setFlash(__('The ticket has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ticket could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Ticket.' . $this->Ticket->primaryKey => $id));
			$this->request->data = $this->Ticket->find('first', $options);
		}
		$users = $this->Ticket->User->find('list');
		$states = $this->Ticket->State->find('list');
		$regions = $this->Ticket->Region->find('list');
		$ticketFields = $this->Ticket->TicketField->find('list');
		$this->set(compact('users', 'states', 'regions', 'ticketFields'));
	}


	public function delete($id = null) {
		$this->Ticket->id = $id;
		if (!$this->Ticket->exists()) {
			throw new NotFoundException(__('Invalid ticket'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Ticket->delete()) {
			$this->Session->setFlash(__('Ticket deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Ticket was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
