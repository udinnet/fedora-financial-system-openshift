<?php
class ReportsController extends AppController {
    public function index() {

    }

    public function account_report() {
        $this->loadModel('Transaction');
        $this->loadModel('Account');
        $this->loadModel('Ticket');
    }
}