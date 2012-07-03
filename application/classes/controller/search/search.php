<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Search_Search extends Controller_Base {

    public $template = "vBase";
    public $data = array();

    /*Показываем главную страницу Поиска */
	public function action_index(){
		$this->template->title = "Поиск";
        $this->template->styles = array("stfile/css/search.css" => "screen" );
        $this->template->scripts = array('stfile/js/search.js','http://www.google.com/jsapi');

        /*Проверяем статус пользователя (Авторизирован или нет)*/
        $auth = Auth::instance();
        if($auth->logged_in()){
            $data['userAuth'] = TRUE;
            $data['userName'] = $auth->get_user()->username;
        }else{
            $data['userAuth'] = FALSE;
        }
        $this->template->content = View::factory('search/vSearch',$data);
	}
}
