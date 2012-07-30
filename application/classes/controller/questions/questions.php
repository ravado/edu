<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Questions_Questions extends Controller_Base {

    public $template = "vBase";
    public $data = array();

    /*Показываем главную страницу ВиО */
	public function action_index(){

		$this->template->title = "Вопросы и Ответы";
        $this->template->styles = array("stfile/css/questions.css" => "screen");
        $this->template->scripts = array("stfile/js/questions.js");
        $data['user_id'] = -1;
        /*Проверяем статус пользователя (Авторизирован или нет)*/
        $auth = Auth::instance();
        if($auth->logged_in()){
            $data['userAuth'] = TRUE;
            $data['userName'] = $auth->get_user()->username;
            $data['user_id'] = $auth->get_user()->id;
        }else{
            $data['userAuth'] = FALSE;
        }

        $result['popular'] = Model::factory('Mquestions')->getQuestionsList(1, 5, 'rating', null, 'opened');
        $result['last'] = Model::factory('Mquestions')->getQuestionsList(1, 15, 'date', null, 'opened');
        $data['populars'] = $result['popular']['questions'];
        $data['lasts'] = $result['last']['questions'];
//        $data['result'] = Model::factory('Mquestions')->mainQA($data);
//        $data['categories'] = Model::factory('Mquestions')->getAllCategories('some');
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

        } else {
            $data['question'] = '';
        }
        $data['categories'] = Model::factory('Mquestions')->getAllCategories('some');
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
            $data['id_user'] = $auth->get_user()->id;
            // Проверяем было ли что то передано формой //
            if (!empty($_POST) && ($_POST['questionTitle'] != '')) {
                $data['questionTitle'] = $_POST['questionTitle'];
                $data['questionFull'] = $_POST['questionFull'];
                $data['tags'] = '';
                $data['cat'] = $_POST['tags'];
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
        $data['question_id'] = $this->request->param('id');
        $data['user_id'] = -1;
//        $data['idQuestion'] = $questionID;
        if(!empty($data['question_id'])) {

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
            $data['result'] = Model::factory('Mquestions')->getOneQuestion($data);
            if ($data['result']) {
                $question_id = $data['question_id'];
                $subcategory_id = $data['result']['question'][1][0]['id_subcategory'];
                $data['similar'] = Model::factory('Mquestions')->getSimiliarQuestions($question_id, $subcategory_id);
                $this->template->title = "ВиО: " .$data['result']['question'][0]['title'];
                $this->template->content = View::factory('questions/vQuestionOne',$data);
            } else {
                //Надо вставить 404
                $this->template->title = "404";
                $this->template->content = "404 вопрос не найден";
            }

        } else {
            $this->template->title = "ВиО: вопрос" ;
        }
    }

    public function action_category () {
        $this->template->styles = array("stfile/css/questions.css" => "screen");
        $this->template->scripts = array('stfile/js/questions.js');
        $data['cat_id'] = $this->request->param('qtype');
        $data['page'] = (int)$this->request->param('page');
        $data['per_page'] = 3;
        $data['user_id'] = -1;
        /*Проверяем статус пользователя (Авторизирован или нет)*/
        $auth = Auth::instance();
        if($auth->logged_in()){
            $data['userAuth'] = TRUE;
            $data['userName'] = $auth->get_user()->username;
            $data['user_id'] = $auth->get_user()->id;
        }else{
            $data['userAuth'] = FALSE;
        }
        if(!empty($data['cat_id'])) {
            $data['qtype'] = 'category';
            $data['result'] = Model::factory('Mquestions')->getAllQuestions($data);
            $this->template->content = View::factory('questions/vQuestionAll',$data);
        } else {
            $data['result'] = Model::factory('Mquestions')->getAllCategories('sss');
            $this->template->title = "ВиО: ";
            $this->template->content = View::factory('questions/vQuestionCategory',$data);
        };

    }

    public function action_all() {
        $this->template->styles = array("stfile/css/questions.css" => "screen");
        $this->template->scripts = array('stfile/js/questions.js');
        $data['page'] = (int)$this->request->param('page');
        $data['qtype'] = (string)$this->request->param('qtype');
        $data['per_page'] = 10;
        $data['user_id'] = -1;
        /*Проверяем статус пользователя (Авторизирован или нет)*/
        $auth = Auth::instance();
        if($auth->logged_in()){
            $data['userAuth'] = TRUE;
            $data['userName'] = $auth->get_user()->username;
            $data['user_id'] = $auth->get_user()->id;
        }else{
            $data['userAuth'] = FALSE;
        }

        $data['questions'] = Model::factory('Mquestions')->getQuestionsList();

        $this->template->content = View::factory('questions/vQuestionAll',$data);
    }

}
