<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Главный класс-контроллер. От него наследуются все визуальные контроллеры
 */
class Controller_Base extends Controller_Template {

	public $template;

    public function before(){

        /*Смотрим, если пользователь использует старый ИЕ то показываем ему заглушку*/
        if (( stristr($_SERVER['HTTP_USER_AGENT'], 'MSIE 6.0') )||
            (stristr($_SERVER['HTTP_USER_AGENT'], 'MSIE 7.0'))||
            (stristr($_SERVER['HTTP_USER_AGENT'], 'MSIE 8.0'))){
                $this->template = "home/vHomeOldBrowser";
        }

        parent::before();
        if ($this->auto_render){
            $this->template->title = "";
            $this->template->meta_keywords = "";
            $this->template->meta_description = "";
            $this->template->header = "";
            $this->template->content = "";
            $this->template->footer = "";

            $this->template->styles = array();
            $this->template->scripts = array();
        }
    }

    public function after(){

        if ($this->auto_render){
            $styles = array(
                "stfile/css/main.css" => "screen",
                "stfile/css/reset.css" => "screen"
            );

            $scripts = array(
                "stfile/js/placeholder.js",
                "stfile/js/main.js",
                "stfile/js/jquery"
            );

            $this->template->styles = array_reverse(array_merge($this->template->styles, $styles));
            $this->template->scripts = array_reverse(array_merge($this->template->scripts, $scripts));
        }

        parent::after();
    }
}
