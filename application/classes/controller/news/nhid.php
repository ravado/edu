<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Контроллер отвечает за невидимые операции
 */
class Controller_News_Nhid extends Controller{

    public function action_index(){
 
    }

    /*Возвращаем данные профиля пользователя по его имени*/
    public function action_getOneNews(){
        $numb  = Arr::get($_GET,'numb','');
        $ress_numb = Model::factory('Mnews')->getOneNews($numb);
        echo json_encode($ress_numb);
    }

    public function action_getNewsID(){
        $currentID = $_POST['checkNewsID'];
        $newsID = Model::factory('Mnews')->getNewsID($currentID);
        echo json_encode($newsID);
    }

    /*Удаеляем новость по ID*/
    public function action_delNews(){
        $idNews = $_POST['newsToDelete'];
        if(!empty($idNews)){
            $mUser = Model::factory('Mnews')->delNews($idNews);
            echo json_encode($mUser);
        }else{
            return false;
        }
    }
}