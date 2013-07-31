<?php
App::uses('AppController', 'Controller');

class TicketsController extends AppController {

    public $helpers = array('Time');

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
            $data = $this->request->data;
            $data_fa = $data['FieldAmount'];
            $count = 0;
            foreach ($data_fa as $record){
                if($record['amount'] == ''){
                    unset($data['FieldAmount'][$count]);
                }
                $count++;
            }
            $this->loadModel('Config');
            $this->loadModel('Rule');
            $this->loadModel('Transaction');

            $state_ticket_not_create = $this->Config->find('first', array(
                'conditions' => array('Config.attribute' => 'state_ticket_not_create')
            ));
            $state_ticket_create = $this->Config->find('first', array(
                'conditions' => array('Config.attribute' => 'state_ticket_create')
            ));

            $data['Ticket']['state_id'] = $state_ticket_create['Config']['value'];

            $rules = $this->Rule->find('all',array(
                'conditions' => array('Rule.current_state_id' => $state_ticket_not_create['Config']['value'],
                    'Rule.next_state_id' => $state_ticket_create['Config']['value']
                )
            ));

            $data_2=array();

			if ($this->Ticket->saveAll($data)) {
                $ticket_id = $this->Ticket->getInsertID();

                $count = 0;
                foreach ($rules as $rule){
                    //for the cr account
                    $data_2[$count]['amount'] = $this->find_amount($data,$rule);
                    $data_2[$count]['type'] = 'c';
                    $data_2[$count]['time'] = strftime("%Y-%m-%d %H:%M:%S", time());;
                    $data_2[$count]['account_id'] = $this->find_account($data_2[$count]['type'],$rule);
                    $data_2[$count]['ticket_field_id'] = $this->find_field($data,$rule);
                    $data_2[$count]['ticket_id'] = $ticket_id;
                    $count++;
                    //for the dr account
                    $data_2[$count]['amount'] = $this->find_amount($data,$rule);
                    $data_2[$count]['type'] = 'd';
                    $data_2[$count]['time'] = strftime("%Y-%m-%d %H:%M:%S", time());;
                    $data_2[$count]['account_id'] = $this->find_account($data_2[$count]['type'],$rule);
                    $data_2[$count]['ticket_field_id'] = $this->find_field($data,$rule);
                    $data_2[$count]['ticket_id'] = $ticket_id;
                    $count++;
                }

                if($this->Transaction->saveMany($data_2))
                {
                    $this->Session->setFlash(__('The ticket has been saved'));
                    $this->redirect(array('action' => 'index'));
                }
                else {
                    $this->delete($ticket_id);
                    $this->Session->setFlash(__('The ticket could not be saved. Please, try again.'));
                }
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
		$this->set(compact('users', 'states', 'regions','fields','amounts'));
	}


	public function edit($id = null) {
		if (!$this->Ticket->exists($id)) {
			throw new NotFoundException(__('Invalid ticket'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
            $data = $this->request->data;
            $data_fa = $data['FieldAmount'];
            $count = 0;
            foreach ($data_fa as $record){
                if($record['amount'] == ''){
                    unset($data['FieldAmount'][$count]);
                }
                $count++;
            }
            $this->loadModel('Config');
            $this->loadModel('Rule');
            $this->loadModel('Transaction');

            $state_current = $this->Ticket->find('first', array(
                'conditions' => array('Ticket.id' => $id)
            ));

            $state_current = $state_current['State']['id'];
            $state_next = $data['Ticket']['state_id'];

            $rules = $this->Rule->find('all',array(
                'conditions' => array('Rule.current_state_id' => $state_current,
                    'Rule.next_state_id' => $state_next
                )
            ));

            $count = 0;
            foreach ($rules as $rule){
                //for the cr account
                $data['Transaction'][$count]['amount'] = $this->find_amount($data,$rule);
                $data['Transaction'][$count]['type'] = 'c';
                $data['Transaction'][$count]['time'] = strftime("%Y-%m-%d %H:%M:%S", time());;
                $data['Transaction'][$count]['account_id'] = $this->find_account($data['Transaction'][$count]['type'],$rule);
                $data['Transaction'][$count]['ticket_field_id'] = $this->find_field($data,$rule);
                $data['Transaction'][$count]['ticket_id'] = $id;
                $count++;
                //for the dr account
                $data['Transaction'][$count]['amount'] = $this->find_amount($data,$rule);
                $data['Transaction'][$count]['type'] = 'd';
                $data['Transaction'][$count]['time'] = strftime("%Y-%m-%d %H:%M:%S", time());;
                $data['Transaction'][$count]['account_id'] = $this->find_account($data['Transaction'][$count]['type'],$rule);
                $data['Transaction'][$count]['ticket_field_id'] = $this->find_field($data,$rule);
                $data['Transaction'][$count]['ticket_id'] = $id;
                $count++;
            }

            debug($data);

            if ($this->Ticket->saveAll($data)) {
				$this->Session->setFlash(__('The ticket has been saved'));
				//$this->redirect(array('action' => 'index'));
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

        $this->loadModel('TicketField');
        $this->loadModel('FieldAmount');
        $fields = $this->TicketField->find('all');
        $this->set(compact('users', 'states', 'regions','fields','amounts'));
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

    protected function find_amount($data, $rule) {
        $field_amounts = $data['FieldAmount'];

        foreach ($field_amounts as $field_amount){
            if($rule['TicketField']['id'] == $field_amount['ticket_field_id']){
                return $field_amount['amount'];
            }
        }

        return false;
    }

    protected function find_field($data, $rule) {
        $field_amounts = $data['FieldAmount'];

        foreach ($field_amounts as $field_amount){
            if($field_amount['ticket_field_id'] == $rule['TicketField']['id']){
                return $rule['TicketField']['id'];
            }
        }

        return false;
    }

    protected function find_account($type, $rule) {
        if ($type == 'c') {
            return $rule['CrAccount']['id'];
        }
        else if($type == 'd'){
            return $rule['DrAccount']['id'];
        }
        else{
            return false;
        }
    }
}
