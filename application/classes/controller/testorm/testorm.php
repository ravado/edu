<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Testorm_Testorm extends Controller_Base {

    public $template = "vBase";
    public $data = array();

    /*Показываем главную страницу ВиО */
	public function action_index(){

        $data['test'][0] = 'Кем бы вы хотели стать';
        $data['test'][0][0] = 'Геологом';
        $data['test'][0][1] = 'Бухгалтером';
        $data['test'][0][2] = 'Инженером';
        $data['test'][1] = 'Какое у Вас настроение';
        $data['test'][1][0] = 'Плохое';
        $data['test'][1][1] = 'Хорошее';

        // Типо пришедшие данные для таблицы тестов
        $data['test_title'] = 'Тест по кибернетике';
        $data['kind'] = 'ЗНО';
        $data['category'] = 'Философия';
        $data['password'] = '12345';
        $data['timer'] = '12';
        $data['username'] = 'ravado';
        $data['needball'] = '1';
        $data['rating'] = '125';
        $data['randomize'] = '1';


        $success = Model::factory('Mtests')->addNewTest($data);
        if($success) {
            echo 'everithing is okAy';
        } else {
            echo 'something is went wrong';
        }

//        $tests = ORM::factory('test')->find_all();
//        foreach ($tests as $test) {
//            echo 'Название теста - ' .$test->title .'<br>';
//            echo 'Категория теста - ' .$test->category->title .'<br>';
//            echo 'Тип теста - ' .$test->kind->title .'<br>';
//        }
//        $category = ORM::factory('tstcategory',2);
//        foreach ($category->tests->find_all() as $test) {
//            echo 'Название теста - ' .$test->title .'<br>';
//            echo 'Категория - ' .$category->title .'<br>';
//        }
	}


    public function action_test() {
        $products = ORM::factory('product')->find_all();

        foreach ($products as $product) {
            echo 'product title: ' .$product->title .'<br>';

            echo 'category: ';
            $categories = $product->categories->find_all();
            foreach ($categories as $category) {
                echo $category->title .' ';
            }
            echo '<br>';
        }



//        $data['products'] = $p;
//        $this->template->content = View::factory('testorm/vTestOrm',$data);
    }
}
