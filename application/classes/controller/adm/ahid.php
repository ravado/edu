<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Контроллер отвечает за невидимые операции
 */
class Controller_Adm_Ahid extends Controller{

    public function action_index(){
 
    }

    /*Возвращаем данные профиля пользователя по его имени*/
    public function action_getUserInfo(){
        $userName = Arr::get($_POST,'userToDelete','');
        //if(!empty($userName)){
           $mUser = Model::factory('Muser')->getUserInfo($userName);
           echo json_encode($mUser);
    }

     /*Удаеляем пользователя по имени*/
    public function action_delUser(){
        $userName = Arr::get($_POST,'userToDelete','');
        if(!empty($userName)){
            $mUser = Model::factory('Muser')->delUser($userName);
            echo json_encode($mUser);
        }else{
            return FALSE;
        }
    }

    public function action_delTest(){
        $id_test = Arr::get($_POST,'test_id','');
        $test = ORM::factory('ormtest', $id_test);
        $test->delete();
        echo json_encode('ok');
    }

    /*Изменяем профиль пользователя*/
   public function action_fixUser(){
       if(!empty($_POST)){
            $userData['password'] = Arr::get($_POST,'password','');
            $userData['email'] = Arr::get($_POST,'email','');
            $userData['sex'] = Arr::get($_POST,'sex','');
            $userData['first_name'] = Arr::get($_POST,'firstName','');
            $userData['last_name'] = Arr::get($_POST,'lastName','');
            $userData['id'] = Arr::get($_POST,'id','');
            $userData['role'] = Arr::get($_POST,'slUsrRole','');

            $result = Model::factory('Muser')->admEditUser($userData);
            echo json_encode($result);
        }
   }

    public function  action_getQuestionById() {
        if(!empty($_POST)) {
            $questionId = Arr::get($_POST,'question_id','');
            $result = Model::factory('Mquestions')->getQuestionById($questionId);
        } else {
            $result = false;
        }

        echo json_encode($result);
    }

    public function  action_getQuestionAllById() {
        if(!empty($_POST)) {
            $questionId = Arr::get($_POST,'question_id','');
            $result = Model::factory('Mquestions')->getQuestionAllById($questionId);
        } else {
            $result = false;
        }

        echo json_encode($result);
    }

    public function  action_delQuestionById() {
        if(!empty($_POST)) {
            $questionId = Arr::get($_POST,'question_id','');
            $result = Model::factory('Mquestions')->delQuestionById($questionId);
        } else {
            $result = false;
        }

        echo json_encode($result);
    }

    public function action_delAnswersById() {
        if(!empty($_POST)) {
            $temp = Arr::get($_POST,'answers_id','');
            $answers_id = explode(',', $temp);
            $result = Model::factory('Mquestions')->delAnswersById($answers_id);
        } else {
            $result = false;
        }

        echo json_encode($result);
    }
// Добавление фактов
    public function action_addFact() {

        if(!empty($_POST)) {
            $day = $_POST['fctDay'];
            $month = $_POST['fctMonth'];
            $date = (string)$day .(string)$month;
            $facts = $_POST['facts'];
            $kind = $_POST['fctKind'];
            switch ($kind) {
                case 'event': {
                    foreach($facts as $fact) {
                        DB::insert('event', array('event_item', 'day'))->
                            values(array($fact, $date))->execute();
                    }
                    break;
                }
                case 'born': {
                    foreach($facts as $fact) {
                        DB::insert('born', array('born_item', 'day'))->
                            values(array($fact, $date))->execute();
                    }
                    break;
                }
                case 'folk': {
                    foreach($facts as $fact) {
                        DB::insert('folk', array('folk_item', 'day'))->
                            values(array($fact, $date))->execute();
                    }
                    break;
                }
            }
            echo json_encode('write successful');
        } else {
            echo json_encode('post was empty :(');
        }
    }

// ================================== тесты ===============================================//
    public function action_createTest() {
        if(!empty($_POST)) {
            $auth = Auth::instance();
            $data['user_id'] = $auth->get_user()->id;
            $data['title'] = $_POST['tst_title'];
            $data['subcategory_id'] = $_POST['subcategory'];
            $data['output_result'] = $_POST['output_result'];
            $data['randomize'] = $_POST['randomize'];
            $data['password'] = $_POST['password'];
            $data['timer'] = $_POST['timer'];
            if(isset($_POST['need_del'])) {
                $data['need_del'] = true;
            } else { $data['need_del'] = false; }
            $data['rating'] = $_POST['rating'];
            $data['complete_count'] = $_POST['complete_count'];
            $result = Model::factory('Mtests')->createTest($data);
            if($result) {
                echo json_encode($result);
            } else {
                echo json_encode('everithing is bad');
            }
        } else {
            echo json_encode('post is empty');
        }

    }


    // Добавление вопроса и вариантов ответа для теста
    public function action_tstAddQuestVar() {

        // Возвращаемое сообщение и статус выполнения
        $json_return['message'] = '';
        $json_return['status'] = '';

        // Если данные пришли
        if(!empty($_POST)) {

            // Записываем в массив с первым индексом идентификатора теста данные о 1 вопросе
            $question[$_POST['tst_id']][0] = $_POST['question'];
            $result = Model::factory('Mtests')->addQuestion($question);

            // Если добавление вопроса прошло успешно...
            if ($result['status'] == 'ok') {
                $question_id = $result['question_id'];
                // Записываем в массив с индексом id вопроса добавленого в базу данные о вариантах ответа
                $some[$question_id] = $_POST['tst_variant'];
                $result = Model::factory('Mtests')->addVariants($some);

                // Если варианты были успешно записаны...
                if($result['status'] == 'ok') {

                    // То получаем 1 вопрос и варианты ответа на него, и возвращаем результаты клиенту
                    $questions_variants = Model::factory('Mtests')->getQuestionVar($question_id);
                    echo json_encode($questions_variants);
                } else {
                    echo json_encode($result);
                }

            } else {
                echo json_encode($result);
            }

        } else {
            $json_return['message'] = 'post is empty';
            $json_return['status'] = 'bad';
            echo json_encode($json_return);
        }
    }



}