<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Контроллер отвечает за невидимые операции
 */
class Controller_Adm_Ahid extends Controller{

    public function action_index(){
 
    }

    //
    public function action_rusToLat($string) {
        $converter = array(
            'а' => 'a',   'б' => 'b',   'в' => 'v',
            'г' => 'g',   'д' => 'd',   'е' => 'e',
            'ё' => 'e',   'ж' => 'zh',  'з' => 'z',
            'и' => 'i',   'й' => 'y',   'к' => 'k',
            'л' => 'l',   'м' => 'm',   'н' => 'n',
            'о' => 'o',   'п' => 'p',   'р' => 'r',
            'с' => 's',   'т' => 't',   'у' => 'u',
            'ф' => 'f',   'х' => 'h',   'ц' => 'c',
            'ч' => 'ch',  'ш' => 'sh',  'щ' => 'sch',
            'ь' => '\'',  'ы' => 'y',   'ъ' => '\'',
            'э' => 'e',   'ю' => 'yu',  'я' => 'ya',

            'А' => 'A',   'Б' => 'B',   'В' => 'V',
            'Г' => 'G',   'Д' => 'D',   'Е' => 'E',
            'Ё' => 'E',   'Ж' => 'Zh',  'З' => 'Z',
            'И' => 'I',   'Й' => 'Y',   'К' => 'K',
            'Л' => 'L',   'М' => 'M',   'Н' => 'N',
            'О' => 'O',   'П' => 'P',   'Р' => 'R',
            'С' => 'S',   'Т' => 'T',   'У' => 'U',
            'Ф' => 'F',   'Х' => 'H',   'Ц' => 'C',
            'Ч' => 'Ch',  'Ш' => 'Sh',  'Щ' => 'Sch',
            'Ь' => '\'',  'Ы' => 'Y',   'Ъ' => '\'',
            'Э' => 'E',   'Ю' => 'Yu',  'Я' => 'Ya',
        );
        $str = strtr($string, $converter);
        // в нижний регистр
        $str = strtolower($str);
        // заменям все ненужное нам на "-"
        $str = preg_replace('~[^-a-z0-9_]+~u', '-', $str);
        // удаляем начальные и конечные '-'
        $str = trim($str, "-");

        return $str;
    }









    /*Возвращаем данные профиля пользователя по его имени*/
    public function action_getUserInfo(){
        $userName = Arr::get($_POST,'userToDelete','');
        //if(!empty($userName)){
           $mUser = Model::factory('Muser')->getUserInfo($userName);
           echo json_encode($mUser);
    }

     /*Удаеляем пользователя по имени*/
    public function action_delUser(){
        $userName = Arr::get($_POST,'userToDelete','');
        if(!empty($userName)){
            $mUser = Model::factory('Muser')->delUser($userName);
            echo json_encode($mUser);
        }else{
            return FALSE;
        }
    }

    public function action_delTest(){
        $id_test = Arr::get($_POST,'test_id','');
        $test = ORM::factory('ormtest', $id_test);
        $test->delete();
        echo json_encode('ok');
    }

    /*Изменяем профиль пользователя*/
   public function action_fixUser(){
       if(!empty($_POST)){
            $userData['password'] = Arr::get($_POST,'password','');
            $userData['email'] = Arr::get($_POST,'email','');
            $userData['sex'] = Arr::get($_POST,'sex','');
            $userData['first_name'] = Arr::get($_POST,'firstName','');
            $userData['last_name'] = Arr::get($_POST,'lastName','');
            $userData['id'] = Arr::get($_POST,'id','');
            $userData['role'] = Arr::get($_POST,'slUsrRole','');

            $result = Model::factory('Muser')->admEditUser($userData);
            echo json_encode($result);
        }
   }

    public function  action_getQuestionById() {
        if(!empty($_POST)) {
            $questionId = Arr::get($_POST,'question_id','');
            $result = Model::factory('Mquestions')->getQuestionById($questionId);
        } else {
            $result = false;
        }

        echo json_encode($result);
    }

    public function  action_getQuestionAllById() {
        if(!empty($_POST)) {
            $questionId = Arr::get($_POST,'question_id','');
            $result = Model::factory('Mquestions')->getQuestionAllById($questionId);
        } else {
            $result = false;
        }

        echo json_encode($result);
    }

    public function  action_delQuestionById() {
        if(!empty($_POST)) {
            $questionId = Arr::get($_POST,'question_id','');
            $result = Model::factory('Mquestions')->delQuestionById($questionId);
        } else {
            $result = false;
        }

        echo json_encode($result);
    }

    public function action_delAnswersById() {
        if(!empty($_POST)) {
            $temp = Arr::get($_POST,'answers_id','');
            $answers_id = explode(',', $temp);
            $result = Model::factory('Mquestions')->delAnswersById($answers_id);
        } else {
            $result = false;
        }

        echo json_encode($result);
    }
// Добавление фактов
    public function action_addFact() {

        if(!empty($_POST)) {
            $day = $_POST['fctDay'];
            $month = $_POST['fctMonth'];
            $date = (string)$day .(string)$month;
            $facts = $_POST['facts'];
            $kind = $_POST['fctKind'];
            switch ($kind) {
                case 'event': {
                    foreach($facts as $fact) {
                        DB::insert('event', array('event_item', 'day'))->
                            values(array($fact, $date))->execute();
                    }
                    break;
                }
                case 'born': {
                    foreach($facts as $fact) {
                        DB::insert('born', array('born_item', 'day'))->
                            values(array($fact, $date))->execute();
                    }
                    break;
                }
                case 'folk': {
                    foreach($facts as $fact) {
                        DB::insert('folk', array('folk_item', 'day'))->
                            values(array($fact, $date))->execute();
                    }
                    break;
                }
            }
            echo json_encode('write successful');
        } else {
            echo json_encode('post was empty :(');
        }
    }

// ================================== тесты ===============================================//
    public function action_createTest() {
        if(!empty($_POST)) {
            $auth = Auth::instance();
            $data['user_id'] = $auth->get_user()->id;
            $data['title'] = $_POST['tst_title'];
            $data['subcategory_id'] = $_POST['subcategory'];
            $data['output_result'] = $_POST['output_result'];
            $data['randomize'] = $_POST['randomize'];
            $data['password'] = $_POST['password'];
            $data['timer'] = $_POST['timer'];
            if(isset($_POST['need_del'])) {
                $data['need_del'] = true;
            } else { $data['need_del'] = false; }
            $data['rating'] = $_POST['rating'];
            $data['complete_count'] = $_POST['complete_count'];
            $result = Model::factory('Mtests')->createTest($data);
            if($result) {
                echo json_encode($result);
            } else {
                echo json_encode('everithing is bad');
            }
        } else {
            echo json_encode('post is empty');
        }

    }


    // Добавление вопроса и вариантов ответа для теста
    public function action_tstAddQuestVar() {

        // Возвращаемое сообщение и статус выполнения
        $json_return['message'] = '';
        $json_return['status'] = '';

        // Если данные пришли
        if(!empty($_POST)) {

            // Записываем в массив с первым индексом идентификатора теста данные о 1 вопросе
            $question[$_POST['tst_id']][0] = $_POST['question'];
            $result = Model::factory('Mtests')->addQuestion($question);

            // Если добавление вопроса прошло успешно...
            if ($result['status'] == 'ok') {
                $question_id = $result['question_id'];
                // Записываем в массив с индексом id вопроса добавленого в базу данные о вариантах ответа
                $some[$question_id] = $_POST['tst_variant'];
                $result = Model::factory('Mtests')->addVariants($some);

                // Если варианты были успешно записаны...
                if($result['status'] == 'ok') {

                    // То получаем 1 вопрос и варианты ответа на него, и возвращаем результаты клиенту
                    $questions_variants = Model::factory('Mtests')->getQuestionVar($question_id);
                    echo json_encode($questions_variants);
                } else {
                    echo json_encode($result);
                }

            } else {
                echo json_encode($result);
            }

        } else {
            $json_return['message'] = 'post is empty';
            $json_return['status'] = 'bad';
            echo json_encode($json_return);
        }
    }
// ----------------------------------------------- тесты ------------------------------------------------------------ //

// ============================================ Вопросы и ответы ==================================================== //

    // Добавление нового вопроса
    public function action_addQuestion() {
        if(!empty($_POST)) {
            try {
                // Используем модуль авторизации для того что бы узнать id текущего пользователя
                $auth = Auth::instance();
                $user_id = $auth->get_user()->id;
                $title = $_POST['question_title'];
                $full = $_POST['question_full'];
                $subcats = $_POST['tags'];
                $is_closed = $_POST['is_closed'];
                $rating = $_POST['rating'];
                $time = $_POST['time'];
                $date = $_POST['date'];
                // Формируем правильный формат даты
                $public_date = date('Y-m-d H:i', strtotime($date .$time));
                // Вызываем орм модель и записываем в нее переданные данные
                $question = ORM::factory('ormvioquestion');
                $question->user_id = $user_id;
                $question->title = $title;
                $question->full = $full;
                $question->public_date = $public_date;
                $question->rating = $rating;
                $question->is_closed = $is_closed;
                $question->save();

                //Выбираем все записи с таблицы подкатегорий для сверки на существование добавленых подкатегорий
                $subcategories = ORM::factory('ormviosubcategory')->find_all();
                // Идем по всем подкатегорийм в базе данных
                foreach($subcategories as $subcategory) {
                    // Идем по всем подкатегориям присланным через аякс запрос
                    foreach($subcats as $key => $value) {
                        // Если находим совадение, то записываем в таблицу вопросов текущую подкатегорию
                        if($subcategory->title == $value) {
                            // Удаляем из присланных категорий те которые нашлись в БД
                            unset($subcats[$key]);
                            $question->add('subcategories',$subcategory);
                        }
                    }
                }

                $result['subcategories'] = array();
                $result['count'] = 0;
                // Оставшиеся новенькие подкатегории записываем в таблицу подкатегорий
                foreach($subcats as $subcat) {
                    $subcategories = ORM::factory('ormviosubcategory');
                    $subcategories->title = $subcat;
                    $saved = $subcategories->save();
                    $result['subcategories'][$result['count']]['id_subcategory'] = $saved->id_subcategory;
                    $result['subcategories'][$result['count']]['title'] = $saved->title;
                    // И добавляем только что записанную подкатегорию к текущему вопросу
                    $question->add('subcategories',$saved);
                    ++$result['count'];
                }
                $result['message'] = 'everithing is ok';
                $result['status'] = 'ok';

            } catch (Exception $e) {
                $result['message'] = 'Something went wrong - '.$e;
                $result['status'] = 'bad';
            }
        } else {
            $result['message'] = 'POST is empty';
            $result['status'] = 'bad';
        }

        echo json_encode($result);
    }

    // Получение информации о вопросе по его id
    function action_getQuestion() {
        if(isset($_POST['id_question'])) {
            $id_question = intval($_POST['id_question']);
            try {
                $question = ORM::factory('ormvioquestion')->where('id_question','=',$id_question)->find();
                if($question->loaded()) {
                    $result['id_question'] = $question->id_question;
                    $result['title'] = $question->title;
                    $result['full'] = $question->full;
                    $result['user'] = $question->user->username;
                    $result['id_user'] = $question->user->id;
                    $result['public_date'] = explode(" ", $question->public_date);
                    $result['time'] = $result['public_date'][1];
                    $result['date'] = $result['public_date'][0];
                    $result['rating'] = $question->rating;
                    $result['is_closed'] = $question->is_closed;
                    $result['answers_count'] = $question->answers_count;
                    $result['message'] = 'everithing is ok';
                    $result['status'] = 'ok';
                    $subcategories = $question->subcategories->find_all();
                    $result['count'] = 0;
                    foreach ($subcategories as $k => $subcategory) {
                        $result['subcategories'][$k]['id_subcategory'] = $subcategory->id_subcategory;
                        $result['subcategories'][$k]['title'] = $subcategory->title;
                        ++$result['count'];
                    }
                } else {
                    $result['message'] = 'orm object not loaded, maybe there is no such record';
                    $result['status'] = 'bad';
                }
            } catch (Exception $e) {
                $result['message'] = 'something went wrong - '.$e;
                $result['status'] = 'bad';
            }
        } else {
            $result['message'] = 'POST was empty';
            $result['status'] = 'bad';
        }
        echo json_encode($result);
    }


    // Изменение вопроса
    public function action_updateQuestion() {
        if(!empty($_POST)) {
            try {
                // Переганяем все необходимые данные с поста в более удобочитаемые переменные
                $id_question = $_POST['id_question'];
                $title = $_POST['question_title'];
                $full = $_POST['question_full'];
                $subcats = $_POST['tags'];
                $is_closed = $_POST['is_closed'];
                $rating = $_POST['rating'];
                $time = $_POST['time'];
                $date = $_POST['date'];
                $public_date = date('Y-m-d H:i', strtotime($date .$time));

                // Вызываем орм модель и записываем в нее новые данные
                $question = ORM::factory('ormvioquestion',$id_question);
                $question->title = $title;
                $question->full = $full;
                $question->public_date = $public_date;
                $question->rating = $rating;
                $question->is_closed = $is_closed;
                $question->save();

                // Находим все подкатегории текущего вопроса и удаляем все его подкатегории с промежуточной таблицы
                $subcategories = $question->subcategories->find_all();
                foreach($subcategories as $subcategory) {
                    $question->remove('subcategories',$subcategory);
                }

                //Выбираем все записи с таблицы подкатегорий для сверки на существование добавленых подкатегорий
                $subcategories = ORM::factory('ormviosubcategory')->find_all();
                // Идем по всем подкатегорийм в базе данных
                foreach($subcategories as $subcategory) {
                    // Идем по всем подкатегориям присланным через аякс запрос
                    foreach($subcats as $key => $value) {
                        // Если находим совадение, то записываем в таблицу вопросов текущую подкатегорию
                        if($subcategory->title == $value) {
                            // Удаляем из присланных категорий те которые нашлись в БД
                            unset($subcats[$key]);
                            $question->add('subcategories',$subcategory);
                        }
                    }
                }

                $result['subcategories'] = array();
                $result['count'] = 0;
                // Оставшиеся новенькие подкатегории записываем в таблицу подкатегорий
                foreach($subcats as $subcat) {
                    $subcategories = ORM::factory('ormviosubcategory');
                    $subcategories->title = $subcat;
                    $saved = $subcategories->save();
                    $result['subcategories'][$result['count']]['id_subcategory'] = $saved->id_subcategory;
                    $result['subcategories'][$result['count']]['title'] = $saved->title;
                    // И добавляем только что записанную подкатегорию к текущему вопросу
                    $question->add('subcategories',$saved);
                    ++$result['count'];
                }
                $result['message'] = 'everithing is ok';
                $result['status'] = 'ok';

            // Если в ходе выполнения возникла непредсказуемая ошибка акуратненько ее обрабатываем
            } catch(Exception $e) {
                $result['message'] = 'Some error - '.$e;
                $result['status'] = 'bad';
            }

        // Если  POST пришел пустым возвращаем сообщение об этом
        } else {
            $result['message'] = 'POST is empty';
            $result['status'] = 'bad';
        }

        echo json_encode($result);
    }


    // Добавление категории либо подкатегории
    public function action_addCategory() {
        if(!empty($_POST)) {
            try {
                // Переганяем все необходимые данные с поста в более удобочитаемые переменные
                $title = $_POST['title'];
                $parent_category = $_POST['parent_category'];

                // Если добавляем категорию
                if($parent_category == 'none') {
                    $category = ORM::factory('ormviocategory');
                    $category->title = $title;
                    $saved = $category->save();
                    $result['id_category'] = $saved->id_category;
                    $result['title'] = $saved->title;
                    $result['is_category'] = true;

                // Если добавляем подкатегорию
                } else {
                    $category_id = intval($parent_category);
                    $subcategory = ORM::factory('ormviosubcategory');
                    $subcategory->title = $title;
                    $subcategory->category_id = $category_id;
                    $saved = $subcategory->save();
                    $result['id_parent_cat'] = $category_id;
                    $result['id_category'] = $saved->id_subcategory;
                    $result['title'] = $saved->title;
                    $result['is_category'] = false;
                }

                $result['message'] = 'everithing is ok';
                $result['status'] = 'ok';

                // Если в ходе выполнения возникла непредсказуемая ошибка акуратненько ее обрабатываем
            } catch(Exception $e) {
                $result['message'] = 'Some error - '.$e;
                $result['status'] = 'bad';
            }

            // Если  POST пришел пустым возвращаем сообщение об этом
        } else {
            $result['message'] = 'POST is empty';
            $result['status'] = 'bad';
        }

        echo json_encode($result);
    }


    // Изменение подкатегории
    public function action_updateCategory() {
        if(!empty($_POST)) {
            try {
                // Переганяем все необходимые данные с поста в более удобочитаемые переменные
                $title = $_POST['title'];
                $is_category = $_POST['is_parent'];
                $category_id = intval($_POST['id_category']);
                $parent_cat_id = intval($_POST['parent_cat_id']);
                if($is_category === 'yes') {
//                    echo 'cat change';
                    $category = ORM::factory('ormviocategory',$category_id);
                    $category->title = $title;
                    $saved = $category->save();
                    $result['id_category'] = $saved->id_category;
                    $result['title'] = $saved->title;
                    $result['is_category'] = true;
                } else {
//                    echo 'subcat change';
                    $subcategory = ORM::factory('ormviosubcategory',$category_id);
                    $subcategory->title = $title;
                    $saved = $subcategory->save();
                    $result['id_category'] = $saved->id_subcategory;
                    $result['title'] = $saved->title;
                    $result['is_category'] = false;
                }

                $result['message'] = 'everithing is ok';
                $result['status'] = 'ok';

                // Если в ходе выполнения возникла непредсказуемая ошибка акуратненько ее обрабатываем
            } catch(Exception $e) {
                $result['message'] = 'Some error - '.$e;
                $result['status'] = 'bad';
            }

            // Если  POST пришел пустым возвращаем сообщение об этом
        } else {
            $result['message'] = 'POST is empty';
            $result['status'] = 'bad';
        }

        echo json_encode($result);
    }



    // Удаление подкатегории
    
// -------------------------------------------- Вопросы и ответы ---------------------------------------------------- //


}