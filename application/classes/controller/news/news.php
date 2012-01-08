<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Контроллер новостного раздела
 */
class Controller_News_News extends Controller_Base {

    public $template = "vBase";
    public $data = array();

    /*Показываем главную страницу сайта*/
	public function action_index(){

		$this->template->title = "Новости образования";
        $this->template->styles = array("stfile/css/news.css" => "screen",
                                        "stfile/js/jQuery UI/css/redmond/jqueryui.css" => "screen");
        $this->template->scripts = array('stfile/js/news.js',
                                         'stfile/js/jQuery UI/js/jqueryui.js',
                                         'stfile/js/jQuery UI/js/jquery.ui.datepicker-ru.js');

        $count_news = Model::factory('Mnews')->getCountNews();

        $data['prev_flag']= FALSE;
        $data['next_flag'] = TRUE;
        $data['next_page'] = 2;

        $data['news'] = Model::factory('Mnews')->getLastNews(0);

        

        $this->template->content = View::factory('news/vNewsHome',$data);
	}

    public function action_page(){
        $page_number = $this->request->param('id');

        if(!isset($page_number)){
            $this->request->redirect('');
        }else{
            $count_news = Model::factory('Mnews')->getCountNews();
            if(($page_number > ceil($count_news/5)) || ($page_number < 0)){
            $this->request->redirect('');
            }else{
                $this->template->title = "Бездна записей";

                $data['news'] = Model::factory('Mnews')->getLastNews($page_number);


                if($page_number == 1){
                    $data['prev_flag']= FALSE;
                    $data['next_flag']= TRUE;
                        $data['next_page'] = ++$page_number;
                }
                elseif($page_number == ceil($count_news/5)){
                    $data['next_flag']= FALSE;
                    $data['prev_flag']= TRUE;
                        $data['prev_page'] = --$page_number;
                }else{
                    $data['next_flag'] = TRUE;
                        $data['next_page'] = ++$page_number;
                    $data['prev_flag']= TRUE;
                        $data['prev_page'] = $page_number-2;
                }
                $this->template->title = "Новости образования";
                $this->template->styles = array("stfile/css/news.css" => "screen",
                                        "stfile/js/jQuery UI/css/redmond/jqueryui.css" => "screen");
                $this->template->scripts = array('stfile/js/news.js',
                                         'stfile/js/jQuery UI/js/jqueryui.js',
                                         'stfile/js/jQuery UI/js/jquery.ui.datepicker-ru.js');
                
                $this->template->content = View::factory('news/vNewsHome',$data);



            }
        }
    }

    public function action_public(){
        $newsID = $this->request->param('id');

        if(!isset($newsID)){
            $this->request->redirect('');
        }else{
            $data['news'] = Model::factory('Mnews')->getOneNews($newsID);
            $data['one'] = TRUE;
        }

        $this->template->title = "Новости образования";
        $this->template->styles = array("stfile/css/news.css" => "screen",
                                        "stfile/js/jQuery UI/css/redmond/jqueryui.css" => "screen");
                $this->template->scripts = array('stfile/js/news.js',
                                         'stfile/js/jQuery UI/js/jqueryui.js',
                                         'stfile/js/jQuery UI/js/jquery.ui.datepicker-ru.js');

        $this->template->content = View::factory('news/vNewsHome',$data);
    }

}
