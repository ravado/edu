<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Модель отвечающая за работу с новостями
 *
 */
class Model_Mnews extends Model_Database{

    /*Добавление новости в БД*/
    public function  addNewsToDB($news){
        if((!empty($news['title']))&&(!empty($news['text_pre']))){
            $news['date_public'] = time();

            $query = DB::insert('news',array(
                                              'date_public',
                                              'title',
                                              'text_pre',
                                              'text_full',
                                              'refer_name',
                                              'refer_link'))->values(array(
                                                                            $news['date_public'],
                                                                            $news['title'],
                                                                            $news['text_pre'],
                                                                            $news['text_full'],
                                                                            $news['refer_name'],
                                                                            $news['refer_link']
                                                                     ));
            $query->execute();
        }
    }

    /*Отдает одну запись*/
    public function  getOneNews($newsID){
        $query = DB::select()->from('news')->where('id','=',$newsID);
        $result = $query->execute()->as_array();
        return $result;
    }

    /*Возвращает ленту новостей*/
    public function getLastNews($ind){
        $query = DB::select()->from('news')->offset($ind)->limit(3);
        $result = $query->execute()->as_array();
        return $result;
    }
}

