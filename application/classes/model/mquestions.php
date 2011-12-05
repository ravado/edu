<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Модель отвечающая за работу с вопросами
 *
 */
class Model_Mquestions extends Model_Database{


    /*Возвращает ленту новостей*/
    public function askQuestion($questionData){

        //$query = DB::select()->from('news')->offset($buff)->limit(5)->order_by('date_public','DESC');

        //$result = $query->execute()->as_array();
        if($questionData) {return true;}
        return true;
    }
}

