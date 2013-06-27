<?php
App::uses('AppModel', 'Model');

class Region extends AppModel {


	public $useTable = 'region';


	public $displayField = 'name';


	public $validate = array(
		'name' => array(
			'notempty' => array(
				'rule' => array('notempty'),

			),
		),
		'short_name' => array(
			'notempty' => array(
				'rule' => array('notempty'),

			),
		),
	);


	public $hasMany = array(
		'Ticket' => array(
			'className' => 'Ticket',
			'foreignKey' => 'region_id',
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
