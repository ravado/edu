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
        //$query2 = DB::select('id')->from('users')->where('username','=', $data['username'] );
        //$id = $query2->execute();
        $userID = $data['id_user'];

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
        if($some = $query->execute()){
            $temp = DB::insert('questions_and_answers',array('id_questions'))->values(array($some[0]))->execute();
            return true;
        } else {
            return false;
        }
    }
    public function  getOneQuestion($data) {
        if(!empty($data)) {
//            $query = DB::select('title')->from('questions')->where('id_question','=', $idQuestion );
//            $some = 24;
            $result['favorite'] = false;
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
                    'questions.tags',
                    'questions_and_answers.id_questions_and_answers',
                    'vote.value')->
                from('questions')->join('users')->
                on('users.id','=', 'questions.id_user')->
                on('questions.id_question','=',DB::expr($data['question_id']))->join('questions_and_answers','left')->
                on('questions_and_answers.id_questions','=',DB::expr($data['question_id']))->
                on('questions_and_answers.id_answers','is', DB::expr('null'))->join('vote','LEFT')->
                on('vote.id_user','=',DB::expr($data['user_id']))->
                on('vote.id_qa','=','questions_and_answers.id_questions_and_answers');;
            if ($temp = $queryQuestion->execute()) {
                $result['question'] = $temp;
                if(!empty($data['user_id'])) {
                    $queryFavorite = DB::select('id_qfavorite')->from('qfavorite')->where('id_user','=',DB::expr($data['user_id']))->
                        where('id_question','=',DB::expr($data['question_id']));
                    $favorite = $queryFavorite->execute();
                    if($favorite[0]['id_qfavorite'] > -1) {
                        $result['favorite'] = true;
                    }
                }
            }

            $queryAnswers = DB::select('answers.id_answer',
                    'answers.public_date',
                    'answers.rating',
                    'answers.best',
                    'questions_and_answers.id_questions',
                    'users.username',
                    'questions_and_answers.id_questions_and_answers',
                    'answers.answer_text',
                    'vote.value')->from('questions_and_answers')->
                where('questions_and_answers.id_questions','=',DB::expr($data['question_id']))->join('answers')->
                on('answers.id_answer','=','questions_and_answers.id_answers')->join('users','LEFT')->
                on('users.id','=','answers.id_user')->join('vote','LEFT')->on('vote.id_user','=',DB::expr($data['user_id']))->
                on('vote.id_qa','=','questions_and_answers.id_questions_and_answers');

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
            $result = null;
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
                DB::update('questions')->set(array('answers_count' => new Database_Expression('answers_count+1')))->
                    where('id_question','=',DB::expr($data['questionID']))->execute();
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

    public function addFavorite($data) {
        $message = '';
        if (!empty($data)) {
            $queryExist = DB::select('id_qfavorite')->from('qfavorite')->where('id_user','=',$data['user_id'])->where('id_question','=',$data['question_id']);
            $exist = $queryExist->execute();
            $some = $exist[0]['id_qfavorite'];
            if($some > -1) {
                $message = 'exist';
                return $message;
            } else {
                $query = DB::insert('qfavorite',array(
                    'id_user',
                    'id_question'
                ))->values(array($data['user_id'], $data['question_id']));
                if($temp = $query->execute()) {
                    $message = 'inserted';
                    return $message;
                } else {
                    $message = 'not inserted';
                    return $message;
                }
            }
        } else {
            $message = 'empty data';
            return $message;
        }

    }

    public function removeFavorite($data) {
        $message = '';
        if (!empty($data)) {
            $query = DB::select('id_qfavorite')->from('qfavorite')->where('id_user','=',$data['user_id'])->where('id_question','=',$data['question_id']);
            $id_qfavorite = $query->execute();
            $some = $id_qfavorite[0]['id_qfavorite'];
            if($some > -1) {
                $query2 = DB::delete('qfavorite')->where('id_qfavorite','=',$id_qfavorite[0]['id_qfavorite']);
                if($result = $query2->execute()) {
                    $message = 'deleted';
                    return $message;
                } else {
                    $message = 'not deleted';
                    return $message;
                }
            } else {
                $message = 'not found';
                return $message;
            }
        } else {
            $message = 'empty data';
            return $message;
        }
    }

    // Голосуем за
    public function voteUp($data) {
        if (!empty($data)) {
            $query = DB::select('vote.id_vote', 'vote.value','questions_and_answers.id_answers', 'questions_and_answers.id_questions')->
                from('questions_and_answers')->where('questions_and_answers.id_questions_and_answers','=',DB::expr($data['qa_id']))->
                join('vote','LEFT')->
                on('vote.id_user','=',DB::expr($data['user_id']))->on('vote.id_qa','=',DB::expr($data['qa_id']))->execute();

            if (is_null($query[0]['id_answers'])) {
                $isQuestion = true;
            } else {
                $isQuestion = false;
            }

            // Если еще не голосовал за этот вопрос или ответ
            if (empty($query[0]['id_vote'])) {
                DB::insert('vote',array('id_user','id_qa','value'))->values(array($data['user_id'], $data['qa_id'], '1'))->execute();
                if ($isQuestion) {
                    DB::update('questions')->set(array('rating' => new Database_Expression('rating+1') ))->
                        where('id_question','=',DB::expr($query[0]['id_questions']))->execute();
                    return 'voted up';
                } else {
                    DB::update('answers')->set(array('rating' => new Database_Expression('rating+1') ))->
                        where('id_answer','=',DB::expr($query[0]['id_answers']))->execute();
                    return 'voted up';
                }

            // Если же голосовал
            } else {
                // Проверяем как голосовал + или -
                if ($query[0]['value'] == 1) {
                    // Значит уже так голосовал
                    return 'similar';
                } elseif ($query[0]['value'] == -1) {
                    // Значит голосовал противоположно и хочет изменить результат
                    DB::update('vote')->set(array('value' => '1'))->where('id_qa','=',$data['qa_id'])->where('id_user','=',DB::expr($data['user_id']))->execute();
                    if ($isQuestion) {
                        DB::update('questions')->set(array('rating' => new Database_Expression('rating+2') ))->
                            where('id_question','=',DB::expr($query[0]['id_questions']))->execute();
                        return 'changed to +2';
                    } else {
                        DB::update('answers')->set(array('rating' => new Database_Expression('rating+2') ))->
                            where('id_answer','=',DB::expr($query[0]['id_answers']))->execute();
                        return 'changed to +2';
                    }
                }
            }
        } else {
            return 'empty data';
        }
    }


    // Голосуем за
    public function voteDown($data) {
        if (!empty($data)) {
            $query = DB::select('vote.id_vote', 'vote.value','questions_and_answers.id_answers', 'questions_and_answers.id_questions')->
                from('questions_and_answers')->where('questions_and_answers.id_questions_and_answers','=',DB::expr($data['qa_id']))->
                join('vote','LEFT')->
                on('vote.id_user','=',DB::expr($data['user_id']))->on('vote.id_qa','=',DB::expr($data['qa_id']))->execute();

            if (is_null($query[0]['id_answers'])) {
                $isQuestion = true;
            } else {
                $isQuestion = false;
            }

            // Если еще не голосовал за этот вопрос или ответ
            if (empty($query[0]['id_vote'])) {
                DB::insert('vote',array('id_user','id_qa','value'))->values(array($data['user_id'], $data['qa_id'], '-1'))->execute();
                if ($isQuestion) {
                    DB::update('questions')->set(array('rating' => new Database_Expression('rating-1') ))->
                        where('id_question','=',DB::expr($query[0]['id_questions']))->execute();
                    return 'voted down';
                } else {
                    DB::update('answers')->set(array('rating' => new Database_Expression('rating-1') ))->
                        where('id_answer','=',DB::expr($query[0]['id_answers']))->execute();
                    return 'voted down';
                }

                // Если же голосовал
            } else {
                // Проверяем как голосовал + или -
                if ($query[0]['value'] == '-1') {
                    // Значит уже так голосовал
                    return 'similar';
                } elseif ($query[0]['value'] == 1) {
                    // Значит голосовал противоположно и хочет изменить результат
                    DB::update('vote')->set(array('value' => '-1'))->where('id_qa','=',$data['qa_id'])->where('id_user','=',DB::expr($data['user_id']))->execute();
                    if ($isQuestion) {
                        DB::update('questions')->set(array('rating' => new Database_Expression('rating-2') ))->
                            where('id_question','=',DB::expr($query[0]['id_questions']))->execute();
                        return 'changed to -2';
                    } else {
                        DB::update('answers')->set(array('rating' => new Database_Expression('rating-2') ))->
                            where('id_answer','=',DB::expr($query[0]['id_answers']))->execute();
                        return 'changed to -2';
                    }
                }
            }
        } else {
            return 'empty data';
        }
    }


}

