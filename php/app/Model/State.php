<?php
App::uses('AppModel', 'Model');

class State extends AppModel {


	public $displayField = 'name';


	public $validate = array(
		'name' => array(
			'notempty' => array(
				'rule' => array('notempty'),

			),
		),
		'description' => array(
			'notempty' => array(
				'rule' => array('notempty'),

			),
		),
	);




	public $hasMany = array(
		'Ticket' => array(
			'className' => 'Ticket',
			'foreignKey' => 'state_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Current' => array(
			'className' => 'Rule',
			'foreignKey' => 'current_state_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Next' => array(
			'className' => 'Rule',
			'foreignKey' => 'next_state_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
