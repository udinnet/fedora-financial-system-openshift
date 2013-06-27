<?php
App::uses('AppModel', 'Model');

class Ticket extends AppModel {


	public $displayField = 'title';


	public $validate = array(
		'title' => array(
			'notempty' => array(
				'rule' => array('notempty'),

			),
		),
	);




	public $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'State' => array(
			'className' => 'State',
			'foreignKey' => 'state_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Region' => array(
			'className' => 'Region',
			'foreignKey' => 'region_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);


	public $hasMany = array(
		'Transaction' => array(
			'className' => 'Transaction',
			'foreignKey' => 'ticket_id',
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
        'FieldAmount' => array(
            'className' => 'FieldAmount',
            'foreignKey' => 'ticket_id',
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

/*

	public $hasAndBelongsToMany = array(
		'TicketField' => array(
			'className' => 'TicketField',
			'joinTable' => 'tickets_ticket_fields',
			'foreignKey' => 'ticket_id',
			'associationForeignKey' => 'ticket_field_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		)
	);
*/
}
