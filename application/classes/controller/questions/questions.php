<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Questions_Questions extends Controller_Base {

    public $template = "vBase";
    public $data = array();

    /* Главная страница ВиО */
	public function action_index(){

		$this->template->title = "Вопросы и Ответы";
        $this->template->styles = array("stfile/css/questions.css" => "screen");
        $this->template->scripts = array("stfile/js/questions.js");
        /*Проверяем статус пользователя (Авторизирован или нет)*/
        $auth = Auth::instance();
        if($auth->logged_in()){
            $data['user_auth'] = TRUE;
            $data['username'] = $auth->get_user()->username;
            $data['user_id'] = $auth->get_user()->id;
            $data['sex'] = $auth->get_user()->sex;
            $data['favorites'] = Model::factory('Mquestions')->getFavorites($data['user_id']);
            $data['popular_tags'] = Model::factory('Mquestions')->getUserPopularTags($data['user_id']);
            $data['user_questions'] = Model::factory('Mquestions')->getUserQuestions($data['user_id']);
            $data['user_answers'] = Model::factory('Mquestions')->getUserAnswers($data['user_id']);
        }else{
            $data['user_auth'] = FALSE;
        }
        $data['categories'] = Model::factory('Mquestions')->getCategoryList('user');
        $result['popular'] = Model::factory('Mquestions')->getQuestionsList(1, 5, 'rating', null, 'opened');
        $result['last'] = Model::factory('Mquestions')->getQuestionsList(1, 15, 'date', null, 'opened');
        $data['populars'] = $result['popular']['questions'];
        $data['lasts'] = $result['last']['questions'];
        $this->template->content = View::factory('questions/vQuestions',$data);
	}


    // Страница всех вопросов
    public function action_all() {
        $this->template->title = "Вопросы и Ответы: все вопросы";
        $this->template->styles = array("stfile/css/questions.css" => "screen");
        $this->template->scripts = array('stfile/js/questions.js');
        /*Проверяем статус пользователя (Авторизирован или нет)*/
        $auth = Auth::instance();
        if($auth->logged_in()){
            $data['user_auth'] = TRUE;
            $data['username'] = $auth->get_user()->username;
            $data['user_id'] = $auth->get_user()->id;
            $data['sex'] = $auth->get_user()->sex;
            $data['favorites'] = Model::factory('Mquestions')->getFavorites($data['user_id']);
            $data['popular_tags'] = Model::factory('Mquestions')->getUserPopularTags($data['user_id']);
            $data['user_questions'] = Model::factory('Mquestions')->getUserQuestions($data['user_id']);
            $data['user_answers'] = Model::factory('Mquestions')->getUserAnswers($data['user_id']);
        }else{
            $data['user_auth'] = FALSE;
        }
        if (isset($_GET['page']) || !empty($_GET['page'])) { $data['curr_page'] = $_GET['page']; }
        else { $data['curr_page'] = 1; }

        $data['limit'] = 20;

        if (isset($_GET['orderby']) || !empty($_GET['orderby'])) { $data['order_by'] = $_GET['orderby']; }
        else {$data['order_by'] = null; }

        if (isset($_GET['subcat']) || !empty($_GET['subcat'])) { $data['subcat'] = $_GET['subcat']; }
        else { $data['subcat'] = null; }

        if (isset($_GET['cat']) || !empty($_GET['cat'])) { $data['cat'] = $_GET['cat']; }
        else { $data['cat'] = null; }

        if (isset($_GET['status']) || !empty($_GET['status'])) { $data['status'] = $_GET['status']; }
        else { $data['status'] = null; }

        $data['categories'] = Model::factory('Mquestions')->getCategoryList('user');
        $result = Model::factory('Mquestions')->getQuestionsList($data['curr_page'],$data['limit'],$data['order_by'],$data['subcat'], $data['status'], $data['cat']);
        $data['questions'] = $result['questions'];
        $data['pages'] = $result['pages'];

        $this->template->content = View::factory('questions/vQuestionAll',$data);
    }

    // Страница с одним вопросом
    public function action_question() {
        $this->template->styles = array("stfile/css/questions.css" => "screen");
        $this->template->scripts = array('stfile/js/questions.js');
        $id_question = $this->request->param('id');
        if(!empty($id_question)) {
            $id_question = (int)$id_question;
        } else {
            $this->request->redirect('/questions');
        }
        /*Проверяем статус пользователя (Авторизирован или нет)*/
        $auth = Auth::instance();
        if($auth->logged_in()){
            $data['user_auth'] = TRUE;
            $data['username'] = $auth->get_user()->username;
            $data['user_id'] = $auth->get_user()->id;
            $data['sex'] = $auth->get_user()->sex;
            $data['favorites'] = Model::factory('Mquestions')->getFavorites($data['user_id']);
            $data['popular_tags'] = Model::factory('Mquestions')->getUserPopularTags($data['user_id']);
            $data['user_questions'] = Model::factory('Mquestions')->getUserQuestions($data['user_id']);
            $data['user_answers'] = Model::factory('Mquestions')->getUserAnswers($data['user_id']);
        }else{
            $data['user_auth'] = FALSE;
        }

        $data['categories'] = Model::factory('Mquestions')->getCategoryList('user');
        $data['question'] = Model::factory('Mquestions')->getQuestion($id_question);
        $this->template->title = "Вопросы и Ответы: ".$data['question']->title;

        $this->template->content = View::factory('questions/vQuestionOne',$data);
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

    public function action_questiona(){
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



}
