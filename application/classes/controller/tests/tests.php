<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Tests_Tests extends Controller_Base {

    public $template = "vBase";
    public $data = array();

    /*Показываем главную страницу Тестов */
	public function action_index(){

		$this->template->title = "Вопросы и Ответы";
        $this->template->styles = array("stfile/css/tests.css" => "screen");
        $this->template->scripts = array("stfile/js/tests.js");
        $data['data'] = true;
        $this->template->content = View::factory('tests/vTests',$data);
	}


    public function action_create(){

        $this->template->title = "Создание теста";
        $this->template->styles = array("stfile/css/tests.css" => "screen");
        $this->template->scripts = array("stfile/js/tests.js");
        $data['data'] = true;
        $this->template->content = View::factory('tests/vTestCreate',$data);
    }

}
