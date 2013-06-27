<?php
App::uses('AppModel', 'Model');
/**
 * FieldAmount Model
 *
 */
class FieldAmount extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'id';


    public $belongsTo = array(
        'Ticket','TicketField'
    );

}
