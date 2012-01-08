<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Контроллер отвечает за главную странцу админки
 * 
 */
class Controller_Adm_Panel extends Controller_Base{

    public $template = "vBase";
    public $data = array();

   /*Показываем главную страницу админки*/
   public function action_index(){
       $this->template->title = "Панель администрарования";
       $this->template->styles = array("stfile/css/adm.css" => "screen");
       $this->template->scripts = array('stfile/js/adm.js');

       $data['page'] = View::factory('adm/vAdmHome');

       $this->template->content = View::factory('adm/vAdm',$data);
   }


}