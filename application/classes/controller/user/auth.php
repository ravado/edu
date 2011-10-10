<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Контроллер отвечает за процес авторизации пользователей
 * index - авторизация, logout - выход пользователя
 */
class Controller_User_Auth extends Controller{

   /*Метод авторизации пользователя*/
   public function action_index(){
       $auth = Auth::instance();

       if(!empty($_POST)){
           $login = Arr::get($_POST,'login','');
           $password = Arr::get($_POST,'password','');
           if ($auth->login($login, $password)){
                $this->request->redirect('');
            }else{
                $this->request->redirect('');
            }
       }
   }

   /*Метод для logout'a пользователя*/
   public function action_logout(){
       $auth = Auth::instance();
       $auth->logout();
       $this->request->redirect('');
   }
}