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

}