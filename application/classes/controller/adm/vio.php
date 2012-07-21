<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Контроллер отвечает за главную странцу админки
 * 
 */
class Controller_Adm_Vio extends Controller_Base{

    public $template = "vBase";
    public $data = array();

   public function action_index(){

   }

   /*Показываем страницу удаление вопроса*/
   public function action_delQuestion(){
       $this->template->title = "Удалить вопрос";
       $this->template->styles = array("stfile/js/redactor/css/redactor.css" => "screen",
                                        "stfile/css/adm.css" => "screen");

       $this->template->scripts = array(
                                        'stfile/js/adm.js',
           'stfile/js/redactor/redactor.js');

       $data['page'] = View::factory('adm/vAdmVioQuestionDel');
       $data['pageFlag'] = ': Добавление новости';
       
       $this->template->content = View::factory('adm/vAdm',$data);
   }

    /*Показываем страницу удаления ответов*/
    public function action_delAnswer(){
        $this->template->title = "Удалить ответ";
        $this->template->styles = array("stfile/js/redactor/css/redactor.css" => "screen",
            "stfile/css/adm.css" => "screen");

        $this->template->scripts = array(
            'stfile/js/adm.js',
            'stfile/js/redactor/redactor.js');

        $data['page'] = View::factory('adm/vAdmVioAnswerDel');
        $data['pageFlag'] = ': Добавление новости';

        $this->template->content = View::factory('adm/vAdm',$data);
    }

    /* Показываем страницу создания вопросов */
    public function action_addQuestion() {
        $this->template->title = "Добавить вопрос";
        $this->template->styles = array("stfile/js/redactor/css/redactor.css" => "screen",
            "stfile/css/adm.css" => "screen");

        $this->template->scripts = array(
            '/stfile/js/adm.js',
            '/stfile/js/redactor/redactor.js',
            '/stfile/js/bootstrap-timepicker.js',
            '/stfile/js/bootstrap-datepicker.js');

        $data['categories'] = Model::factory('Mquestions')->getCategoryList('admin');
        $data['page'] = View::factory('adm/vAdmVioQuestionAdd',$data);
        $data['pageFlag'] = ': Добавление вопроса';
        $this->template->content = View::factory('adm/vAdm',$data);
    }

    /* Показываем страницу правки вопроса */
    public function action_fixQuestion() {
        $this->template->title = "Править вопрос";
        $this->template->styles = array("stfile/js/redactor/css/redactor.css" => "screen",
            "stfile/css/adm.css" => "screen");

        $this->template->scripts = array(
            '/stfile/js/adm.js',
            '/stfile/js/redactor/redactor.js',
            '/stfile/js/bootstrap-timepicker.js',
            '/stfile/js/bootstrap-datepicker.js');

        $data['categories'] = Model::factory('Mquestions')->getCategoryList('admin');
        $data['page'] = View::factory('adm/vAdmVioQuestionFix',$data);
        $data['pageFlag'] = ': Добавление вопроса';
        $this->template->content = View::factory('adm/vAdm',$data);
    }

    /* Показываем страницу категорий вопросов */
    public function action_category() {
        $this->template->title = "Категории вопросов";
        $this->template->styles = array("stfile/js/redactor/css/redactor.css" => "screen",
            "stfile/css/adm.css" => "screen");

        $this->template->scripts = array('/stfile/js/adm.js',
            '/stfile/js/redactor/redactor.js');

        $data['categories'] = Model::factory('Mquestions')->getCategoryList('admin');
        $data['page'] = View::factory('adm/vAdmVioCategory',$data);
        $data['pageFlag'] = ': Управление категориями вопросов';
        $this->template->content = View::factory('adm/vAdm',$data);
    }

    /* Показываем страницу вопросов */
    public function action_questions() {
        $this->template->title = "Вопросы";
        $this->template->styles = array("stfile/js/redactor/css/redactor.css" => "screen",
            "stfile/css/adm.css" => "screen");

        $this->template->scripts = array('/stfile/js/adm.js',
            '/stfile/js/redactor/redactor.js');

        $data['questions'] = Model::factory('Mquestions')->getQuestionsList();
        $data['page'] = View::factory('adm/vAdmVioQuestions',$data);
        $data['pageFlag'] = ': Вопросы';
        $this->template->content = View::factory('adm/vAdm',$data);
    }


}