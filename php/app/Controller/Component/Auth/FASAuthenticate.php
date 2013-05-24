<?php
App::uses('BaseAuthenticate','Controller/Component/Auth');

class FASAuthenticate extends BaseAuthenticate {

    public function checkUser($fas_user) {
        App::uses('User','Model');
        $User = new User();
        $user = $User->find("first",array("conditions"=>array("username" => $fas_user)));

        if(!$user) {
            $user = array(
                "User" => array(
                    "username" => $fas_user,
                )
            );
            $User->create();
            $User->save($user);
            $user['User']['id'] = $User->getLastInsertID();
        }
        return $user;
    }

    public function getFasInfo ($request) {
        $fas_name = $request->data['User']['username'];
        $password = $request->data['User']['password'];

        $config['fas_json_url'] 	= 'https://admin.fedoraproject.org/accounts/json/person_by_username?tg_format=json';
        $config['fas_pass_reset_url'] 	= 'https://admin.fedoraproject.org/accounts/user/resetpass';
        $config['fas_email_domain'] 	= 'fedoraproject.org';

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $config['fas_json_url']);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_USERAGENT, "CakePHP FAS Auth 0.1");
        curl_setopt($ch, CURLOPT_POSTFIELDS, "username=".urlencode($fas_name)."&user_name=".urlencode($fas_name)."&password=".urlencode($password)."&login=Login");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        $fasuserdata = json_decode(curl_exec($ch), true);
        curl_close ($ch);

        return $fasuserdata;
    }

    public function authenticate(CakeRequest $request, CakeResponse $response) {
        $session = new CakeSession();
        if($request->is('post')) {
            $fasuserdata = $this->getFasInfo($request);

            if (isset($fasuserdata["success"]) && $fasuserdata['person']['status'] == 'active') {
                $user = $this->checkUser($fasuserdata['person']['username']);
                //echo debug($user,true,true);
                return $user;
            }
        }
    }

}