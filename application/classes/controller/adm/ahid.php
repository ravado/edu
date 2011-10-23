<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Контроллер отвечает за невидимые операции
 */
class Controller_User_Ahid extends Controller{

    public function action_index(){
 
    }

    /*Возвращаем данные профиля пользователя по его имени*/
    public function action_getUserInfo(){
        $userName = Arr::get($_POST,'userToDelete','');
        if(!empty($userName)){
           $mUser = Model::factory('Muser')->getUserInfo($userName);
           echo json_encode($mUser);
        }else{
            return FALSE;
        }
    }

     /*Удаеляем пользователя по имени*/
    public function action_delUser(){
        $userName = Arr::get($_POST,'userToDelete','');
        if(!empty($userName)){
            $mUser = Model::factory('Muser')->getUserInfo($userName);
            echo json_encode($mUser);
        }else{
            return FALSE;
        }
    }
   
}