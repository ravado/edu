<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Модель отвечающая за работу с новостями
 *
 */
class Model_Mquestions extends Model_Database{


    /*Возвращает ленту новостей*/
    public function getLastNews($ind){
        if($ind == 0){
            $buff = 0;
        }else{
            $buff = $ind*5-5;
        }

        $query = DB::select()->from('news')->offset($buff)->limit(5)->order_by('date_public','DESC');
        $result = $query->execute()->as_array();
        return $result;
    }
}

