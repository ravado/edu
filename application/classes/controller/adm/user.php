<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Контроллер отвечает за работу с пользователями
 * 
 */
class Controller_Adm_User extends Controller_Base{

    public $template = "vBase";
    public $data = array();

   public function action_index(){

   }

   /*Показываем  страницу добавления пользователя*/
   public function action_add(){
       $this->template->title = "Добавить пользователя";
       $this->template->styles = array("stfile/css/adm.css" => "screen");
       $this->template->scripts = array('stfile/js/adm.js');

       $data['page'] = View::factory('adm/vAdmUserAdd');
       $data['pageFlag'] = ': Добавление нового пользователя';

       $this->template->content = View::factory('adm/vAdm',$data);
   }

        /*Добавление нового пользователя*/
        public function action_adduser(){
            if(!empty($_POST)){
                $userData['login'] = Arr::get($_POST,'login','');
                $userData['password'] = Arr::get($_POST,'password','');
                $userData['email'] = Arr::get($_POST,'email','');
                $userData['sex'] = Arr::get($_POST,'sex','');
                $userData['first_name'] = Arr::get($_POST,'firstName','');
                $userData['last_name'] = Arr::get($_POST,'lastName','');

                $userData['activKey'] = Model::factory('Muser')->register($userData);

                $modUserMail = Model::factory('Mmail')->sendActivationMail($userData);
                
                $this->template->styles = array("stfile/css/register.css" => "screen");
                $this->template->content = View::factory('user/vUserRegInfo');
            }
        }
}