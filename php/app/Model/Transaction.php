<?php
App::uses('AppModel', 'Model');

class Transaction extends AppModel {



	public $belongsTo = array(
		'Account' => array(
			'className' => 'Account',
			'foreignKey' => 'account_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Ticket' => array(
			'className' => 'Ticket',
			'foreignKey' => 'ticket_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'TicketField' => array(
			'className' => 'TicketField',
			'foreignKey' => 'ticket_field_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
