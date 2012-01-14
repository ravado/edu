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

        $data['result'] = Model::factory('Mquestions')->mainQA();

        $this->template->content = View::factory('questions/vQuestions',$data);
	}

    /*Показываем страницу  задания вопроса*/
	public function action_ask(){

		$this->template->title = "Задать вопрос";
        $this->template->styles = array("stfile/css/questions.css" => "screen");
        $this->template->scripts = array('stfile/js/questions.js');

        // Проверяем было ли что то передано формой //
        if (!empty($_POST)) {
            $data['question'] = $_POST['question'];
//
//            // передаем в модель введенный вопрос и результат записываем в переменную
//            $result = Model::factory('Mquestions')->askQuestion($questionData);
//
//            if ($result) {
//                $data["result"] = $result;
//            } else {
//                $data["result"] = '';
//            }
        } else {
            $data['question'] = '';
        }
        $this->template->content = View::factory('questions/vQuestionsAsk',$data);
	}

    /*Задаем вопрос*/
    public function action_askquestion(){

        $this->template->title = "Задать вопрос";

        //$this->template->styles = array("stfile/css/questions.css" => "screen");
        //$this->template->scripts = array('stfile/js/questions.js');

        // для записи в бд нужен юзернейм так что пока побудет так
        $auth = Auth::instance();
        if($auth->logged_in()) {
            $data['username'] = $auth->get_user()->username;

            // Проверяем было ли что то передано формой //
            if (!empty($_POST) && ($_POST['questionTitle'] != '' || $_POST['questionFull'] != '')) {
                $data['questionTitle'] = $_POST['questionTitle'];
                $data['questionFull'] = $_POST['questionFull'];
                $data['tags'] = '';
                $temp = $_POST['tags'];
                foreach($temp as $key=>$v){
                    if(next($temp)) {
                        $data['tags'] .=$temp[$key].',';
                    } else {
                        $data['tags'] .=$temp[$key];
                    }
                }

                // передаем в модель введенный вопрос и результат записываем в переменную
                $result = Model::factory('Mquestions')->askQuestion($data);
                if ($result) {
                    $this->template->content = "Вопрос задан";
                } else {
                    $this->template->content = "Вопрос не задан, потому что в модели пошло что то не так";
                }
            } else {
                $this->template->content = "Вопрос не задан потому что не были переданы даные в POST";
            }
        } else {
            $this->template->content = "Для того чтобы задать вопрос Вы должны быть залогинены!";
        }
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

    public function action_question(){
        $questionID = $this->request->param('id');
        $data['idQuestion'] = $questionID;

        $this->template->styles = array("stfile/css/questions.css" => "screen");
        $this->template->scripts = array('stfile/js/questions.js');

        /*Проверяем статус пользователя (Авторизирован или нет)*/
        $auth = Auth::instance();
        if($auth->logged_in()){
            $data['userAuth'] = TRUE;
            $data['userName'] = $auth->get_user()->username;
            $data['user_id'] = $auth->get_user()->id;
        }else{
            $data['userAuth'] = FALSE;
        }

        $data['result'] = Model::factory('Mquestions')->getOneQuestion($questionID);
        $this->template->title = "ВиО: " .$data['result']['question'][0]['title'];
        $this->template->content = View::factory('questions/vQuestionOne',$data);
    }

    public function action_addAnswer () {
        return true;
    }
}
