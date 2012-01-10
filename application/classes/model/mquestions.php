<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Модель отвечающая за работу с вопросами
 *
 */
class Model_Mquestions extends Model_Database{


    /*Возвращает ленту новостей*/
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

