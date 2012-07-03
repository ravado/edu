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

    /*Загружаем картинки для новостей*/
    public function action_loadimages(){
        // директория хранения файлов
        $dir = 'uploads/imagesnews/';

        $_FILES['file']['type'] = strtolower($_FILES['file']['type']);

        if ($_FILES['file']['type'] == 'image/png'
        || $_FILES['file']['type'] == 'image/jpg'
        || $_FILES['file']['type'] == 'image/gif'
        || $_FILES['file']['type'] == 'image/jpeg'
        || $_FILES['file']['type'] == 'image/pjpeg')
        {
            // даем файлу загадочное имя и копируем
            copy($_FILES['file']['tmp_name'], $dir.md5(date('YmdHis')).'.jpg');

            echo '<img src="/uploads/imagesnews/'.md5(date('YmdHis')).'.jpg" />';
        }
    }




}