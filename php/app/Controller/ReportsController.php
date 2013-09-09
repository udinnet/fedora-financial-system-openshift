<?php
class ReportsController extends AppController {
    public function index() {

    }

    public function account() {
        if ($this->request->is('post')) {
            if($this->request->data){
                $account = $this->request->data['Account']['account'];
                $this->redirect(array('controller' => 'reports', 'action' => 'account_report', $account));
            }
        }

        $this->loadModel('Account');

        $accounts = $this->Account->find('list',array('recursive' => 1));
        $accounts_re_indexed = array();
        foreach($accounts as $key => $value){
            $accounts_re_indexed[$value] = $value;
        }

        $this->set('accounts',$accounts_re_indexed);
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