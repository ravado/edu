<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Контроллер главной страницы сайта
 * Также имеет экшены для показа второстепенных страниц: Контакты, О Сайте, Поддержка
 */
class Controller_Home extends Controller_Base {

    public $template = "vBase";
    public $data = array();

    /*Показываем главную страницу сайта*/
	public function action_index(){

		$this->template->title = "Главная страница";
        $this->template->styles = array("stfile/css/home.css" => "screen");
        $this->template->scripts = array('stfile/js/home.js');

        $this->template->content = View::factory('home/vHome');
	}

}
