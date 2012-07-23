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


        $data['id_question'] = $this->request->param('id');
        $data['categories'] = Model::factory('Mquestions')->getCategoryList('admin');
        $data['question'] = Model::factory('Mquestions')->getQuestion($data['id_question']);

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


    /* Показываем страницу всех вопросов */
    public function action_questions() {
        $this->template->title = "Вопросы";
        $this->template->styles = array("stfile/js/redactor/css/redactor.css" => "screen",
            "stfile/css/adm.css" => "screen");

        $this->template->scripts = array('/stfile/js/adm.js',
            '/stfile/js/redactor/redactor.js');


        if (isset($_GET['page']) || !empty($_GET['page'])) { $data['curr_page'] = $_GET['page']; }
        else { $data['curr_page'] = 1; }

        if (isset($_GET['limit']) || !empty($_GET['limit'])) { $data['limit'] = $_GET['limit']; }
        else { $data['limit'] = null; }

        if (isset($_GET['orderby']) || !empty($_GET['orderby'])) { $data['order_by'] = $_GET['orderby']; }
        else {$data['order_by'] = null; }

        if (isset($_GET['subcat']) || !empty($_GET['subcat'])) { $data['subcat'] = $_GET['subcat']; }
        else { $data['subcat'] = null; }

        if (isset($_GET['status']) || !empty($_GET['status'])) { $data['status'] = $_GET['status']; }
        else { $data['status'] = null; }

        $result = Model::factory('Mquestions')->getQuestionsList($data['curr_page'],$data['limit'],$data['order_by'],$data['subcat'], $data['status']);
        $data['questions'] = $result['questions'];
        $data['pages'] = $result['pages'];
        $data['count'] = $result['count'];

        $data['page'] = View::factory('adm/vAdmVioQuestions',$data);
        $data['pageFlag'] = ': Вопросы';
        $this->template->content = View::factory('adm/vAdm',$data);
    }


}