<?php defined('SYSPATH') or die('No direct script access.');

class Model_Mtests extends Model_Database{

    public function addNewTest($data) {

        // Вывод заколовка теста и вопросов с вариантами ответов
        /*$tests = ORM::factory('test')->where('id_test','=','16')->find_all();
        foreach ($tests as $test) {
            echo 'test title - ' .$test->title .'<br>';
            $questions = $test->questions->find_all();
            foreach ($questions as $question) {
                echo 'question # - ' .$question->title .'<br>';
                $answers = $question->answers->find_all();
                foreach ($answers as $answer) {
                    echo 'answers is: ' .$answer->title .'<br>';
                }

            }
        }*/

        // Запись теста вопросов и ответов в базу
        /*$test = ORM::factory('test');
        $test->title = 'megotest by mee';
        $new_test_id = $test->save();

        for ($i = 0; $i < 4; $i++) {
            $question = ORM::factory('tstquestion');
            $question->title = 'вопрос';
            $question->test_id = $new_test_id;
            $new_question_id = $question->save();

            for ($j = 0; $j < 3; $j++) {
                $answer = ORM::factory('tstanswer');
                $answer->title = 'ответ';
                $answer->tst_question_id = $new_question_id;
                $answer->save();
            }
        }*/



        // Статические параметры
        $user_id = $data['user_id'];
        $title = $_POST['testTitle'];
        $category_id = $_POST['testCategory'];
        $output_ball_mode = $_POST['outputBallMode'];
        switch ($output_ball_mode) {
            case 'answers': { $output_ball_mode = 0; break; }
            case 'balls': { $output_ball_mode = 1; break; }
            case 'both': { $output_ball_mode = 2; break; }
            default: $output_ball_mode = 0;
        }
        if (isset($_POST['timer'])) {
            $timer = true;
            if($_POST['time'] == '') {
                $timer = false;
            } else {
                $time = (int)$_POST['time'];
            }
        } else {
            $timer =false;
        }

        $need_delete = $_POST['delTest'];
        $randomize = $_POST['outputRandom'];
        switch($randomize) {
            case 'nothing': { $randomize = 0; break; }
            case 'questions': { $randomize = 1; break; }
            case 'answers': { $randomize = 2; break; }
            case 'all': { $randomize = 3; break; }
            default: { $randomize = 0; break; }
        }
        $need_pass = $_POST['passToTest'];
        if ($need_pass == 'yes') {
            $need_pass = true;
            if($_POST['password'] == '') {
                $need_pass = false;
            } else {
                $pass = $_POST['password'];
            }
        } else {
            $need_pass = false;
        }

        // Динамические параметры
        $questions = $_POST['question'];
        $bal_calculate = $_POST['ballCalculate'];
        if (isset($_POST['ballForQuestion'])) {
            $question_ball = $_POST['ballForQuestion'];
        }
        $img_to_question = $_POST['questionImgName'];
        $answer_img_need = $_POST['imgMode'];
        $question_variant_img = $_POST['variantImgName'];
        if (isset( $_POST['correct'])) {
            $answer_correct = $_POST['correct'];
        }
        $answers = $_POST['answer'];
        if(isset($_POST['ballPerVal'])) {
            $answer_ball = $_POST['ballPerVal'];
        }

        /*echo '<b> Заголовок теста: </b>' .$title .'<br>';
        echo '<b>Категория: </b>' .$category_id .'<br>';
        echo '<b>Подсчет баллов: </b>' .$bal_calculate[0] .'<br>';
        echo '<b>Количество баллов: </b>' .$question_ball[0] .'<br>';
        echo '<b>Нужны ли поля для картинок: </b>' .$answer_img_need[0] .'<br>';
        foreach($questions as $key => $question) {
            echo '<b>вопрос ' .$key .': </b>' .$question .'<br>';
            echo '<b>Ответы :</b><br>';
            foreach ($answers[$key] as $k => $answer) {
                if (isset($answer_correct[$key][$k])) {
                    echo 'on';
                }
                if ($bal_calculate[$key] == 'forEach') {
                    echo 'баллов' .$answer_ball[$key][$k];
                }
                echo '[' .$answer .']<br>';
            }
        }
        echo '<b>Что выводить по завершению теста:</b> ' .$output_ball_mode .'<br>';
        if (isset($timer)) {
            echo '<b>Таймер: </b>' .$time .'<br>';
        }
        echo '<b>Удалять ли тест после 30 дней? </b> ' .$need_delete .'<br>';
        echo '<b>Перемешивание: </b> ' .$randomize .'<br>';
        if ($need_pass == 'yes') {
            echo '<b>Пароль: </b>' .$pass .'<br>';
        }*/



        // Запись в таблицу Tests
        if($need_pass) {
            $auth = Auth::instance();
            $pass = $auth->hash_password($pass);
        }
        $test = ORM::factory('ormtest');
        //$categories = ORM::factory('tstcategory')->where('title','=','Информатика')->find(1);
        $kinds = ORM::factory('tstkind')->where('title','=','Пользовательские')->find(1);
        $test->title = $title;
        $test->user_id = $user_id;
        //$test->category_id = $categories->id_category;
        $test->subcategory_id = $category_id;
        $test->kind_id = $kinds->id_kind;
        if($need_pass) {
            $test->password = $pass;
        }
        if($timer) {
            $test->timer = $time;
        }
        $test->output_result = $output_ball_mode;
        $test->randomize = $randomize;
        if($need_delete == 'yes') {
            $test->need_to_del = 1;
        }
        $new_test_id = $test->save();

        // Запись в таблицу tst_questions вопросов
        foreach($questions as $key => $question) {
            $new_question = ORM::factory('tstquestion');
            $new_question->title = $question;
            $new_question->test_id = $new_test_id;
            $new_question->number = $key;
            if(isset($img_to_question[$key]) && $img_to_question[$key] != 'none') {
                $new_question->img_url = $img_to_question[$key];
            }
            if($bal_calculate[$key] == 'forAll') {
                $new_question->ball = (int)$question_ball[$key];
            }
            $new_question_id = $new_question->save();
            // Запись в таблицу tst_answers вариантов ответа
            foreach ($answers[$key] as $k => $answer) {
                $new_answer = ORM::factory('tstanswer');
                $new_answer->title = $answer;
                $new_answer->tst_question_id = $new_question_id;
                if($question_variant_img[$key][$k] != 'none') {
                    $new_answer->img_url = $question_variant_img[$key][$k];
                }
                if($bal_calculate[$key] == 'forEach') {
                    $new_answer->ball = (int)$answer_ball[$key][$k];
                }
                if (isset($answer_correct[$key][$k])) {
                    $new_answer->correct = 1;
                }
                $new_answer->save();
            }
        }

        return $new_test_id;
    }


    public function createTest($data) {
        $test = ORM::factory('ormtest');
        $test->title = $data['title'];
        $test->user_id = $data['user_id'];
        $test->subcategory_id = $data['subcategory_id'];
        $test->rating = $data['rating'];
        $test->complete_count = $data['complete_count'];
        $test->timer = (int)$data['timer'];
        // Проверяем нужен ли пароль для теста
        if($data['password']) {
            $auth = Auth::instance();
            // Хешируем пароль и записываем его в базу
            $test->password = $auth->hash_password($data['password']);
        }
        if($data['need_del']) {
            $test->need_to_del = (int)$data['need_del'];
        }
        switch($data['randomize']) {
            case 'nothing': { $test->randomize = 0; break; }
            case 'questions': { $test->randomize = 1; break; }
            case 'variants': { $test->randomize = 2; break; }
            case 'all': { $test->randomize = 3; break;}
            default: { $test->randomize = 0; }
        }

        switch($data['output_result']) {
            case 'correct_answers': { $test->output_result = 0; break; }
            case 'balls': { $test->output_result = 1; break; }
            case 'all': { $test->output_result = 2; break;}
            default: { $test->output_result = 0; }
        }
        $tst_id = $test->create()->as_array();
        if($tst_id) {
            return $tst_id;
        } else {
            return false;
        }
    }

    // Добавление вопроса для теста в базу, если все успешно возвращает @id_tst_question - идентификатор записаных вопросов
    // $data трехмерный массив
    // data[id_test][id_question][tbl_fields] где
    // id_test - идентификатор уже записаного в базу теста
    // id_question - рандомный временный идентификатор варианта ответа
    // tbl_fields - строковые переменные в которых будут храниться параметры вопроса, такие как:
    // 'title' - содержание вопроса, 'number' - номер вопроса, 'img_url' - ссылка на изображение для вопроса, 'ball' - балл за весь вопрос

    public function addQuestion($data) {

        // Массив для возврата статуса выполнения функции
        $status = array();

        try {
            foreach($data as $tst_id => $test) {
                foreach($data[$tst_id] as $question) {
                    $new_question = ORM::factory('tstquestion');
                    $new_question->test_id = $tst_id;
                    $new_question->title = $question['title'];

                    if((isset($question['ball'])) && ((int)$question['ball'] != 0)) {
                        $new_question->ball = $question['ball'];
                    }

                    if(isset($question['img_url'])) {
                        $new_question->img_url = $question['img_url'];
                    }

                    if(isset($question['number'])) {
                        $new_question->number = $question['number'];
                    }

                    if(isset($question['is_text'])) {
                        $new_question->is_text = $question['is_text'];
                    }

                    if($question_id = $new_question->create()->as_array()) {
                        $status['message'] = 'everithing is ok';
                        $status['status'] = 'ok';
                        $status['question_id'] = $question_id['id_tst_question'];
                        return $status;
                    } else {
                        $status['message'] = 'something went wrong';
                        $status['status'] = 'bad';
                        return $status;
                    }
                }
            }

        // Ловим все ошибочки и цивилизовано возвращаем их содержимое для анализа
        } catch (Exception $e) {
            $status['message'] = 'something went wrong: ' .$e;
            $status['status'] = 'bad';
            return $status;
        }

        $status['message'] = 'everithing is okey';
        $status['status'] = 'ok';
        return $status;

    }

    // Добавление вариантов ответа для теста в базу, если все успешно возвращает @id_tst_answer - идентификатор записаных вариантов
    // $data трехмерный массив
    // data[id_question][id_answer][tbl_fields] где
    // id_question - идентификатор уже записаного в базу вопроса из теста
    // id_answer - рандомный временный идентификатор варианта ответа
    // tbl_fields - строковые переменные в которых будут храниться параметры варианта ответа, такие как:
    // 'title' - содержание варианта, 'correct' - правильный ли вариант, 'is_text' - текстовый ли вариант, 'ball' - балл за вариант
    public function addVariants($data) {

        // Массив для возврата статуса выполнения функции
        $status = array();
        try {
            foreach($data as $question_id => $question) {
                foreach($data[$question_id] as $variant) {
                    $new_variant = ORM::factory('tstanswer');
                    $new_variant->tst_question_id = $question_id;
                    $new_variant->title = $variant['title'];

                    // Если значение было задано значит этот вариант отмечен в качестве правильного
                    if(isset($variant['correct'])) {
                        $new_variant->correct = 1;
                    }

                    // Если значение было задано значит этот вариант отмечен как текстовый
                    if(isset($variant['is_text'])) {
                        $new_variant->is_text = 1;
                    }

                    // Если значение было задано значит этому варианту нужно записать одно изображение
                    if(isset($variant['img_url'])) {
                        $new_variant->img_url = $variant['img_url'];
                    }

                    // Если значение было задано значит за этот вариант нужно будет начислять баллы
                    if(isset($variant['ball']) && ((int)$variant['ball'] != 0)) {
                        $new_variant->ball = (int)$variant['ball'];
                    }
                    $new_variant->create();
                }
            }

        // Ловим все ошибочки и цивилизовано возвращаем их содержимое для анализа
        } catch (Exception $e) {
            $status['message'] = 'something went wrong: ' .$e;
            $status['status'] = 'bad';
            return $status;
        }

        $status['message'] = 'everithing is okey';
        $status['status'] = 'ok';
        return $status;
    }


    // Выбираем 1 вопрос из теста и его варианты ответа
    // В случае успешного выполнения возвращает 1 вопрос и все варианты ответа для него
    public function getQuestionVar($idQuestion) {
        // Массив для возврата статуса выполнения функции
        $status = array();

        try {
            $question = ORM::factory('tstquestion')->where('id_tst_question','=', $idQuestion)->find_all()->as_array();
            // Если не найдено в базе вопроса с переданным id
            if(count($question) == 0) {
                $status['message'] = 'Not question in table tst_question with id' .$idQuestion;
                $status['status'] = 'bad';
                return $status;
            } else {
                $result_question['id_tst_question'] = $question[0]->id_tst_question;
                $result_question['title'] = $question[0]->title;
                $result_question['img_url'] = $question[0]->img_url;
                $result_question['ball'] = $question[0]->ball;
                $result_question['number'] = $question[0]->number;
                $result_question['test_id'] = $question[0]->test_id;
            }

            $variants = ORM::factory('tstanswer')->where('tst_question_id','=', $idQuestion)->find_all()->as_array();
            // Если не найдено в базе вариантов ответа для вопроса с переданным id
            if(count($variants) == 0) {
                $status['message'] = 'Not variants in table tst_answer with question_id' .$idQuestion;
                $status['status'] = 'bad';
                return $status;
            } else {
                foreach($variants as $id => $variant) {
                    $result_variants[$id]['id_tst_answer'] = $variant->id_tst_answer;
                    $result_variants[$id]['title'] = $variant->title;
                    $result_variants[$id]['img_url'] = $variant->img_url;
                    $result_variants[$id]['is_text'] = $variant->is_text;
                    $result_variants[$id]['ball'] = $variant->ball;
                    $result_variants[$id]['correct'] = $variant->correct;
                    $result_variants[$id]['tst_question_id'] = $variant->tst_question_id;
                }
            }

        // Ловим все ошибочки и цивилизовано возвращаем их содержимое для анализа
        } catch (Exception $e) {
            $status['message'] = 'something went wrong: ' .$e;
            $status['status'] = 'bad';
            return $status;
        }

        // Если все прошло успешно возвращаем результаты выполнения
        $status['message'] = 'everithing is okey';
        $status['status'] = 'ok';
        $status['question'] = $result_question;
        $status['variants'] = $result_variants;
        return $status;

    }

    // Список всех тестов
    // $with_zno - брать ли в выборку тесты ЗНО, false - нет, true - да
    public function getTestsList($with_zno) {
        $tests = ORM::factory('ormtest')
            ->where('subcategory_id', 'NOT IN', DB::Select('id_subcategory')
            ->from('tst_subcategories')
            ->where('category_id','=','1'))->find_all()->as_array();
        return $tests;
    }

    // Выборка одного теста ЗНО по названию подкатегории на английском
    public function getOneZnoTest($znotest_id) {
        $status['status'] = 'ok';
        try {
            $categories = ORM::factory('ormtstcategory')->where('translit', '=', 'zno')->find();
            foreach($categories->subcategories->where('subcat_english','=',$znotest_id)->find_all(1) as $subcategory) {
                foreach($subcategory->tests->find_all(1) as $test) {
                    $status['test'] = $test;
                    return $status;
                }

            }
        } catch (Exception $e) {
            $status['status'] = 'bad';
            $status['message'] = $e;
            return $status;
        }

//        print_r($category);
//        $test = ORM::factory('ormtest');
    }

    // Выборка одного теста ЗНО по названию подкатегории на английском
    public function getOneUserTest($test_id) {
        $status['status'] = 'ok';
        try {
            $test = ORM::factory('ormtest')->where('id_test', '=', $test_id)->find();
            $status['test'] = $test;
            return $status;
        } catch (Exception $e) {
            $status['status'] = 'bad';
            $status['message'] = $e;
            return $status;
        }
    }

}
