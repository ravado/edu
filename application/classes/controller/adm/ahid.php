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
    public function action_delSubcategory() {
        if(!empty($_POST)) {
            try {
                // Переганяем все необходимые данные с поста в более удобочитаемые переменные
                $id_categories = $_POST['id'];
                $result['message'] = 'everithing is ok';
                $result['status'] = 'ok';

                // Удаляем подкатегории
                $questions = ORM::factory('ormvioquestion');
                foreach($id_categories as $id_category) {
                    $subcategory = ORM::factory('ormviosubcategory',$id_category);

                    // Удаляем записи из связаной таблицы между вопросами и подкатегориями
                    $subcategory->remove('questions',$questions);
                    $subcategory->delete($id_category);
                }

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


    // Удаление категории
    public function action_delCategory() {
        if(!empty($_POST)) {
            try {
                // Переганяем все необходимые данные с поста в более удобочитаемые переменные
                $id_category = $_POST['id_category'];
                $result['message'] = 'everithing is ok';
                $result['status'] = 'ok';

                // Удаляем подкатегории
                $questions = ORM::factory('ormvioquestion');
                $category = ORM::factory('ormviocategory',$id_category);
                $subcategories = $category->subcategories->find_all();

                // Удаляем записи из связаной таблицы между вопросами и подкатегориями
                foreach($subcategories as $subcategory) {
                    $subcategory->remove('questions',$questions);
                    $subcategory->delete();
                }
                $category->delete();

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


    // Удаление вопросов
    public function action_delQuestions() {
        if(!empty($_POST)) {
            try {
                // Переганяем все необходимые данные с поста в более удобочитаемые переменные
                $id_questions = $_POST['id'];
                $result['message'] = 'everithing is ok';
                $result['status'] = 'ok';

                // Удаляем вопрос и все с ним связанное
                foreach($id_questions as $id_question) {
                    $question = ORM::factory('ormvioquestion',$id_question);
                    $answers = $question->answers->find_all();
                    $favorites = $question->favorites->find_all();

                    // Удаляем связи с промежуточных таблиц
                    $question->remove('subcategories', null);
                    $question->remove('answers', null);

                    // Удаляем все ответы
                    foreach($answers as $answer) {
                        $answer->delete();
                    }

                    // Удаляем вопрос
                    $question->delete();
                }

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


    // Добавление ответа
    public function action_addAnswer() {
        if(!empty($_POST)) {
            try {
                // Переганяем все необходимые данные с поста в более удобочитаемые переменные
                $auth = Auth::instance();
                $id_user = $auth->get_user()->id;
                $id_question = (int)$_POST['id_question'];
                $time = $_POST['time'];
                $date = $_POST['date'];
                $public_date = date('Y-m-d H:i', strtotime($date .$time));
                $is_best = (int)$_POST['is_best'];
                $rating = (int)$_POST['rating'];
                $text = addslashes($_POST['answer']);

                $result['message'] = 'everithing is ok';
                $result['status'] = 'ok';

                $question = ORM::factory('ormvioquestion', $id_question);

                if($is_best) {
                    $best_answers = $question->answers->where('is_best','=','1')->find_all();
                    foreach($best_answers as $best_answer) {
                        $best_answer->is_best = 0;
                        $best_answer->save();
                    }
                }

                $answer = ORM::factory('ormvioanswer');
                $answer->user_id = $id_user;
                $answer->text = $text;
                $answer->rating = $rating;
                $answer->is_best = $is_best;
                $answer->public_date = $public_date;
                $saved = $answer->save();
                $answer->add('question',$question);

                $result['id_user'] = $saved->user_id;
                $result['id_answer'] = $saved->id_answer;
                $result['id_question'] = $id_question;
                $result['text'] = $saved->text;
                $result['public_date'] = date('H:i y/m/d',strtotime($saved->public_date));
                $result['username'] = $saved->user->username;
                $result['rating'] = $saved->rating;
                $result['is_best'] = $saved->is_best;

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


    // Удаление ответов
    public function action_delAnswers() {
        if(!empty($_POST)) {
            try {
                // Переганяем все необходимые данные с поста в более удобочитаемые переменные
                $id_answers = $_POST['id'];
                $result['message'] = 'everithing is ok';
                $result['status'] = 'ok';

                // Удаляем вопрос и все с ним связанное
                foreach($id_answers as $id_answer) {
                    $answer = ORM::factory('ormvioanswer',$id_answer);
                    $question = $answer->question->find();
                    if($answer->is_best == 1) {
                        $question->is_closed = 0;
                    }
//                    $favorites = $question->favorites->find_all();

                    // Удаляем связи с промежуточных таблиц
                    $answer->remove('question', null);

                    // Удаляем ответ
                    $answer->delete();
                }

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


    // Редактирование ответа
    public function action_updateAnswer() {
        if(!empty($_POST)) {
            try {
                // Переганяем все необходимые данные с поста в более удобочитаемые переменные
                $id_answer = $_POST['id_answer'];
                $rating = $_POST['rating'];
                $date = $_POST['date'];
                $time = $_POST['time'];
                $is_best = $_POST['is_best'];
                $text = $_POST['answer'];
                $result['message'] = 'everithing is ok';
                $result['status'] = 'ok';

                $answer = ORM::factory('ormvioanswer',$id_answer);
                $question = $answer->question->find();
                $answer->rating = $rating;
                $answer->text = $text;
                $answer->public_date = date('Y-m-d H:i',strtotime($time.$date));

                if($answer->is_best == 1 && $is_best == 0) {
                    $question->is_closed = 0;
                    $answer->is_best = 0;
                } elseif($answer->is_best == 0 && $is_best == 1) {
                    $bests = $question->answers->where('is_best','=','1')->find_all();
                    foreach($bests as $best) {
                        $best->is_best = 0;
                        $best->save();
                    }
                    $question->is_closed = 1;
                    $answer->is_best = 1;
                } else {
                    $question->is_closed = $is_best;
                    $answer->is_best = $is_best;
                }
                $saved_question = $question->save();
                $saved_answer =$answer->save();
                date('H:i y/m/d',strtotime($question->public_date));
                $result['id_answer'] = $saved_answer->id_answer;
                $result['rating'] = $saved_answer->rating;
                $result['is_best'] = $saved_answer->is_best;
                $result['time'] = date('H:i d/m/y',strtotime($saved_answer->public_date));
                $result['text'] = $saved_answer->text;
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


// -------------------------------------------- Вопросы и ответы ---------------------------------------------------- //


}