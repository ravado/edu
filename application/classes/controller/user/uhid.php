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
}