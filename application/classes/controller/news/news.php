<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Контроллер новостного раздела
 */
class Controller_News_News extends Controller_Base {

    public $template = "vBase";
    public $data = array();

    /*Показываем главную страницу сайта*/
	public function action_index(){

		$this->template->title = "Новости образования";
        $this->template->styles = array("stfile/css/news.css" => "screen");
        $this->template->scripts = array('stfile/js/home.js');


        $this->template->content = View::factory('news/vNewsHome');
	}

}
