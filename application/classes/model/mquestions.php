<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Модель отвечающая за работу с вопросами
 *
 */
class Model_Mquestions extends Model_Database{

    // Выводим на главную ВиО данные из бд
    public  function mainQA($data){
        $result = null;
        $last = DB::select('questions.id_question',
                            'questions.title',
                            'questions.id_user',
                            'questions.public_date',
                            'questions.answers_count',
                            'users.username',
                            'qfavorite.id_qfavorite'
                            )->
            from('questions')
            ->join('users')->on('questions.id_user','=','users.id')
            ->join('qfavorite','left')
            ->on('qfavorite.id_question','=','questions.id_question')->on('qfavorite.id_user','=',DB::expr($data['user_id']))
            ->order_by('questions.public_date','DESC')->limit(15)
            ->execute()->as_array();
        if(!empty($last)) {
            foreach($last as $k=>$v) {
                $temp = DB::select('questions_cat.id_question',
                    'questions_cat.id_subcategory',
                    'subcategory.id_subcategory',
                    'subcategory.stitle')
                    ->from('questions_cat')->where('questions_cat.id_question','=', $last[$k]['id_question'])
                    ->join('subcategory')->on('subcategory.id_subcategory','=','questions_cat.id_subcategory')->execute()->as_array();
                array_push($last[$k],$temp);
            }

            $result['last'] = $last;
        }



        $popular = DB::select('questions.id_question',
            'questions.title',
            'questions.id_user',
            'questions.public_date',
            'questions.answers_count',
            'users.username',
            'qfavorite.id_qfavorite')
            ->from('questions')
            ->join('users')->on('questions.id_user','=','users.id')
            ->join('qfavorite','left')
            ->on('qfavorite.id_question','=','questions.id_question')->on('qfavorite.id_user','=',DB::expr($data['user_id']))
            ->limit(5)->order_by('answers_count','DESC')->execute()->as_array();

        if(!empty($popular)) {
            foreach($popular as $k=>$v) {
                $temp = DB::select('questions_cat.id_question',
                    'questions_cat.id_subcategory',
                    'subcategory.id_subcategory',
                    'subcategory.stitle')
                    ->from('questions_cat')->where('questions_cat.id_question','=', $popular[$k]['id_question'])
                    ->join('subcategory')->on('subcategory.id_subcategory','=','questions_cat.id_subcategory')->execute()->as_array();
                array_push($popular[$k],$temp);
            }
            $result['popular'] = $popular;
        }

        return $result;

    }

    /*Добавляем новый вопрос*/
    public function askQuestion($data){
        $qTitle = $data['questionTitle'];
        $qFull = $data['questionFull'];

        $date = date("Y-m-d H:i:s");
        $userID = $data['id_user'];

        //Выбираем все записи с таблицы подкатегорий для сверки на существование добавленых подкатегорий
        $some =  DB::select('id_subcategory','stitle')->from('subcategory')->execute()->as_array();

        //В этот массив будем записывать id подкатегорий которые уже есть в базе
        $catexist = array();
        $count = 0;
        foreach($some as $k=>$v) {

            //Ищем совпадения
            foreach($data['cat'] as $key=>$val) {
                if($some[$k]['stitle'] == $data['cat'][$key]) {

                    //Найденные подкатегории удаляем со списка поиска
                    unset($data['cat'][$key]);

                    //Записываем id подкатегории
                    $catexist[$count] = $some[$k]['id_subcategory'];
                    $count++;
                }
            }
        }

        // Тех категорий которых не было в базе записываем в нее

        foreach ($data['cat'] as $k=>$v) {

            // Id только что записаных данных сохраняем
            $idsubcat[$k] = DB::insert('subcategory', array('stitle'))->
                values(array($data['cat'][$k]))->execute();
            array_push($catexist,$idsubcat[$k][0]);
        }


        // Из 2х массивов содержащих id подкатегорий делаем один
//        $nmass[] = array_merge($catexist,$idsubcat[0]);
//        foreach($catexist as $k=>$v) {
//            $nmass[$k] = $catexist[$k];
//        }
//        foreach($idsubcat as $k=>$v) {
//            $nmass[$k+count($catexist)] = $idsubcat[$k][0];
//        }




        // Выполняем запись вопроса
        $query = DB::insert('questions',array(
                    'title',
                    'full',
                    'id_user',
                    'public_date'
                    ))->values(array(
                        $qTitle,
                        $qFull,
                        $userID,
                        $date));
        if($some = $query->execute()){
            $temp = DB::insert('questions_and_answers',array('id_questions'))->values(array($some[0]))->execute();

            //Теперь вставляем в главную таблицу категорий запись с id вопроса и id категорий
            foreach ($catexist as $k=>$v) {
                DB::insert('questions_cat', array('id_question','id_subcategory'))->
                    values(array($some[0],$catexist[$k]))->execute();
            }

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
            $result['answers'] = array();
            $result['question'] = array();

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
                    'questions_and_answers.id_questions_and_answers',
                    'vote.value')->
                from('questions')->join('users')->
                on('users.id','=', 'questions.id_user')->
                on('questions.id_question','=',DB::expr($data['question_id']))->join('questions_and_answers','left')->
                on('questions_and_answers.id_questions','=',DB::expr($data['question_id']))->
                on('questions_and_answers.id_answers','is', DB::expr('null'))->join('vote','LEFT')->
                on('vote.id_user','=',DB::expr($data['user_id']))->
                on('vote.id_qa','=','questions_and_answers.id_questions_and_answers')->execute()->as_array();
            if (!empty($queryQuestion)) {

                if(!empty($data['user_id'])) {
                    $queryFavorite = DB::select('id_qfavorite')->from('qfavorite')->where('id_user','=',DB::expr($data['user_id']))->
                        where('id_question','=',DB::expr($data['question_id']));
                    $favorite = $queryFavorite->execute();
                    if($favorite[0]['id_qfavorite'] > -1) {
                        $result['favorite'] = true;
                    }
                }

                $temp = DB::select('questions_cat.id_question',
                    'questions_cat.id_subcategory',
                    'subcategory.id_subcategory',
                    'subcategory.stitle')
                    ->from('questions_cat')->where('questions_cat.id_question','=', $queryQuestion[0]['id_question'])
                    ->join('subcategory')->on('subcategory.id_subcategory','=','questions_cat.id_subcategory')->execute()->as_array();
                array_push($queryQuestion,$temp);
                $result['question'] = $queryQuestion;
            } else {
                return false;
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
                on('vote.id_qa','=','questions_and_answers.id_questions_and_answers')->execute()->as_array();

            if (!empty($queryAnswers)) {
                $result['answers'] = $queryAnswers;
            }
                return $result;

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
                    $result['id_qa'] = $temp[0];
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

//    public function checkAsBest($data) {
//        if (!empty($data)) {
//            DB::update('answers')->set(array('best' => '1' ))->
//                where('id_answer','=',DB::expr($data['answer_id']))->execute();
//            DB::update('questions')->set(array('closed' => '1'))->where('id_question','=',DB::expr($data['question_id']))->execute();
//            return 'checked';
//        } else {
//            return 'empty data';
//        }
//    }

    public function getAllCategories($data) {

        if ($data == 'some') {
            $allCategories = DB::select('category.id_category',
                    'category.ctitle')
                ->from('category')
                ->where('category.ctitle','!=','usercategory')
                ->execute()->as_array();

            foreach($allCategories as $k => $v) {
                $temp = DB::select('subcategory.id_subcategory', 'subcategory.stitle', 'category.id_category')
                    ->from('category')
                    ->where('category.id_category', '=', $allCategories[$k]['id_category'])
                    ->join('subcategory')
                    ->on('subcategory.id_category','=','category.id_category')->execute()->as_array();
                array_push($allCategories[$k],$temp);
            }
        } else {
            $allCategories = DB::select('subcategory.id_subcategory', 'subcategory.stitle', 'category.id_category',
                'category.ctitle')->
                from('category')->where('category.ctitle','!=','usercategory')->
                join('subcategory')->
                on('subcategory.id_category','=','category.id_category')->order_by('subcategory.id_category','ASC')->
                execute()->as_array();
        }



        return $allCategories;
    }


    public function getAllQuestions($data) {
        $per_page = $data['per_page'];
        $result['page'] = $data['page'];
        $result['count'] = null;
        $result['questions'] = array();

        if(!empty($data['page'])) {
            $offset = $data['page']*$per_page-$per_page;
        } else {
            $offset = 0;
        }

        if($data['qtype'] == 'opened') {
            $allOpenedQuestions = DB::select('questions.id_question',
                'questions.title',
                'qfavorite.id_qfavorite',
                'users.username',
                'questions.answers_count',
                'questions.rating',
                'questions.public_date',
                'questions.closed')
                ->from('questions')->where('questions.closed','=','0')
                ->join('users')
                ->on('users.id','=','questions.id_user')
                ->join('qfavorite','left')
                ->on('qfavorite.id_question','=','questions.id_question')->on('qfavorite.id_user','=',DB::expr($data['user_id']))
                ->offset($offset)
                ->limit($per_page)
                ->order_by('questions.public_date','DESC')->execute()->as_array();
        } elseif($data['qtype'] == 'closed') {
            DB::select('news_cat.news_id',
                        'news_cat.cat_id',
                        'news.id',
                        'cat.id')->from('news_cat')->where('news_cat.news_id','=','id новости')
                ->join('news')->on('news.id','=','news_cat.news_id')
                ->join('cat')->on('cat.id','=','news_cat.cat_id');

            $allOpenedQuestions = DB::select('questions.id_question',
                'questions.title',
                'qfavorite.id_qfavorite',
                'users.username',
                'questions.answers_count',
                'questions.rating',
                'questions.public_date',
                'questions.closed')
                ->from('questions')->where('questions.closed','=','1')
                ->join('users')
                ->on('users.id','=','questions.id_user')
                ->join('qfavorite','left')
                ->on('qfavorite.id_question','=','questions.id_question')->on('qfavorite.id_user','=',DB::expr($data['user_id']))
                ->offset($offset)
                ->limit($per_page)
                ->order_by('questions.public_date','DESC')->execute()->as_array();
        } elseif ($data['qtype'] == 'any') {

            $allOpenedQuestions = DB::select('questions.id_question',
                'questions.title',
                'qfavorite.id_qfavorite',
                'users.username',
                'questions.answers_count',
                'questions.rating',
                'questions.public_date',
                'questions.closed')
                ->from('questions')
                ->offset(DB::expr($data['page']))
                ->join('users')
                ->on('users.id','=','questions.id_user')
                ->join('qfavorite','left')
                ->on('qfavorite.id_question','=','questions.id_question')->on('qfavorite.id_user','=',DB::expr($data['user_id']))
                ->offset($offset)
                ->limit($per_page)
                ->order_by('questions.public_date','DESC')->execute()->as_array();

        // Выбираем все вопросы с определенной категории
        } elseif ($data['qtype'] == 'category') {


            $allOpenedQuestions = DB::select('questions.id_question',
                'questions.title',
                'qfavorite.id_qfavorite',
                'users.username',
                'questions.answers_count',
                'questions.rating',
                'questions.public_date',
                'questions.closed',
                'questions_cat.id_question',
                'questions_cat.id_subcategory',
                'subcategory.id_subcategory',
                'subcategory.stitle')
                ->from('questions_cat')
                ->where('questions_cat.id_subcategory','=',DB::expr($data['cat_id']))
                ->join('subcategory','left')
                ->on('subcategory.id_subcategory','=','questions_cat.id_subcategory')
                ->join('questions','left')
                ->on('questions_cat.id_question','=','questions.id_question')
                ->join('users')
                ->on('users.id','=','questions.id_user')
                ->join('qfavorite','left')
                ->on('qfavorite.id_question','=','questions.id_question')->on('qfavorite.id_user','=',DB::expr($data['user_id']))
                ->offset($offset)
                ->limit($per_page)
                ->order_by('questions.public_date','DESC')->execute()->as_array();
        }

        if(!empty($allOpenedQuestions)) {
            if($data['qtype'] == 'opened') {
                $countQuestions = DB::select('COUNT("questions.id_question") AS qcount')
                    ->from('questions')->where('closed','=','0')->execute()->as_array();
            } elseif ($data['qtype'] == 'closed') {
                $countQuestions = DB::select('COUNT("questions.id_question") AS qcount')
                    ->from('questions')->where('closed','=','1')->execute()->as_array();
            } elseif ($data['qtype'] == 'any') {
                $countQuestions = DB::select('COUNT("questions.id_question") AS qcount')
                    ->from('questions')->execute()->as_array();
            } elseif ($data['qtype'] == 'category') {
                $countQuestions = DB::select('COUNT("questions_cat.id_questions_cat") AS qcount')
                    ->from('questions_cat')->where('id_subcategory','=',DB::expr($data['cat_id']))->execute()->as_array();
            }
            $result['qcount'] = $countQuestions[0]['qcount'];

            // Выбираем категории вопросов и добавляем их в массив с вопросами
            foreach($allOpenedQuestions as $k => $v) {
                $temp = DB::select('questions_cat.id_question',
                    'questions_cat.id_subcategory',
                    'subcategory.id_subcategory',
                    'subcategory.stitle')
                    ->from('questions_cat')->where('questions_cat.id_question','=', $allOpenedQuestions[$k]['id_question'])
                    ->join('subcategory')->on('subcategory.id_subcategory','=','questions_cat.id_subcategory')->execute()->as_array();
                array_push($allOpenedQuestions[$k],$temp);
            }

            $result['questions'] = $allOpenedQuestions;
            return $result;
        } else {
            return false;
        }

    }

    // Поиск схожих вопросов (поиск по тегам)
    function getSimiliarQuestions($question_id, $subcategory_id) {
        $similiar = DB::select('questions_cat.id_question',
            'questions.title',
            'questions.closed',
            'questions.id_question',
            'questions_cat.id_question',
            'questions_cat.id_subcategory')->
            from('questions')->
            where('closed','=','0')->join('questions_cat')->
            on('questions_cat.id_subcategory','=',DB::expr($subcategory_id))->
            on('questions_cat.id_question','!=',DB::expr($question_id))->
            limit(5)->order_by(DB::expr('RAND()'))->execute()->as_array();
        if(count($similiar) > 0) {
            return $similiar;
        } else {
            $similiar = DB::select('questions.title',
                'questions.closed',
                'questions.id_question')->
                from('questions')->
                where('closed','=','0')->
                limit(5)->order_by(DB::expr('RAND()'))->execute()->as_array();
            return $similiar;
        }
    }

    public function getQuestionById($question_id) {
        $question = DB::select('questions.title',
            'questions.closed',
            'questions.id_question',
            'questions.full')->
            from('questions')->
            where('id_question','=',DB::expr($question_id))->
            execute()->as_array();
        if(count($question) > 0) {
            return $question;
        } else {
            return false;
        }
    }

    public function delQuestionById($question_id) {
        DB::delete('questions')->
            where('id_question','=',DB::expr($question_id))->
            execute();
        $qa = DB::select('id_questions_and_answers',
                'id_answers')->
            from('questions_and_answers')->
            where('id_questions','=',DB::expr($question_id))->
            execute()->as_array();
        DB::delete('questions_and_answers')->
            where('id_questions','=',DB::expr($question_id))->
            execute();
        DB::delete('questions_cat')->
            where('id_question','=',DB::expr($question_id))->
            execute();
        foreach($qa as $k=>$v) {
            DB::delete('vote')->
                where('id_qa','=',DB::expr($qa[$k]['id_questions_and_answers']))->
                execute();
            if($qa[$k]['id_answers'] != null) {
                DB::delete('answers')->
                    where('id_answer','=',DB::expr($qa[$k]['id_answers']))->
                    execute();
            }
        }
        DB::delete('qfavorite')->
            where('id_question','=',DB::expr($question_id))->
            execute();

        return true;
    }
    public function getQuestionAllById($question_id) {
        $result = array();
        $result['question'] = DB::select('questions.title',
            'questions.closed',
            'questions.id_question',
            'questions.full')->
            from('questions')->
            where('id_question','=',DB::expr($question_id))->
            execute()->as_array();
        if(count($result['question']) > 0) {
            $result['answers'] = DB::select('questions_and_answers.id_questions',
                'questions_and_answers.id_answers',
                'answers.id_answer',
                'answers.id_user',
                'answers.answer_text',
                'answers.best',
                'answers.public_date',
                'users.id',
                'users.username')->
                from('questions_and_answers')->
                where('questions_and_answers.id_questions','=',DB::expr($question_id))->
                where('questions_and_answers.id_answers','!=',null)->
                join('answers')->
                on('answers.id_answer','=','questions_and_answers.id_answers')->
                join('users')->
                on('users.id','=','answers.id_user')->
                execute()->as_array();
            if(count($result['answers']) == 0) {
                $result['answers'] = false;
            }
            return $result;
        } else {
            return false;
        }
    }

    // Удаление ответов по id
    public function delAnswersById($answers_id) {
        foreach($answers_id as $k=>$v) {

            $answer = DB::select('answers.id_answer',
                'answers.best')->
                from('answers')->
                where('id_answer','=',DB::expr($answers_id[$k]))->
                execute()->
                as_array();


            DB::delete('answers')->
                where('id_answer','=',DB::expr($answers_id[$k]))->
                execute();

            $qa = DB::select('id_questions_and_answers',
                'id_answers',
                'id_questions')->
                from('questions_and_answers')->
                where('id_answers','=',DB::expr($answers_id[$k]))->
                execute()->as_array();

            if($answer[0]['best']) {
                DB::update('questions')->set(array('closed' => '0'))->
                    where('id_question','=',DB::expr($qa[0]['id_questions']))->execute();
            }

            DB::delete('questions_and_answers')->
                where('id_answers','=',DB::expr($qa[0]['id_questions_and_answers']))->
                execute();

            DB::delete('vote')->
                where('id_qa','=',DB::expr($qa[0]['id_questions_and_answers']))->
                execute();


            DB::update('questions')->set(array('answers_count' => new Database_Expression('answers_count-1')))->
                where('id_question','=',DB::expr($qa[0]['id_questions']))->execute();
        }

        return true;
    }








    // Получение списка вопросов
    public function getQuestionsList($page = null, $limit = null, $order_by = null, $by_subcat = null, $status = null, $by_cat = null) {
        // Осуществляем проверочки всякие
        if(is_null($page) || empty($page)) {
            $page = 1;
        } else {
            $page = (int)addslashes(strip_tags($page));
        }
        if(is_null($limit) || empty($limit)) {
            $limit = 10;
        } else {
            $limit = (int)addslashes(strip_tags($limit));
        }
        if(!is_null($by_cat)) {
            $by_cat = (int)$by_cat;
        }

        switch($status) {
            case 'all': { $status = '0'; $statement = '>='; break; }
            case 'closed': { $status = '1'; $statement = '='; break; }
            case 'opened': { $status = '0'; $statement = '='; break; }
            default:{ $status = '0'; $statement = '>='; break; }
        }
        switch($order_by) {
            case 'rating' : { $order_by = 'rating'; break; }
            case 'answers' : { $order_by = 'answers_count'; break; }
            default: { $order_by = 'public_date'; break; }
        }
        $offset = ($page - 1) * $limit;

        // Если не ищем по категории
        if(is_null($by_cat)) {
            // Если не нужно искать вопросы по определенной подкатегории
            if(is_null($by_subcat)) {
                $count = ORM::factory('ormvioquestion')->where('is_closed',$statement,$status)->count_all();
                $pages = ceil( $count / $limit);
                $questions = ORM::factory('ormvioquestion')->where('is_closed',$statement,$status)
                    ->order_by($order_by,'desc')->limit($limit)->offset($offset)->find_all();

            // Если нужно выбрать все вопросы которые имеют определенную подкатегорию
            } else {
                $subcategory = ORM::factory('ormviosubcategory',$by_subcat);
                $count = $subcategory->questions->where('is_closed',$statement,$status)->limit($limit)
                    ->offset($offset)->order_by($order_by)->count_all();
                $pages = ceil( $count / $limit );
                $questions = $subcategory->questions->where('is_closed',$statement,$status)->limit($limit)
                    ->offset($offset)->order_by($order_by,'desc')->find_all();

            }
        // Если ищем по категории
        } else {
            $category = ORM::factory('ormviocategory',$by_cat);
            $subcategories = $category->subcategories->find_all();
            // Записываем все id подкатегорий
            $subcats[0] = -1;
            if($category->subcategories->count_all() > 0) {
                foreach($subcategories as $subcategory) {
                    array_push($subcats,$subcategory->id_subcategory);
                }
            }
            // Делаем выборку из промежуточной таблицы
            $questsubs = ORM::factory('ormvioquestsub')->where('subcategory_id','IN',$subcats)->find_all();

            // Записываем все id вопросов
            $quests[0] = -1;
            foreach($questsubs as $questsub) {
                array_push($quests,$questsub->question_id);
            }
            $count = ORM::factory('ormvioquestion')->where('id_question','IN',$quests)
                ->where('is_closed',$statement,$status)->limit($limit)
                ->offset($offset)->order_by($order_by)->count_all();
            $questions = ORM::factory('ormvioquestion')->where('id_question','IN',$quests)
                ->where('is_closed',$statement,$status)->limit($limit)
                ->offset($offset)->order_by($order_by,'desc')->find_all();
            $pages = ceil( $count / $limit );


        }
        $result['questions'] = $questions; // орм модель с вопросами
        $result['count'] = $count; // количество записей
        $result['pages'] = $pages; // сколько необходимо страниц что бы отобразить все результаты

        return $result;
    }

    // Выборка списка всех категорий,
    // $kind: 'admin' - возвращает список всех категорий, 'user' - все кроме пользовательских
    public function getCategoryList($kind) {
        if($kind == 'admin') {
            $categories = ORM::factory('ormviocategory')->order_by('id_category','desc')->find_all();
        } else {
            $categories = ORM::factory('ormviocategory')->where('title','!=','usercategory')->find_all();
        }

        return $categories;
    }


    // Выборка одного вопроса по id
    function getQuestion($id) {
        $id = (int)strip_tags($id);
        $question = ORM::factory('ormvioquestion',$id);
        return $question;
    }

    // Выборка избранных вопросов определенного пользователя
    function getFavorites($id_user) {
        $id = (int)$id_user;
        $favorites = ORM::factory('ormviofavorite')->where('user_id','=',$id)->find_all();
        return $favorites;
    }

    // Выборка заданых пользователем вопросов
    function getUserQuestions($id_user) {
        $id = (int)$id_user;
        $questions = ORM::factory('ormvioquestion')->where('user_id','=',$id)->find_all();
        return $questions;
    }

    // Выборка заданых пользователем ответов
    function getUserAnswers($id_user) {
        $id = (int)$id_user;
        $answers = ORM::factory('ormvioanswer')->where('user_id','=',$id)->find_all();
        return $answers;
    }

    // Выборка самых популярных категорий пользователя
    function getUserPopularTags($id_user) {
        $id = (int)$id_user;
        $answers = ORM::factory('ormvioanswer')->where('user_id','=',$id)->find_all();
        $subcats_count = array();

        foreach($answers as $answer) {
            $question = $answer->question;
            $subcategories = $question->subcategories->find_all();
            foreach($subcategories as $subcategory) {
                if(array_key_exists($subcategory->id_subcategory, $subcats_count)) {
                    $subcats_count[$subcategory->id_subcategory] += 1;
                } else {
                    $subcats_count[$subcategory->id_subcategory] = 1;

                }
            }
        }

        arsort($subcats_count);
        $most_popular = array();
        $counter = 0;
        foreach($subcats_count as $k=>$v) {
            array_push($most_popular, $k);
            if($counter > 4) { break; } else {$counter++;}
        }
        if(!empty($most_popular)) {
            $popular = ORM::factory('ormviosubcategory')->where('id_subcategory','IN',$most_popular)->find_all();
        } else {
            $popular = false;
        }

        return $popular;
    }


    // Выборка похожих вопросов
    function getSimilarQuestion($id_question, $count = 5) {
        $id_question = (int)$id_question;
        $question = ORM::factory('ormvioquestion',$id_question);
        $question_sabcats = array(); // Массив id подкатегорий текущего вопроса

        // Выбираем все подкатегории даного вопроса и их id записываем в массив
        $subcategories = $question->subcategories->find_all();
        foreach($subcategories as $subcategory) {
            array_push($question_sabcats, $subcategory->id_subcategory);
        }

        // Проверяем была ли хоть одна подкатегория у вопроса
        if(count($question_sabcats) != 0) {
            $questions_id = array(); // Массив с id вопросов у которых есть подкатегория идентична подактегориям текущего вопроса
            $similar_questions = ORM::factory('ormvioquestsub')->where('question_id','!=',$id_question)->where('subcategory_id','IN',$question_sabcats)->limit($count*$count)->find_all();
            foreach($similar_questions as $similar_question) {
                // Проверяем что бы не было одинаковых id вопросов и записуем id в массив
                if(!in_array($similar_question->question_id,$questions_id)) {
                    array_push($questions_id,$similar_question->question_id);
                }
            }
            // Выборка похожих вопросов
            $similar_questions = ORM::factory('ormvioquestion')->where('id_question','IN',$questions_id)->limit($count)->find_all();

            return $similar_questions;

        // Если же у вопроса не было ни одной подкатегории
        } else {
            return false;
        }
    }

    //
    function getRandomQuestion($count) {
        $count = (int)$count;
        $randoms = ORM::factory('ormvioquestion')->order_by(DB::expr('RAND()'))->limit($count)->find_all();
        return $randoms;
    }

    //  Список типов нарушения для вопроса
    function getQuestionImpropers() {
        $impropers = ORM::factory('ormvioimpropertype')->where('type','=','question')->find_all();
        return $impropers;
    }

    //  Список типов нарушения для ответа
    function getAnswerImpropers() {
        $impropers = ORM::factory('ormvioimpropertype')->where('type','=','answer')->find_all();
        return $impropers;
    }

    // Добавление отзыва о нарушении
    function addImproper($id_improper, $id_item, $id_user, $type) {
        $id_improper = (int)$id_improper;
        $id_item = (int)$id_item;
        $id_user = (int)$id_user;
        $type = (string)$type;
        $improper = ORM::factory('ormvioimproper');
        $improper->impropertype_id = $id_improper;
        $improper->user_id = $id_user;
        if($type == 'question') {
            $improper->question_id = $id_item;
        } elseif ($type == 'answer') {
            $improper->answer_id = $id_item;
        } else {
            return false;
        }
        $saved = $improper->save();
        if($saved->saved()) {
            return true;
        } else {
            return false;
        }
    }



    // Выбор лучшего ответа
    function checkAsBest($id_answer) {
        $id_answer = (int)$id_answer;
        try {
            $auth = Auth::instance();
            if($auth->logged_in()){
               $id_user = $auth->get_user()->id;

                // Переганяем все необходимые данные с поста в более удобочитаемые переменные
               $answer = ORM::factory('ormvioanswer',$id_answer);
                // Если была найдена запись
                if($answer->loaded()) {
                    $question = $answer->question;

                    // Если ответ имеет связаный вопрос
                    if($question->loaded()) {
                        // Проверяем что этот пользователь создал вопрос
                        if($question->user_id == $id_user) {
                            // Проверяем что бы ответ который выбираеться лучшим
                            // не был ответом того пользователя который создал вопрос
                            if($answer->user_id != $id_user) {
                                $bests = $question->answers->where('is_best','=','1')->find_all();
                                // Если уже есть ответы с меткой 'лучший' убираем ее
                                foreach($bests as $best) {
                                    $best->is_best = 0;
                                    $best->save();
                                }
                                // А выбраный вопрос отмечаем как лучший
                                $answer->is_best = 1;
                                $saved_answer = $answer->save();

                                // И вопрос отмечаем как закрытый
                                $question->is_closed = 1;
                                $question->save();

                                $result['saved_answer'] = $saved_answer;
                                $result['info'] = 'everything is ok';
                                $result['message'] = 'Ответ успешно отмечен как лучший';
                                $result['status'] = 'ok';

                            // Если ответ того самого человека который задал вопрос
                            } else {
                                $result['info'] = 'answer this user';
                                $result['message'] = 'Ответ который выбираеться в качестве лучшего это ответ того самого пользователя который задал вопрос';
                                $result['status'] = 'bad';
                            }
                        // Не этот пользователь создал вопрос значит и не ему выбирать кто лучше
                        } else {
                            $result['info'] = 'question is not from this user';
                            $result['message'] = 'Не этот пользователь задал вопрос, так что не ему выбирать лучший ответ';
                            $result['status'] = 'bad';
                        }
                    // Если этот ответ не связан ни с каким вопросом
                    } else {
                        $result['info'] = 'unrelated answer';
                        $result['message'] = 'Ответ который выбираеться в качестве лучшего не связан ни с каким вопросом';
                        $result['status'] = 'bad';
                    }
                // Если в базе данных не существует ответа с присланым идентификатором
                } else {
                    $result['info'] = 'answer does not exist';
                    $result['message'] = 'Такого ответа не существует';
                    $result['status'] = 'bad';
                }
            // Если пользователь не залогинен
            } else {
                $result['info'] = 'not auth';
                $result['message'] = 'Пользовательне авторизирован в системе';
                $result['status'] = 'bad';
            }

        // Если в ходе выполнения возникла непредсказуемая ошибка акуратненько ее обрабатываем
        } catch(Exception $e) {
            $result['info'] = 'try catch triggered';
            $result['message'] = 'Some error - '.$e;
            $result['status'] = 'bad';
        }

        return $result;
    }


    //Добавление вопроса
    // $data ассоциативный массив с параметрами
    // id_user = 1, title = ' Что?', full = 'Когда?', tags = array(), is_closed = 0, rating = 12, time = 12:40, date = 02/10/12
    function addQuestion($data) {
        try {
            if(isset($data['id_user']) && is_numeric($data['id_user'])) {
                $id_user = $data['id_user'];
                $user = ORM::factory('ormuser',$id_user);
                if(count($user) === 0) {
                    $result['status'] = 'bad';
                    $result['info'] = 'user not exist in db';
                    $result['message'] = 'Пользователь с таким id не существует в базе данных';
                    return $result;
                }
            }
            if(isset($data['title']) && !empty($data['title'])) {
                $title = addslashes($data['title']);
            } else {
                $result['status'] = 'bad';
                $result['info'] = 'title is empty';
                $result['message'] = 'Не был передан заголовок вопроса или он оказался пустым';
                return $result;
            }
            $full = '';
            if(isset($data['full']) && !empty($data['full'])) {
                $full = addslashes($data['full']);
            }
            if(isset($data['tags']) && is_array($data['tags']) && (count($data['tags']) > 0)) {
                $subcats = $data['tags'];
            } else {
                $result['status'] = 'bad';
                $result['info'] = 'tags not correct';
                $result['message'] = 'Подкатегории не были переданы либо их количество равно нулю';
                return $result;
            }
            $is_closed = 0;
            if(isset($data['is_closed']) && is_numeric($data['is_closed'])) {
                $is_closed = $data['is_closed'];
            }
            $rating = 0;
            if(isset($data['rating']) && is_numeric($data['rating'])) {
                $rating = $data['rating'];
            }
            if(!isset($data['time']) || !isset($data['date'])) {
                $public_date = false;
            } else {
                $time = $_POST['time'];
                $date = $_POST['date'];
                // Формируем правильный формат даты
                $public_date = date('Y-m-d H:i', strtotime($date .$time));
            }


            // Вызываем орм модель и записываем в нее переданные данные
            $question = ORM::factory('ormvioquestion');
            $question->user_id = $id_user;
            $question->title = $title;
            $question->full = $full;
            if($public_date) {
                $question->public_date = $public_date;
            }
            $question->rating = $rating;
            $question->is_closed = $is_closed;
            $saved_question = $question->save();

            //Выбираем все записи с таблицы подкатегорий для сверки на существование добавленых подкатегорий
            $subcategories = ORM::factory('ormviosubcategory')->find_all();
            // Идем по всем подкатегорийм в базе данных
            foreach($subcategories as $subcategory) {
                // Идем по всем подкатегориям присланным через аякс запрос
                foreach($subcats as $key => $value) {
                    // Если находим совадение, то записываем в таблицу вопросов текущую подкатегорию
                    if($subcategory->title == $value) {
                        // Удаляем из присланных категорий те которые нашлись в БД
                        unset($subcats[$key]);
                        $question->add('subcategories',$subcategory);
                    }
                }
            }

            $result['subcategories'] = array();
            $result['count'] = 0;
            // Оставшиеся новенькие подкатегории записываем в таблицу подкатегорий
            foreach($subcats as $subcat) {
                $subcategories = ORM::factory('ormviosubcategory');
                $subcategories->title = $subcat;
                $saved = $subcategories->save();
                $result['subcategories'][$result['count']]['id_subcategory'] = $saved->id_subcategory;
                $result['subcategories'][$result['count']]['title'] = $saved->title;
                // И добавляем только что записанную подкатегорию к текущему вопросу
                $question->add('subcategories',$saved);
                ++$result['count'];
            }
            $result['info'] = 'question added';
            $result['message'] = 'Вопрос был успешно задан';
            $result['status'] = 'ok';
            $result['question'] = $saved_question;

        } catch (Exception $e) {
            $result['message'] = 'Что то пошло совсем не так - '.$e;
            $result['info'] = 'try except';
            $result['status'] = 'bad';
        }

        return $result;
    }


}

