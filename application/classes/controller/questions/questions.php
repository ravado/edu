<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Questions_Questions extends Controller_Base {

    public $template = "vBase";
    public $data = array();

    /*Показываем главную страницу ВиО */
	public function action_index(){

		$this->template->title = "Вопросы и Ответы";
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

    /*Показываем страницу  задания вопроса*/
	public function action_ask(){

		$this->template->title = "Задать вопрос";
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

        // Проверяем было ли что то передано формой //
        if (!empty($_POST)) {
            $data["question"] = $_POST["question"];
            $questionData = true;
//            // передаем в модель введенный вопрос и результат записываем в переменную
            $result = Model::factory('Mquestions')->askQuestion($questionData);

            if ($result) {
                $data["result"] = 'its OK :)';
            } else {
                $data["result"] = 'is`nt OK :(';
            }

        }

        $this->template->content = View::factory('questions/vQuestionsAsk',$data);
	}


    /* Показываем страницу поиска вопросов */
	public function action_search(){

		$this->template->title = "Поиск вопросов";
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

        $this->template->content = View::factory('questions/vQuestionsSearch',$data);
	}


}
