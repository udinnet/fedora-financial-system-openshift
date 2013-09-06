<?php
class ReportsController extends AppController {
    public function index() {

    }

    public function account() {

    }

    public function account_report($account_name) {
        $this->loadModel('Transaction');
        $this->loadModel('Account');
        $this->loadModel('Ticket');

        $account = $this->Account->find(
            'first',
            array(
                'conditions'=>array('Account.name'=>$account_name),
                'recursive' => -1
            )
        );
        $account_id = $account['Account']['id'];
        $transactions = $this->Transaction->find(
            'all',
            array(
                'conditions'=>array('Transaction.account_id'=>$account_id),
                'recursive' => -1
            )
        );
        $this->set('transactions',$transactions);
    }


}