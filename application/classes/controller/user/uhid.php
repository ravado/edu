<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Контроллер отвечает за невидимые операции
 */
class Controller_User_Uhid extends Controller{

    public function action_index(){
 
    }

    /*Проверяем наличие пользователя по Имени пользователя*/
    public function action_getUserThLogin(){
        $currentName = $_POST['ckeckIsExist'];
        $mUser = Model::factory('Muser')->getUserThLogin($currentName);
        echo json_encode($mUser);
    }

    /*Проверяем наличие пользователя по Адресу почты*/
    public function action_getUserThEmail(){
        $currentEmail = $_POST['ckeckIsExist'];
        $mUser = Model::factory('Muser')->getUserThEmail($currentEmail);
        echo json_encode($mUser);
    }

    /*Изменяем профиль пользователя*/
    public function action_setinfo(){
        if(!empty($_POST)){
            $userData['password'] = Arr::get($_POST,'password','');
            $userData['email'] = Arr::get($_POST,'email','');
            $userData['first_name'] = Arr::get($_POST,'firstName','');
            $userData['last_name'] = Arr::get($_POST,'lastName','');
            $userData['id'] = Arr::get($_POST,'id','');

            $result = Model::factory('Muser')->updateUserProfile($userData);
            echo json_encode($result);
        }
    }
}