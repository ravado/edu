<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Модель отвечающая за работу с вопросами
 *
 */
class Model_Mquestions extends Model_Database{


    /*Возвращает ленту новостей*/
    public function askQuestion($questionData){

        $query = DB::select()->from('subcategory')->where('id_subcategory','=','1');
        $result = $query->execute()->as_array();
        return $result;
    }
}

