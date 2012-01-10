<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Модель отвечающая за работу с вопросами
 *
 */
class Model_Mquestions extends Model_Database{

    // Выводим на главную ВиО данные из бд
    public  function mainQA(){
        $result = null;
        $last = DB::select()->from('questions')->limit(20)->order_by('public_date','DESC');
        if ($result_last = $last->execute()->as_array()) {
            $result['last'] = $result_last;
        } else {
            $result['last'] = null;
        }

        $popular = DB::select()->from('questions')->limit(7)->order_by('answers_count','DESC');
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
        //$qTag = array("some1", "some2", "some3");
        //$qTags = implode(",",$qTag);
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


}

