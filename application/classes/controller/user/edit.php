<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Контроллер редактирования профиля пользователя
 *
 */
class Controller_User_Edit extends Controller_Base {

    public $template = "vBase";
    public $data = array();

    /*Форма редактирования профиля пользователя*/
	public function action_index(){
        $auth = Auth::instance();
        if($auth->logged_in()){
            $userID = $auth->get_user();
            $data['userInfo'] = Model::factory('Muser')->getUserProfile($userID);

            $this->template->styles = array("stfile/css/register.css" => "screen");
            $this->template->scripts = array('stfile/js/editprofile.js');
            $this->template->content = View::factory('user/vUserEditProfile',$data);
        }else{
            $this->request->redirect('');
        }
	}

}
