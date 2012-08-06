<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Questions_Qhid extends Controller {


	public function action_index(){

	}

    /*Добавляем ответ на вопрос в базу*/
//	public function action_addAnswer(){
//        $auth = Auth::instance();
//        if($auth->logged_in()) {
//            $data['username'] = $auth->get_user()->username;
//            $data['questionID'] = $_GET['id_question'];
//            $data['answer_text'] = $_GET['answer_text'];
//            $result = Model::factory('Mquestions')->addAnswer($data);
//
//            echo json_encode($result);
//        }
//
//    }


    public function action_voteUpTest() {
        $test_id = $_POST['test_id'];
        $test = ORM::factory('ormtest')->where('id_test','=',$test_id)->find();
        $curr_rating = $test->rating;
        $curr_rating++;
        $test->rating = $curr_rating;
        $test->update();
        echo json_encode('ok');
    }

    public function action_voteDownTest() {
        $test_id = $_POST['test_id'];
        $test = ORM::factory('ormtest')->where('id_test','=',$test_id)->find();
        $curr_rating = $test->rating;
        if ($curr_rating > 0) {
            $curr_rating--;
        } else {
            $curr_rating = 0;
        }

        $test->rating = $curr_rating;
        $test->update();
        echo json_encode('ok');
    }

    /*Добавляем вопрос в избраное пользователя*/
    public function action_addFavorite(){
        $auth = Auth::instance();
        if($auth->logged_in()) {
            $data['user_id'] = $auth->get_user()->id;
            $data['question_id'] = $_POST['question_id'];
            $result = Model::factory('Mquestions')->addFavorite($data);

            echo json_encode($result);
        } else {
            echo json_encode('not auth');
        }

    }

    /*Удаляем вопрос из избраного пользователя*/
    public function action_removeFavorite(){
        $auth = Auth::instance();
        if($auth->logged_in()) {
            $data['user_id'] = $auth->get_user()->id;
            $data['question_id'] = $_POST['question_id'];
            $result = Model::factory('Mquestions')->removeFavorite($data);
            echo json_encode($result);
        } else {
            echo json_encode('not auth');
        }

    }


    public function action_voteUp() {
        $auth = Auth::instance();
        if($auth->logged_in()) {
            $data['user_id'] = $auth->get_user()->id;
            $data['qa_id'] = $_POST['qa_id'];
            $result = Model::factory('Mquestions')->voteUp($data);
            echo json_encode($result);
        } else {
            echo json_encode('not auth');
        }
    }

    public function action_voteDown() {
        $auth = Auth::instance();
        if($auth->logged_in()) {
            $data['user_id'] = $auth->get_user()->id;
            $data['qa_id'] = $_POST['qa_id'];
            $result = Model::factory('Mquestions')->voteDown($data);
            echo json_encode($result);
        } else {
            echo json_encode('not auth');
        }
    }

//    public function action_checkAsBest() {
//        $auth = Auth::instance();
//        if($auth->logged_in()) {
//            $data['user_id'] = $auth->get_user()->id;
//            $data['answer_id'] = $_POST['answer_id'];
//            $data['question_id'] = $_POST['question_id'];
//            $result = Model::factory('Mquestions')->checkAsBest($data);
//            echo json_encode($result);
//        } else {
//            echo json_encode('not auth');
//        }
//    }

    public function action_upload() {
        // HTTP headers for no cache etc
        header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
        header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
        header("Cache-Control: no-store, no-cache, must-revalidate");
        header("Cache-Control: post-check=0, pre-check=0", false);
        header("Pragma: no-cache");

        // Settings
        //$targetDir = ini_get("upload_tmp_dir") . DIRECTORY_SEPARATOR . "plupload";
        $targetDir = 'uploads';

        $cleanupTargetDir = true; // Remove old files
        $maxFileAge = 5 * 3600; // Temp file age in seconds

        // 5 minutes execution time
        @set_time_limit(5 * 60);

        // Uncomment this one to fake upload time
        // usleep(5000);

        // Get parameters
        $chunk = isset($_REQUEST["chunk"]) ? intval($_REQUEST["chunk"]) : 0;
        $chunks = isset($_REQUEST["chunks"]) ? intval($_REQUEST["chunks"]) : 0;
        $fileName = isset($_REQUEST["name"]) ? $_REQUEST["name"] : '';

        // Clean the fileName for security reasons
        $fileName = preg_replace('/[^\w\._]+/', '_', $fileName);

        // Make sure the fileName is unique but only if chunking is disabled
        if ($chunks < 2 && file_exists($targetDir . DIRECTORY_SEPARATOR . $fileName)) {
            $ext = strrpos($fileName, '.');
            $fileName_a = substr($fileName, 0, $ext);
            $fileName_b = substr($fileName, $ext);

            $count = 1;
            while (file_exists($targetDir . DIRECTORY_SEPARATOR . $fileName_a . '_' . $count . $fileName_b))
                $count++;

            $fileName = $fileName_a . '_' . $count . $fileName_b;
        }

        $filePath = $targetDir . DIRECTORY_SEPARATOR . $fileName;

        // Create target dir
        if (!file_exists($targetDir))
            @mkdir($targetDir);

        // Remove old temp files
        if ($cleanupTargetDir && is_dir($targetDir) && ($dir = opendir($targetDir))) {
            while (($file = readdir($dir)) !== false) {
                $tmpfilePath = $targetDir . DIRECTORY_SEPARATOR . $file;

                // Remove temp file if it is older than the max age and is not the current file
                if (preg_match('/\.part$/', $file) && (filemtime($tmpfilePath) < time() - $maxFileAge) && ($tmpfilePath != "{$filePath}.part")) {
                    @unlink($tmpfilePath);
                }
            }

            closedir($dir);
        } else
            die('{"jsonrpc" : "2.0", "error" : {"code": 100, "message": "Failed to open temp directory."}, "id" : "id"}');


        // Look for the content type header
        if (isset($_SERVER["HTTP_CONTENT_TYPE"]))
            $contentType = $_SERVER["HTTP_CONTENT_TYPE"];

        if (isset($_SERVER["CONTENT_TYPE"]))
            $contentType = $_SERVER["CONTENT_TYPE"];

        // Handle non multipart uploads older WebKit versions didn't support multipart in HTML5
        if (strpos($contentType, "multipart") !== false) {
            if (isset($_FILES['file']['tmp_name']) && is_uploaded_file($_FILES['file']['tmp_name'])) {
                // Open temp file
                $out = fopen("{$filePath}.part", $chunk == 0 ? "wb" : "ab");
                if ($out) {
                    // Read binary input stream and append it to temp file
                    $in = fopen($_FILES['file']['tmp_name'], "rb");

                    if ($in) {
                        while ($buff = fread($in, 4096))
                            fwrite($out, $buff);
                    } else
                        die('{"jsonrpc" : "2.0", "error" : {"code": 101, "message": "Failed to open input stream."}, "id" : "id"}');
                    fclose($in);
                    fclose($out);
                    @unlink($_FILES['file']['tmp_name']);
                } else
                    die('{"jsonrpc" : "2.0", "error" : {"code": 102, "message": "Failed to open output stream."}, "id" : "id"}');
            } else
                die('{"jsonrpc" : "2.0", "error" : {"code": 103, "message": "Failed to move uploaded file."}, "id" : "id"}');
        } else {
            // Open temp file
            $out = fopen("{$filePath}.part", $chunk == 0 ? "wb" : "ab");
            if ($out) {
                // Read binary input stream and append it to temp file
                $in = fopen("php://input", "rb");

                if ($in) {
                    while ($buff = fread($in, 4096))
                        fwrite($out, $buff);
                } else
                    die('{"jsonrpc" : "2.0", "error" : {"code": 101, "message": "Failed to open input stream."}, "id" : "id"}');

                fclose($in);
                fclose($out);
            } else
                die('{"jsonrpc" : "2.0", "error" : {"code": 102, "message": "Failed to open output stream."}, "id" : "id"}');
        }

        // Check if file has been uploaded
        if (!$chunks || $chunk == $chunks - 1) {
            // Strip the temp .part suffix off
            rename("{$filePath}.part", $filePath);
        }


        // Return JSON-RPC response
        die('{"jsonrpc" : "2.0", "result" : null, "id" : "id"}');
    }





    //  Добавление вопроса к Избранному пользователя
    public function action_addToFavorite() {
        if(!empty($_POST) && isset($_POST['id_question'])) {
            try {
                $auth = Auth::instance();
                if($auth->logged_in()){
                    $username = $auth->get_user()->username;
                    $id_user = $auth->get_user()->id;

                    // Переганяем все необходимые данные с поста в более удобочитаемые переменные
                    $id_question = (int)$_POST['id_question'];
                    $question_count = ORM::factory('ormvioquestion',$id_question)->count_all();
                    if($question_count > 0) {
                        $count = ORM::factory('ormviofavorite')->where('user_id','=',$id_user)->where('question_id','=',$id_question)->count_all();
                        if($count == 0) {
                            $favorite = ORM::factory('ormviofavorite');
                            $favorite->question_id = $id_question;
                            $favorite->user_id = $id_user;
                            $favorite->save();
                        }
                        $result['count'] = ORM::factory('ormviofavorite')->where('user_id','=',$id_user)->count_all();
                        $result['message'] = 'Everything is ok';
                        $result['status'] = 'ok';

                    } else {
                        $result['message'] = 'this question does not exist';
                        $result['status'] = 'bad';
                    }
                } else {
                    $result['info'] = 'not auth';
                    $result['message'] = 'User is not login';
                    $result['status'] = 'bad';
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


    //  Удаление вопроса из избранного пользователя
    public function action_delFromFavorite() {
        if(!empty($_POST) && isset($_POST['id_question'])) {
            try {
                $auth = Auth::instance();
                if($auth->logged_in()){
                    $username = $auth->get_user()->username;
                    $id_user = $auth->get_user()->id;

                    // Переганяем все необходимые данные с поста в более удобочитаемые переменные
                    $id_question = (int)$_POST['id_question'];
                    $question_count = ORM::factory('ormvioquestion',$id_question)->count_all();
                    if($question_count > 0) {
                        $favorites = ORM::factory('ormviofavorite')->where('question_id','=',$id_question)->where('user_id','=',$id_user)->find_all();
                        foreach($favorites as $favorite) {
                            $favorite->delete();
                        }

                        $result['count'] = ORM::factory('ormviofavorite')->where('user_id','=',$id_user)->count_all();
                        $result['message'] = 'Everything is ok';
                        $result['status'] = 'ok';
                    } else {
                        $result['message'] = 'this question does not exist';
                        $result['status'] = 'bad';
                    }
                } else {
                    $result['message'] = 'User is not login';
                    $result['status'] = 'bad';
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




    //  Голосование за вопрос
    public function action_VoteQuestion() {
        if(!empty($_POST) && isset($_POST['id_question'])) {
            try {
                $auth = Auth::instance();
                if($auth->logged_in()){
                    $id_user = $auth->get_user()->id;

                    // Переганяем все необходимые данные с поста в более удобочитаемые переменные
                    $id_question = (int)$_POST['id_question'];
                    if($_POST['vote_kind'] == 'up' || $_POST['vote_kind'] == 'down') {
                        $vote_kind = $_POST['vote_kind'];

                        $vote = ORM::factory('ormviovote')->where('user_id','=',$id_user)->where('question_id','=',$id_question)->find();
                        if($vote->loaded()) {
                            // Если уже голосовали отрицательно
                            if($vote->value == '-1') {
                                // И опять хотят отрицательно
                                 if($vote_kind == 'down') {
                                     $result['info'] = 'already voted';
                                     $result['message'] = 'You already voted like this';
                                     $result['status'] = 'bad';
                                 // Передумали и голосуют пложительно
                                 } elseif ($vote_kind == 'up') {
                                     $vote->value = 1;
                                     $vote->save();
                                     $question = ORM::factory('ormvioquestion',$id_question);
                                     $new_rating = ($question->rating + 2);
                                     $question->rating = $new_rating;
                                     $question->save();
                                     $result['rating'] = $new_rating;
                                     $result['message'] = 'Everything is ok';
                                     $result['status'] = 'ok';
                                 }
                            }
                            // Если уже голосовали положительно
                            elseif($vote->value == '1') {
                                // И опять хотят положительно
                                if($vote_kind == 'up') {
                                    $result['info'] = 'already voted';
                                    $result['message'] = 'You already voted like this';
                                    $result['status'] = 'bad';
                                // Передумали и голосуют отрицательно
                                } elseif ($vote_kind == 'down') {
                                    $vote->value = -1;
                                    $vote->save();
                                    $question = ORM::factory('ormvioquestion',$id_question);
                                    $new_rating = ($question->rating - 2);
                                    $question->rating = $new_rating;
                                    $question->save();
                                    $result['rating'] = $new_rating;
                                    $result['message'] = 'Everything is ok';
                                    $result['status'] = 'ok';
                                }
                            }

                        // Если же даный пользователь ни разу еще не голосовал за этот вопрос
                        } else {
                            // Голосуем положительно
                            if($vote_kind == 'up') {
                                // Увеличиваем рейтинг вопроса на 1
                                $question = ORM::factory('ormvioquestion',$id_question);
                                $question->rating = ($question->rating + 1);
                                $saved = $question->save();
                                // Записуем в таблицу голосов что даный пользователь проголосовал за даный вопрос
                                $vote = ORM::factory('ormviovote');
                                $vote->user_id = $id_user;
                                $vote->question_id = $id_question;
                                $vote->value = 1;
                                $vote->save();
                                $new_rating = $saved->rating;

                            // Голосуем отрицательно
                            } else {
                                // Уменьшаем рейтинг вопроса на 1
                                $question = ORM::factory('ormvioquestion', $id_question);
                                $question->rating = ($question->rating - 1);
                                $saved = $question->save();
                                // Записуем в таблицу голосов что даный пользователь проголосовал за даный вопрос
                                $vote = ORM::factory('ormviovote');
                                $vote->user_id = $id_user;
                                $vote->question_id = $id_question;
                                $vote->value = -1;
                                $vote->save();
                                $new_rating = $saved->rating;
                            }
                            $result['rating'] = $new_rating;
                            $result['message'] = 'Everything is ok';
                            $result['status'] = 'ok';
                        }
                    } else {
                        $result['message'] = 'uncertainty in the voting';
                        $result['status'] = 'bad';
                    }

                } else {
                    $result['info'] = 'not auth';
                    $result['message'] = 'User is not login';
                    $result['status'] = 'bad';
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


    //  Голосование за ответ
    public function action_VoteAnswer() {
        if(!empty($_POST) && isset($_POST['id_answer'])) {
            try {
                $auth = Auth::instance();
                if($auth->logged_in()){
                    $id_user = $auth->get_user()->id;

                    // Переганяем все необходимые данные с поста в более удобочитаемые переменные
                    $id_answer = (int)$_POST['id_answer'];
                    if($_POST['vote_kind'] == 'up' || $_POST['vote_kind'] == 'down') {
                        $vote_kind = $_POST['vote_kind'];

                        $vote = ORM::factory('ormviovote')->where('user_id','=',$id_user)->where('answer_id','=',$id_answer)->find();
                        if($vote->loaded()) {
                            // Если уже голосовали отрицательно
                            if($vote->value == '-1') {
                                // И опять хотят отрицательно
                                if($vote_kind == 'down') {
                                    $result['info'] = 'already voted';
                                    $result['message'] = 'You already voted like this';
                                    $result['status'] = 'bad';
                                    // Передумали и голосуют пложительно
                                } elseif ($vote_kind == 'up') {
                                    $vote->value = 1;
                                    $vote->save();
                                    $answer = ORM::factory('ormvioanswer',$id_answer);
                                    $new_rating = ($answer->rating + 2);
                                    $answer->rating = $new_rating;
                                    $answer->save();
                                    $result['rating'] = $new_rating;
                                    $result['message'] = 'Everything is ok';
                                    $result['status'] = 'ok';
                                }
                            }
                            // Если уже голосовали положительно
                            elseif($vote->value == '1') {
                                // И опять хотят положительно
                                if($vote_kind == 'up') {
                                    $result['info'] = 'already voted';
                                    $result['message'] = 'You already voted like this';
                                    $result['status'] = 'bad';
                                    // Передумали и голосуют отрицательно
                                } elseif ($vote_kind == 'down') {
                                    $vote->value = -1;
                                    $vote->save();
                                    $answer = ORM::factory('ormvioanswer',$id_answer);
                                    $new_rating = ($answer->rating - 2);
                                    $answer->rating = $new_rating;
                                    $answer->save();
                                    $result['rating'] = $new_rating;
                                    $result['message'] = 'Everything is ok';
                                    $result['status'] = 'ok';
                                }
                            }

                            // Если же даный пользователь ни разу еще не голосовал за этот вопрос
                        } else {
                            // Голосуем положительно
                            if($vote_kind == 'up') {
                                // Увеличиваем рейтинг вопроса на 1
                                $answer = ORM::factory('ormvioanswer',$id_answer);
                                $answer->rating = ($answer->rating + 1);
                                $saved = $answer->save();
                                // Записуем в таблицу голосов что даный пользователь проголосовал за даный вопрос
                                $vote = ORM::factory('ormviovote');
                                $vote->user_id = $id_user;
                                $vote->answer_id = $id_answer;
                                $vote->value = 1;
                                $vote->save();
                                $new_rating = $saved->rating;

                                // Голосуем отрицательно
                            } else {
                                // Уменьшаем рейтинг вопроса на 1
                                $answer = ORM::factory('ormvioanswer', $id_answer);
                                $answer->rating = ($answer->rating - 1);
                                $saved = $answer->save();
                                // Записуем в таблицу голосов что даный пользователь проголосовал за даный вопрос
                                $vote = ORM::factory('ormviovote');
                                $vote->user_id = $id_user;
                                $vote->answer_id = $id_answer;
                                $vote->value = -1;
                                $vote->save();
                                $new_rating = $saved->rating;
                            }
                            $result['rating'] = $new_rating;
                            $result['message'] = 'Everything is ok';
                            $result['status'] = 'ok';
                        }
                    } else {
                        $result['message'] = 'uncertainty in the voting';
                        $result['status'] = 'bad';
                    }

                } else {
                    $result['info'] = 'not auth';
                    $result['message'] = 'User is not login';
                    $result['status'] = 'bad';
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

    // Добавление ответа на вопрос
    public function action_addAnswer() {
        if(!empty($_POST) && isset($_POST['id_question'])) {
            try {
                $auth = Auth::instance();
                if($auth->logged_in()){
                    $username = $auth->get_user()->username;
                    $id_user = $auth->get_user()->id;

                    // Переганяем все необходимые данные с поста в более удобочитаемые переменные
                    $id_question = (int)$_POST['id_question'];
                    $answer_text = addslashes(strip_tags($_POST['text']));
                    $question = ORM::factory('ormvioquestion',$id_question);
                    if($question->loaded()) {
                        $answer = ORM::factory('ormvioanswer');
                        $answer->user_id = $id_user;
                        $answer->text = $answer_text;
                        $answer->question_id = $id_question;
                        $saved = $answer->save();
                        $question->answers_count = ($question->answers_count + 1);
                        $question->save();
                        $saved = ORM::factory('ormvioanswer',$saved->id_answer);
                        $result['username'] = $username;
                        $result['id_user'] = $id_user;
                        $result['id_answer'] = $saved->id_answer;
                        $result['answer'] = $saved->text;
                        $result['public_date'] = date('d-m-Y H:i', strtotime($saved->public_date));


                        $result['message'] = 'Everything is ok';
                        $result['status'] = 'ok';
                    } else {
                        $result['message'] = 'this question does not exist';
                        $result['status'] = 'bad';
                    }
                } else {
                    $result['message'] = 'User is not login';
                    $result['status'] = 'bad';
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


    // Добавление отзыва о неумесном содержании
    public function action_addImproper() {
        if(!empty($_POST) && isset($_POST['id_improper']) && isset($_POST['type']) && isset($_POST['id_item'])) {
            try {
                $auth = Auth::instance();
                if($auth->logged_in()){
                    $id_user = $auth->get_user()->id;

                    // Переганяем все необходимые данные с поста в более удобочитаемые переменные
                    $id_item = (int)$_POST['id_item'];
                    $id_improper = (int)$_POST['id_improper'];
                    $type = (string)$_POST['type'];
                    $returned = Model::factory('Mquestions')->addImproper($id_improper, $id_item, $id_user, $type);
                    if($returned) {
                        $result['message'] = 'Everything is ok';
                        $result['status'] = 'ok';
                    } else {
                        $result['message'] = 'Some error in addImproper';
                        $result['status'] = 'bad';
                    }
                } else {
                    $result['info'] = 'not auth';
                    $result['message'] = 'User is not login';
                    $result['status'] = 'bad';
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

    // Выбор лучшего ответа
    public function action_checkAsBest() {
        // Выбираем типы нарушений для ответов
        $impropers = ORM::factory('ormvioimpropertype')->where('type','=','answer')->find_all();
        $count = 0;
        foreach($impropers as $improper) {
            $result['improper'][$count]['title'] = $improper->title;
            $result['improper'][$count]['id'] = $improper->id_impropertype;
            ++$count;
        }
        $result['improper']['count'] = $count;
        if(!empty($_POST) && isset($_POST['id_answer'])) {
            $id_answer = (int)$_POST['id_answer'];
            $returned = Model::factory('Mquestions')->checkAsBest($id_answer);
            if($returned['status'] == 'ok') {
                $result['info'] = $returned['info'];
                $result['message'] = $returned['message'];
                $result['status'] = $returned['status'];
                $result['text'] = $returned['saved_answer']->text;
                $result['rating'] = $returned['saved_answer']->rating;
                $result['id_answer'] = $returned['saved_answer']->id_answer;
                $result['public_date'] = date('d-m-Y H:i', strtotime($returned['saved_answer']->public_date));
                $result['username'] = $returned['saved_answer']->user->username;

                // Проверяем голосовал ли текущий пользователь за ответ
                $result['voted_up'] = '';
                $result['voted_down'] = '';
                $auth = Auth::instance();
                if($auth->logged_in()) {
                    $votes = $returned['saved_answer']->votes->where('user_id','=',$auth->get_user()->id)->find();
                    if($votes->value == -1) {
                        $result['voted_down'] = 'active';
                    } elseif($votes->value == 1) {
                        $result['voted_up'] = 'active';
                    }
                }
            }

        // Если  POST пришел пустым возвращаем сообщение об этом
        } else {
            $result['info'] = 'post is empty';
            $result['message'] = 'Массив со значениями пришел пустой';
            $result['status'] = 'bad';
        }

        echo json_encode($result);
    }


}
