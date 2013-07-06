<?php
App::uses('AppModel', 'Model');

class Rule extends AppModel {


	public $displayField = 'id';



	public $belongsTo = array(
		'CrAccount' => array(
			'className' => 'Account',
			'foreignKey' => 'cr_account_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'DrAccount' => array(
			'className' => 'Account',
			'foreignKey' => 'dr_account_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'CurrentState' => array(
			'className' => 'State',
			'foreignKey' => 'current_state_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'NextState' => array(
			'className' => 'State',
			'foreignKey' => 'next_state_id',
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
