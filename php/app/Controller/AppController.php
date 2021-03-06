<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
App::uses('Controller', 'Controller');
App::uses('FASAuthenticate', 'Controller/Component/Auth');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
    public $components = array('Acl','DebugKit.Toolbar','Session','Auth'=>array(
        'loginRedirect'=>array('controller'=>'homes','action'=>'admin'),
        'logoutRedirect'=>array('controller'=>'homes','action'=>'main'),
        'authError'=>'You cannot access that page',
        'authorize'=> array('Controller')
    ));

    public $helpers = array(
        'Html' => array('className' => 'BootstrapHtml'),
        'Form' => array('className' => 'BootstrapForm'),
        'Paginator' => array('className' => 'BootstrapPaginator'),
    );

    public function isAuthorized($user){
        return true;
    }

    public function beforeFilter(){
        parent::beforeFilter();
        $this->Auth->authenticate = array(
            AuthComponent::ALL => array('userModel' => 'User'),
            'FAS'
        );
        $this->Auth->allow('index');
        $this->set('logged_in', $this->Auth->loggedIn());
        $this->set('current_user', $this->Auth->user());
    }
}

