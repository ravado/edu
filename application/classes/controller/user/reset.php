<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Контроллер сброса пароля пользователя
 *
 */
class Controller_User_Reset extends Controller_Base {

    public $template = "vBase";
    public $data = array();

    /*Получаем email адрес для сброса пароля*/
	public function action_index(){
        if(!empty($_POST)){
             $email = Arr::get($_POST,'inpMailForReset','');
             $mUser = Model::factory('Muser')->resAndSend($email);
            
             $this->template->styles = array("stfile/css/register.css" => "screen");
             $this->template->content = View::factory('user/vUserReset');
         }
	}

    /*Сюда приходит пользователь по ссылки из письма для сброса*/
    public function action_gen(){
        $id = $this->request->param('id');
        $mUser = Model::factory('Muser')->resAndSave($id);

        $this->template->styles = array("stfile/css/register.css" => "screen");
        $this->template->content = View::factory('user/vUserResetGen');
    }


}
