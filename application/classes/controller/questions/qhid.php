<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Questions_Qhid extends Controller {


	public function action_index(){

	}

    /*Показываем страницу  задания вопроса*/
	public function action_addAnswer(){
        $auth = Auth::instance();
        if($auth->logged_in()) {
            $data['username'] = $auth->get_user()->username;
            $data['questionID'] = $_GET['id_question'];
            $data['answer_text'] = $_GET['answer_text'];
            $result = Model::factory('Mquestions')->addAnswer($data);

            echo json_encode($result);
        }

    }
}
