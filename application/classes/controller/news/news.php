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

        if(!empty($_GET['page'])){
            $ind = $_GET['page'];
            if($ind > $count_news){
                $this->request->redirect('news');
            }else{
                if($ind == 1){
                    $data['prev_flag'] = FALSE;

                    $data['next_flag'] = TRUE;
                    $data['next_page'] = $ind+1;
                }else{
                    $data['prev_flag'] = TRUE;
                    $data['prev_page'] = $ind-1;

                    $data['next_flag'] = TRUE;
                    $data['next_page'] = $ind+1;
                }
            }
            }else{
                $ind = 0;
                $data['prev_flag'] = FALSE;
                $data['next_flag'] = TRUE;
                $data['next_page'] = $ind+2;
            }
            if($ind == round($count_news/5)+1){
                $data['next_flag'] = FALSE;
            }



         $data['news'] = Model::factory('Mnews')->getLastNews($ind);

        

        $this->template->content = View::factory('news/vNewsHome',$data);
	}

    public function action_public(){
        $newsID = $this->request->param('id');

        if(!isset($newsID)){
            $this->request->redirect('');
        }else{
            $data['news'] = Model::factory('Mnews')->getOneNews($newsID);
            $data['flag_full'] = TRUE;
        }

        $this->template->title = "Новости образования";
        $this->template->styles = array("stfile/css/news.css" => "screen");

        $this->template->scripts = array('stfile/js/news.js');

        $this->template->content = View::factory('news/vNewsHome',$data);
    }

}
