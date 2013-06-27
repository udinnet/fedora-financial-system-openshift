<?php
App::uses('AppController', 'Controller');


class UsersController extends AppController {

    public $theme = 'Bootstrap';

    public function login() {
        if($this->request->is('post')) {
            //echo debug($this->request->data,true,true);
            if ($this->Auth->login()) {
                return $this->redirect($this->Auth->redirectUrl());
            } else{
                $this->Session->setFlash('Your username password combination is incorrect','error_flash');
            }
        }

    }

    function logout(){
        $this->Session->setFlash('Logged out.','success_flash');
        $this->redirect($this->Auth->logout());
    }
}