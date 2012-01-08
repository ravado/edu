<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Контроллер активации пользователя
 *
 */
class Controller_User_Activation extends Controller_Base {

    public $template = "vBase";
    public $data = array();


	public function action_index(){

	}

    /*Делаем попытку активировать пользователя*/
    public function action_i(){
        $userKey = $this->request->param('id');
		$this->template->title = "Регистрация пользователя";
        $this->template->styles = array("stfile/css/register.css" => "screen");

        $userActiviti = Model::factory('Muser')->activation($userKey);
        if($userActiviti == FALSE){
            $this->request->redirect('');
        }

        $this->template->content = View::factory('user/vUserRegActivation');
    }


}
