<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Questions_Questions extends Controller_Base {

    public $template = "vBase";
    public $data = array();

    /*Показываем главную страницу */
	public function action_index(){

		$this->template->title = "Главная страница";
        $this->template->styles = array("stfile/css/questions.css" => "screen");
        $this->template->scripts = array('stfile/js/questions.js');

        /*Проверяем статус пользователя (Авторизирован или нет)*/
        $auth = Auth::instance();
        if($auth->logged_in()){
            $data['userAuth'] = TRUE;
            $data['userName'] = $auth->get_user()->username;
        }else{
            $data['userAuth'] = FALSE;
        }

        $this->template->content = View::factory('questions/vQuestions',$data);
	}

}