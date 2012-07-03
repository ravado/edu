<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Tests_Tests extends Controller_Base {

    public $template = "vBase";
    public $data = array();

    /*Показываем главную страницу Тестов */
	public function action_index(){

		$this->template->title = "Тесты";
        $this->template->styles = array("stfile/css/tests.css" => "screen");
        $this->template->scripts = array("stfile/js/tests.js");
        $data['data'] = true;
        $this->template->content = View::factory('tests/vTests',$data);
	}


    // Все тесты (кроме ЗНО)
    public function action_all(){
        $this->template->title = "Тесты: все тесты";
        $this->template->styles = array("stfile/css/tests.css" => "screen");
        $this->template->scripts = array("stfile/js/tests.js");
        $data['data'] = true;
        $data['all_tests'] = Model::factory('Mtests')->getTestsList(false);
        $this->template->content = View::factory('tests/vTestsAll',$data);
    }

    // Страница создания нового теста
    public function action_create(){

        $this->template->title = "Создание теста";
        $this->template->styles = array("stfile/css/tests.css" => "screen");
        $this->template->scripts = array("stfile/js/tests.js",
                                         "stfile/js/plupload.full.js");
        $data['data'] = true;
        $this->template->content = View::factory('tests/vTestCreate',$data);
    }

    // Тест создан
    public function action_created() {

        $this->template->title = "Создание теста";
        $this->template->styles = array("stfile/css/tests.css" => "screen");
        $this->template->scripts = array("stfile/js/tests.js");
        $auth = Auth::instance();

        if($auth->logged_in()){
            $data['user_auth'] = true;
            $data['user_name'] = $auth->get_user()->username;
            $data['user_id'] = $auth->get_user()->id;
        }else{
            $data['user_auth'] = false;
        }
        if(!empty($_POST)) {
            $data['post_set'] = true;
            $data['result'] = Model::factory('Mtests')->addNewTest($data);
        } else {
            $data['post_set'] = false;
        }

        $this->template->content = View::factory('tests/vTestsCreated',$data);
    }


    // Страница с тестом пользователей
    public function action_usertest() {

        $this->template->styles = array("stfile/css/tests.css" => "screen");
        $this->template->scripts = array("stfile/js/tests.js");


        session_start();

        // Идентификатор теста ЗНО на английском язике
        $usertest_id = $this->request->param('id_test');
        $question_number = $this->request->param('question_number');


        // Если было передано идентификатор теста
        if($usertest_id) {
            $test = Model::factory('Mtests')->getOneUserTest($usertest_id);
            $test['number'] = $question_number;
            $test['test_kind'] = 'usertest';
            $test['test_id'] = $usertest_id;

            if(!empty($_POST)){
                if(!empty($_SESSION['tests'])) {
                    $_SESSION['tests'][$_POST['id_test']][$_POST['id_question']]['variants'] = $_POST['variants'];
                    $_SESSION['tests'][$_POST['id_test']][$_POST['id_question']]['kind'] = $_POST['kind'];
                } else {
                    $_SESSION['tests'][$_POST['id_test']][$_POST['id_question']]['variants'] = $_POST['variants'];
                    $_SESSION['tests'][$_POST['id_test']][$_POST['id_question']]['kind'] = $_POST['kind'];
                }



            } else {
                $test['message'] = 'empty';
            }

            if((isset($question_number)) && ($question_number == 'result')) {
                $correct_question = 0;
                $count_question = ORM::factory('tstquestion')->where('test_id','=',$usertest_id)->count_all();
                $tests = $_SESSION['tests'][$_POST['id_test']];
                foreach($tests as $key => $questions) {
                    $uncorrect = 0;
                    // Вопрос с вариантами ответа
                    if($questions['kind'] == 0) {
                        $is_text = false;
                        $question = ORM::factory('tstquestion')->where('id_tst_question','=',$key)->find();
                        $corr_variant_count = $question->answers->where('correct','=','1')->count_all();
                        $wrong = 0;
                        $correct = 0;
                        foreach($questions['variants'] as $variants) {

                            $answer = ORM::factory('tstanswer')->where('id_tst_answer','=',$variants)->find();
                            if(sizeof($variants) > 0) {
                                if(($answer->correct == 0) && ($answer->question->id_tst_question == $key)) {

                                    $wrong++;
                                } else {
                                    $correct++;
                                }
                            }
                        }
                        if(($wrong == 0) && ($correct == $corr_variant_count)) {
                            $uncorrect = 0;
                        } else {
                            $uncorrect++;
                        }

                        // Вопрос без вариантов ответа
                    } else {
                        $is_text = true;
                        $question = ORM::factory('tstquestion')->where('id_tst_question','=',$key)->find();
                        $corr_variants = $question->answers->where('correct','=','1')->find_all();
                        foreach($corr_variants as $corr_variant) {

                            if($corr_variant->title == $questions['variants']) {
                                $uncorrect = 0;
                            } else {
                                $uncorrect = 1;
                            }
                        }
                    }
                    if($uncorrect == 0) {
                        $correct_question++;
                    }
                }
                $test['count'] = $count_question;
                $test['correct_count'] = $correct_question;

            }


            if($test['status'] == 'ok') {

                // Если указан только ид теста то переадресовиваем пользователя на первий вопрос
                if(!isset($question_number)) {
                    $this->request->redirect('/tests/usertest/'.$usertest_id .'/1');
                }
                if($question_number == 'result') {
                    $curr_count = $test['test']->complete_count;
                    $curr_count++;
                    $test['test']->complete_count = $curr_count;
                    $test['test']->update();
                    $this->template->content = View::factory('tests/vTestsDone',$test);
                } else {
                    $this->template->content = View::factory('tests/vOneTest',$test);
                }

            } else {
                $this->request->redirect('/tests');
            }
            //Если же нет то возвращаем пользователя на главную тестов
        } else {
            $this->request->redirect('/tests');
        }

    }

    // Страница с тестом из ЗНО
    public function action_zno() {

        $this->template->styles = array("stfile/css/tests.css" => "screen");
        $this->template->scripts = array("stfile/js/tests.js");


        session_start();

        // Идентификатор теста ЗНО на английском язике
        $znotest_id = $this->request->param('id_test');
        $question_number = $this->request->param('question_number');


        // Если было передано идентификатор теста
        if($znotest_id) {
            $test = Model::factory('Mtests')->getOneZnoTest($znotest_id);
            $test['number'] = $question_number;
            $test['test_kind'] = 'zno';
            $test['test_id'] = $znotest_id;

            if(!empty($_POST)){
                if(!empty($_SESSION['tests'])) {
                    $_SESSION['tests'][$_POST['id_test']][$_POST['id_question']]['variants'] = $_POST['variants'];
                    $_SESSION['tests'][$_POST['id_test']][$_POST['id_question']]['kind'] = $_POST['kind'];
                } else {
                    $_SESSION['tests'][$_POST['id_test']][$_POST['id_question']]['variants'] = $_POST['variants'];
                    $_SESSION['tests'][$_POST['id_test']][$_POST['id_question']]['kind'] = $_POST['kind'];
                }



            } else {
                $test['message'] = 'empty';
            }

            if((isset($question_number)) && ($question_number == 'result')) {
                $count_question = ORM::factory('tstquestion')->where('test_id','=',$test['test']->id_test)->count_all();
                $correct_question = 0;
                $tests = $_SESSION['tests'][$_POST['id_test']];
                foreach($tests as $key => $questions) {
                    $uncorrect = 0;
                    // Вопрос с вариантами ответа
                    if($questions['kind'] == 0) {
                        $is_text = false;
                        $question = ORM::factory('tstquestion')->where('id_tst_question','=',$key)->find();
                        $corr_variant_count = $question->answers->where('correct','=','1')->count_all();
                        $wrong = 0;
                        $correct = 0;
                        foreach($questions['variants'] as $variants) {

                            $answer = ORM::factory('tstanswer')->where('id_tst_answer','=',$variants)->find();
                            if(sizeof($variants) > 0) {
                                if(($answer->correct == 0) && ($answer->question->id_tst_question == $key)) {

                                    $wrong++;
                                } else {
                                    $correct++;
                                }
                            }
                        }
                        if(($wrong == 0) && ($correct == $corr_variant_count)) {
                            $uncorrect = 0;
                        } else {
                            $uncorrect++;
                        }

                    // Вопрос без вариантов ответа
                    } else {
                        $is_text = true;
                        $question = ORM::factory('tstquestion')->where('id_tst_question','=',$key)->find();
                        $corr_variants = $question->answers->where('correct','=','1')->find_all();
                        foreach($corr_variants as $corr_variant) {

                            if($corr_variant->title == $questions['variants']) {
                                $uncorrect = 0;
                            } else {
                                $uncorrect = 1;
                            }
                        }
                    }
                    if($uncorrect == 0) {
                        $correct_question++;
                    }
                }

                $test['correct_count'] = $correct_question;
                $test['count'] = $count_question;
            }


            if($test['status'] == 'ok') {

                // Если указан только ид теста то переадресовиваем пользователя на первий вопрос
                if(!isset($question_number)) {
                    $this->request->redirect('/tests/zno/'.$znotest_id .'/1');
                }
                if($question_number == 'result') {
                    $curr_count = $test['test']->complete_count;
                    $curr_count++;
                    $test['test']->complete_count = $curr_count;
                    $test['test']->update();
                    $this->template->content = View::factory('tests/vTestsDone',$test);
                } else {
                    $this->template->content = View::factory('tests/vOneTest',$test);
                }

            } else {
                $this->request->redirect('/tests');
            }
        //Если же нет то возвращаем пользователя на главную тестов
        } else {
            $this->request->redirect('/tests');
        }


    }
}
