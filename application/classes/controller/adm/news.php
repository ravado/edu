<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Контроллер отвечает за главную странцу админки
 * 
 */
class Controller_Adm_News extends Controller_Base{

    public $template = "vBase";
    public $data = array();

   public function action_index(){

   }

   /*Показываем главную страницу добавления новости*/
   public function action_add(){
       $this->template->title = "Добавить новость";
       $this->template->styles = array("stfile/css/adm.css" => "screen");
       $this->template->scripts = array('stfile/js/adm.js');

       $data['page'] = View::factory('adm/vAdmNewsAdd');
       
       $this->template->content = View::factory('adm/vAdm',$data);
   }


}