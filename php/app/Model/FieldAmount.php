<?php
App::uses('AppModel', 'Model');

class FieldAmount extends AppModel {


	public $displayField = 'id';


    public $belongsTo = array(
        'Ticket','TicketField'
    );

}
