<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Модель отвечающая за работу с новостями
 *
 */
class Model_Mnews extends Model_Database{

    /*Общее количество новостей*/
    public function getCountNews(){
        $query = DB::select()->from('news');
        $result = $query->execute()->as_array();
        $count = count($result);
        return $count;
    }

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

    /*Изменение новости в БД*/
    public function  fixNewsToDB($news){
        if((!empty($news['title']))&&(!empty($news['text_pre']))){
            $news['date_public'] = time();

            $query = DB::update('news')->set(array(
                                              'title'=>$news['title'],
                                              'text_pre'=>$news['text_pre'],
                                              'text_full'=>$news['text_full'],
                                              'refer_name'=>$news['refer_name'],
                                              'refer_link'=>$news['refer_link']
                                             ))->where('id','=',$news['id']);
            $query->execute();
        }
    }

    /*Отдает одну запись*/
    public function  getOneNews($newsID){
        $query = DB::select()->from('news')->where('id','=',$newsID);
        $result = $query->execute()->as_array();
        return $result;
    }

    public function  getNewsID($newsID){
        $query = DB::select()->from('news')->where('id','=',$newsID);
        $result = $query->execute()->as_array();
        if (!empty($result)) {
            return $result;
        }
        else {
            return false;
        }
    }

    /*Удаляем новость по ID*/
    public function delNews($idNews){
        $queryCheckID = DB::select()->from('news')->where('id','=',$idNews);
        $resultID = $queryCheckID->execute();
        if (!empty($resultID)) {
            $query = DB::delete('news')->where('id','=',$idNews);
            $result = $query->execute();
            return true;
        }
        else {
            return false;
        }
    }


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

