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
            //debug($this->request->data);
			$this->Ticket->create();
            $data = $this->request->data;
            $data_fa = $data['FieldAmount'];
            $count = 0;
            foreach ($data_fa as $record){
                if($record['amount'] == ''){
                    unset($data['FieldAmount'][$count]);
                }
                $count++;
            }
            debug($data);

			if ($this->Ticket->saveAll($data)) {
				$this->Session->setFlash(__('The ticket has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ticket could not be saved. Please, try again.'));
			}
		}
		$users = $this->Ticket->User->find('list');
		$states = $this->Ticket->State->find('list');
		$regions = $this->Ticket->Region->find('list');

        $this->loadModel('TicketField');
        $this->loadModel('FieldAmount');
        $fields = $this->TicketField->find('all');
        //debug($fields);
		$this->set(compact('users', 'states', 'regions','fields','amounts'));
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
		$this->set(compact('users', 'states', 'regions'));
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
