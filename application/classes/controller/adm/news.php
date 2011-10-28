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

   /*Показываем страницу добавления новости*/
   public function action_add(){
       $this->template->title = "Добавить новость";
       $this->template->styles = array(
                                        "stfile/css/adm.css" => "screen",
                                        "stfile/js/redactor/css/redactor.css" => "screen");

       $this->template->scripts = array(
                                        'stfile/js/redactor/redactor.js',
                                        'stfile/js/adm.js');

       $data['page'] = View::factory('adm/vAdmNewsAdd');
       $data['pageFlag'] = ': Добавление новости';
       
       $this->template->content = View::factory('adm/vAdm',$data);
   }

    /*Добавляем новость в БД*/
   public function action_submit(){
       $this->template->title = "Добавить новость";
       $this->template->styles = array(
                                        "stfile/css/adm.css" => "screen",
                                        "stfile/js/redactor/css/redactor.css" => "screen");

       $this->template->scripts = array(
                                        'stfile/js/adm.js',
                                        'stfile/js/redactor/redactor.js');
      if(!empty($_POST)){
                $news['title'] = Arr::get($_POST,'title','');
                $news['text_pre'] = Arr::get($_POST,'text_pre','');
                $news['text_full'] = Arr::get($_POST,'text_full','');
                $news['refer_name'] = Arr::get($_POST,'refer_name','');
                $news['refer_link'] = Arr::get($_POST,'refer_link','');
          $addNews = Model::factory('Mnews')->addNewsToDB($news);
      }
      $this->template->content = 'Новость добавлена';

   }

   /*Изменяем новость в БД*/
   public function action_fixNews(){
       $this->template->title = "Изменить новость";
       $this->template->styles = array(
                                        "stfile/css/adm.css" => "screen",
                                        "stfile/js/redactor/css/redactor.css" => "screen");

       $this->template->scripts = array(
                                        'stfile/js/adm.js',
                                        'stfile/js/redactor/redactor.js');
      if(!empty($_POST)){
                $news['id'] = Arr::get($_POST,'id','');
                $news['title'] = Arr::get($_POST,'title','');
                $news['text_pre'] = Arr::get($_POST,'text_pre','');
                $news['text_full'] = Arr::get($_POST,'text_full','');
                $news['refer_name'] = Arr::get($_POST,'refer_name','');
                $news['refer_link'] = Arr::get($_POST,'refer_link','');
          $addNews = Model::factory('Mnews')->fixNewsToDB($news);
      }
      $this->template->content = 'Новость изменена';

   }

   /*Показываем страницу удаления новости*/
   public function action_del(){
       $this->template->title = "Удалить новость";
       $this->template->styles = array(
                                        "stfile/css/adm.css" => "screen",
                                        "stfile/js/redactor/css/redactor.css" => "screen");

       $this->template->scripts = array(
                                        'stfile/js/adm.js',
                                        'stfile/js/redactor/redactor.js');

       $data['page'] = View::factory('adm/vAdmNewsDel');
       $data['pageFlag'] = ': Удаление новости';

       $this->template->content = View::factory('adm/vAdm',$data);
   }

    /*Показываем страницу удаления новости*/
   public function action_fix(){
       $this->template->title = "Править новость";
       $this->template->styles = array(
                                        "stfile/css/adm.css" => "screen",
                                        "stfile/js/redactor/css/redactor.css" => "screen");

       $this->template->scripts = array(
                                        'stfile/js/adm.js',
                                        'stfile/js/redactor/redactor.js');

       $data['page'] = View::factory('adm/vAdmNewsFix');
       $data['pageFlag'] = ': Правка новости';

       $this->template->content = View::factory('adm/vAdm',$data);
   }
        
}