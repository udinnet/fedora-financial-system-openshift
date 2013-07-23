<?php
class HomesController extends AppController {

    public $uses = array();


    public function main() {

    }

    public function admin(){

    }

    public function beforeFilter() {
        parent::beforeFilter();

        $this->Auth->allow('main');
    }
}

?>