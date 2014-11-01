<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Auth extends Controller_System_Base  {

    public function action_index()
    {
        $this->title = 'Вход в систему';
        $this->txt = 'Электронная школа';
        $this->content = View::factory('pages/auth/login');
    }
/*
    public function action_login() {

        if($post= $this->request->post()){
            $user=Auth::instance()->login($post['username'],$post['password']);
            if($user){
                $this->redirect('main/admin');
                exit;
            }
        }
        $this->template=View::factory('login');
    }
  public  function  action_register(){

        if(HTTP_REQUEST::POST == $this->request->method()){
            try{
                $user=ORM::factory('user')->create_user($_POST,array('username','password','email'));
                $user->add('roles','1');
                $this->redirect('auth/login');

            }catch (ORM_Validation_Exception $ex){
                $errors =$ex->errors('models');
            }
        }

    }
    public function action_logout(){

        Auth::instance()->logout();
        $this->redirect('login');

    }*/
} // End Welcome
