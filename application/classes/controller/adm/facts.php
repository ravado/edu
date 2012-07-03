<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Adm_Facts extends Controller_Base{

    public $template = "vBase";
    public $data = array();

   public function action_index(){

   }

   public function action_Add(){
       $this->template->title = "Добавление фактов";
       $this->template->styles = array("stfile/css/adm.css" => "screen");
       $this->template->scripts = array("stfile/js/adm.js");

       $data['page'] = View::factory('adm/vAdmFactsAdd');
       
       $this->template->content = View::factory('adm/vAdm',$data);
   }

}