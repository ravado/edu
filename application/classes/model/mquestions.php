<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Модель отвечающая за работу с вопросами
 *
 */
class Model_Mquestions extends Model_Database{

    // Выводим на главную ВиО данные из бд
    public  function mainQA(){
        $result = null;
        $last = DB::select('questions.id_question',
                            'questions.title',
                            'questions.id_user',
                            'questions.tags',
                            'questions.public_date',
                            'questions.answers_count',
                            'users.username')->from('questions')->join('users')->on('questions.id_user','=','users.id')->limit(20)->order_by('public_date','DESC');
        if ($result_last = $last->execute()->as_array()) {
            $result['last'] = $result_last;
        } else {
            $result['last'] = null;
        }


        $popular = DB::select('questions.id_question',
            'questions.title',
            'questions.id_user',
            'questions.tags',
            'questions.public_date',
            'questions.answers_count',
            'users.username')->from('questions')->join('users')->on('questions.id_user','=','users.id')->limit(7)->order_by('answers_count','DESC');
        if ($result_popular = $popular->execute()->as_array()) {
            $result['popular'] = $result_popular;
        } else {
            $result['popular'] = null;
        }

        return $result;

    }

    /*Добавляем новый вопрос*/
    public function askQuestion($data){
        $qTitle = $data['questionTitle'];
        $qFull = $data['questionFull'];

        $qTags = $data['tags'];
        $date = date("Y-m-d H:i:s");

        // Узнаем ID пользователя
        $query2 = DB::select('id')->from('users')->where('username','=', $data['username'] );
        $id = $query2->execute();
        $userID = $id[0];

        // Выполняем запись вопроса
        $query = DB::insert('questions',array(
                    'title',
                    'full',
                    'id_user',
                    'tags',
                    'public_date',
                    ))->values(array(
                        $qTitle,
                        $qFull,
                        $userID,
                        $qTags,
                        $date));
        if($query->execute()){

            return true;
        } else {
            return false;
        }
    }
    public function  getOneQuestion($idQuestion) {
        if(!empty($idQuestion)) {
//            $query = DB::select('title')->from('questions')->where('id_question','=', $idQuestion );
//            $some = 24;
            $temp = null;
            $queryQuestion = DB::select('questions.id_question',
                    'questions.title',
                    'questions.id_user',
                    'users.username',
                    'users.karma',
                    'questions.rating',
                    'questions.public_date',
                    'questions.full',
                    'questions.closed',
                    'questions.tags'
                    )->from('questions')->join('users')->on(
                                    'users.id','=', 'questions.id_user')->on('questions.id_question','=',DB::expr($idQuestion));
            if ($temp = $queryQuestion->execute()) {
                $result['question'] = $temp;
            }

            $queryAnswers = DB::select('answers.id_answer',
                    'answers.public_date',
                    'answers.rating',
                    'answers.best',

                    'users.username',

                    'answers.answer_text')->from('questions_and_answers')->where('questions_and_answers.id_questions','=',DB::expr($idQuestion))->join('answers')->on('answers.id_answer','=','questions_and_answers.id_answers')->join('users','LEFT')->on('users.id','=','answers.id_user');

            if ($temp = $queryAnswers->execute()) {
                $result['answers'] = $temp;
            }

            if ($temp != null) {
                return $result;
            } else {
                return false;
            }
        }
    }


    public function addAnswer($data) {
        if (!empty($data)) {
            $result=null;
            $tempquery = DB::select('id')->from('users')->where('username','=', $data['username']);
            $userID = $tempquery->execute();
            $shieldingText = addslashes($data['answer_text']);
            $date = date("Y-m-d H:i:s");
            $query = DB::insert('answers',array(
                    'id_user',
                    'answer_text',
                    'public_date',
                        ))->values(array(
                $userID[0],
                $shieldingText,
                            $date));
            if($temp = $query->execute()) {
                $queryLast = DB::select('id_answer')->from('answers')->where('public_date','=', $date);
                $resultLast = $queryLast->execute();

                $query = DB::insert('questions_and_answers',array(
                    'id_questions',
                    'id_answers',
                    ))->values(array($data['questionID'], $resultLast[0]));
                if ($temp = $query->execute()) {
                    $result['public_date'] = $date;
                    $result['id_answer'] = $resultLast[0]['id_answer'];
                    $result['username'] = $data['username'];
                    return $result;
                } else {
                    return false;
                }
            } else {
                return false;
            }
        } else {
            return false;
        }
    }


}

