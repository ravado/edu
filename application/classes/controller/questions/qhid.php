<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Questions_Qhid extends Controller {


	public function action_index(){

	}

    /*Добавляем ответ на вопрос в базу*/
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

    /*Добавляем вопрос в избраное пользователя*/
    public function action_addFavorite(){
        $auth = Auth::instance();
        if($auth->logged_in()) {
            $data['user_id'] = $auth->get_user()->id;
            $data['question_id'] = $_POST['question_id'];
            $result = Model::factory('Mquestions')->addFavorite($data);

            echo json_encode($result);
        } else {
            echo json_encode('not auth');
        }

    }

    /*Удаляем вопрос из избраного пользователя*/
    public function action_removeFavorite(){
        $auth = Auth::instance();
        if($auth->logged_in()) {
            $data['user_id'] = $auth->get_user()->id;
            $data['question_id'] = $_POST['question_id'];
            $result = Model::factory('Mquestions')->removeFavorite($data);
            echo json_encode($result);
        } else {
            echo json_encode('not auth');
        }

    }


    public function action_voteUp() {
        $auth = Auth::instance();
        if($auth->logged_in()) {
            $data['user_id'] = $auth->get_user()->id;
            $data['qa_id'] = $_POST['qa_id'];
            $result = Model::factory('Mquestions')->voteUp($data);
            echo json_encode($result);
        } else {
            echo json_encode('not auth');
        }
    }

    public function action_voteDown() {
        $auth = Auth::instance();
        if($auth->logged_in()) {
            $data['user_id'] = $auth->get_user()->id;
            $data['qa_id'] = $_POST['qa_id'];
            $result = Model::factory('Mquestions')->voteDown($data);
            echo json_encode($result);
        } else {
            echo json_encode('not auth');
        }
    }

    public function action_checkAsBest() {
        $auth = Auth::instance();
        if($auth->logged_in()) {
            $data['user_id'] = $auth->get_user()->id;
            $data['answer_id'] = $_POST['answer_id'];
            $data['question_id'] = $_POST['question_id'];
            $result = Model::factory('Mquestions')->checkAsBest($data);
            echo json_encode($result);
        } else {
            echo json_encode('not auth');
        }
    }

}
