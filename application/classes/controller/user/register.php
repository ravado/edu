<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Контроллер страниц регистрации
 * Показывает форму регистрации, и принмает данные нового юзера для записи в БД
 */
class Controller_User_Register extends Controller_Base {

    public $template = "vBase";
    public $data = array();

    /*Показываем страницу регистрации*/
	public function action_index(){
		$this->template->title = "Регистрация пользователя";
        $this->template->styles = array("stfile/css/register.css" => "screen");
        $this->template->scripts = array('stfile/js/register.js');

        $this->template->content = View::factory('user/vUserRegister');
	}

    /*Получаем данные из формы регистрации и отправляем их в базу*/
    public function action_setuser(){
        if(!empty($_POST)){
            $userData['login'] = Arr::get($_POST,'login','');
            $userData['password'] = Arr::get($_POST,'password','');
            $userData['email'] = Arr::get($_POST,'email','');
            $userData['sex'] = Arr::get($_POST,'sex','');
            $userData['first_name'] = Arr::get($_POST,'firstName','');
            $userData['last_name'] = Arr::get($_POST,'lastName','');

            $modUser = Model::factory('Muser')->register($userData);
            $this->template->content = View::factory('user/vUserRegInfo');
        }
    }

}
