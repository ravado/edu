<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Контроллер отвечает за невидимые операции
 */
class Controller_Adm_Ahid extends Controller{

    public function action_index(){
 
    }

    /*Возвращаем данные профиля пользователя по его имени*/
    public function action_getUserInfo(){
        $userName = Arr::get($_POST,'userToDelete','');
        //if(!empty($userName)){
           $mUser = Model::factory('Muser')->getUserInfo($userName);
           echo json_encode($mUser);
    }

     /*Удаеляем пользователя по имени*/
    public function action_delUser(){
        $userName = Arr::get($_POST,'userToDelete','');
        if(!empty($userName)){
            $mUser = Model::factory('Muser')->delUser($userName);
            echo json_encode($mUser);
        }else{
            return FALSE;
        }
    }

    /*Изменяем профиль пользователя*/
   public function action_fixUser(){
       if(!empty($_POST)){
            $userData['password'] = Arr::get($_POST,'password','');
            $userData['email'] = Arr::get($_POST,'email','');
            $userData['sex'] = Arr::get($_POST,'sex','');
            $userData['first_name'] = Arr::get($_POST,'firstName','');
            $userData['last_name'] = Arr::get($_POST,'lastName','');
            $userData['id'] = Arr::get($_POST,'id','');
            $userData['role'] = Arr::get($_POST,'id','');

            $result = Model::factory('Muser')->admEditUser($userData);
            echo json_encode($result);
        }
   }
}