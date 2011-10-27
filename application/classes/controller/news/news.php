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
        $this->template->styles = array("stfile/css/news.css" => "screen");
        $this->template->scripts = array('stfile/js/news.js');

        if(!empty($_GET['page'])){
            $ind = $_GET['page'];
        }else{
            $ind = 0;
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
