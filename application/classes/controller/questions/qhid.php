<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Questions_Qhid extends Controller {


	public function action_index(){

	}

    /*Добавляем ответ на вопрос в базу*/
	public function action_addAnswer(){
        $auth = Auth::instance();
        if($auth->logged_in()) {
            $data['username'] = $auth->get_user()->username;
            $data['questionID'] = $_GET['id_question'];
            $data['answer_text'] = $_GET['answer_text'];
            $result = Model::factory('Mquestions')->addAnswer($data);

            echo json_encode($result);
        }

    }


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

    public function action_checkAsBest() {
        $auth = Auth::instance();
        if($auth->logged_in()) {
            $data['user_id'] = $auth->get_user()->id;
            $data['answer_id'] = $_POST['answer_id'];
            $data['question_id'] = $_POST['question_id'];
            $result = Model::factory('Mquestions')->checkAsBest($data);
            echo json_encode($result);
        } else {
            echo json_encode('not auth');
        }
    }

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

}
