<?php
App::uses('AppModel', 'Model');

class TicketField extends AppModel {


	public $displayField = 'name';


	public $validate = array(
		'name' => array(
			'notempty' => array(
				'rule' => array('notempty'),

			),
		),
	);



	public $hasMany = array(
		'Rule' => array(
			'className' => 'Rule',
			'foreignKey' => 'ticket_field_id',
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
		'Transaction' => array(
			'className' => 'Transaction',
			'foreignKey' => 'ticket_field_id',
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
            'foreignKey' => 'ticket_field_id',
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
		'Ticket' => array(
			'className' => 'Ticket',
			'joinTable' => 'tickets_ticket_fields',
			'foreignKey' => 'ticket_field_id',
			'associationForeignKey' => 'ticket_id',
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
