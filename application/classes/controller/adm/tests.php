<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Контроллер отвечает за главную странцу админки
 * 
 */
class Controller_Adm_Tests extends Controller_Base{

    public $template = "vBase";
    public $data = array();

   public function action_index(){

   }

    public function action_Del() {
        $this->template->title = "Создание теста";
        $this->template->styles = array("stfile/js/redactor/css/redactor.css" => "screen",
            "stfile/css/adm.css" => "screen");

        $this->template->scripts = array('stfile/js/adm.js',
            'stfile/js/redactor/redactor.js');
        $data = array();
        $data['page'] = View::factory('adm/vAdmTestDel', $data);
        $this->template->content = View::factory('adm/vAdm',$data);
    }

   /*Показываем страницу удаление вопроса*/
   public function action_Create(){
       $this->template->title = "Создание теста";
       $this->template->styles = array("stfile/js/redactor/css/redactor.css" => "screen",
                                        "stfile/css/adm.css" => "screen");

       $this->template->scripts = array('stfile/js/adm.js',
                                        'stfile/js/redactor/redactor.js');



       /*$subcategories = ORM::factory('ormtstsubcategory')->find_all();
       foreach($subcategories as $subcategory) {
           echo 'subcategory: ' .$subcategory->title .'<br>';
       }*/
       $data['categories'] = array(array());
       $data['subcategories'] = array(array(array()));
       $categories = ORM::factory('ormtstcategory')->find_all();
       foreach($categories as $key => $category) {
           $data['categories'][$key]['title'] = $category->title;
           $data['categories'][$key]['id'] = $category->id_category;
//           echo 'category:' .$category->title .'<br>';
           foreach($category->subcategories->find_all() as $k => $subcategory) {
               $data['subcategories'][$key][$k]['title'] = $subcategory->title;
               $data['subcategories'][$key][$k]['id'] = $subcategory->id_subcategory;
//               echo 'subcategory: ' .$subcategory->title .'<br>';
           }
       }

//       print_r($data['categories']);
//       print_r($data['subcategories']);

       $data['page'] = View::factory('adm/vAdmTestAdd', $data);
       $this->template->content = View::factory('adm/vAdm',$data);
   }



}