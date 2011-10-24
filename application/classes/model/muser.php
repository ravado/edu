<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Модель отвечающая за работу с пользователем
 * Регистрация
 */
class Model_Muser extends Model_Database{

    /*Регистрация: Запись полученый данных с рег.формы в БД*/
    public function register($userData){

        if((!empty($userData['login'])) && (!empty($userData['password'])) && (!empty($userData['email']))){
            $auth = Auth::instance();
            $userData['hash_password'] = $auth->hash_password($userData['password']);

            $userData['date_register'] = time();

            $query = DB::insert('users',array(
                                              'username',
                                              'password',
                                              'email',
                                              'sex',
                                              'first_name',
                                              'last_name',
                                              'date_register',
                                           ))->values(array(
                                                            $userData['login'],
                                                            $userData['hash_password'],
                                                            $userData['email'],
                                                            $userData['sex'],
                                                            $userData['first_name'],
                                                            $userData['last_name'],
                                                            $userData['date_register']));
            if($query->execute()){
                /*Узнаем ID который получил наш пользователь*/
                $query = DB::select('id')->from('users')->where('username','=',$userData['login']);
                $result = $query->execute();
                    $idKey = $result[0]['id'];
                    $trash = $this->generateData(5);
                    $activKey = $trash.$idKey;
                return $activKey;
            }else{
                return FALSE;
            }
        }


    }

    /*Активация пользователя по ссылке из письма*/
    public function activation($userKey){
        $realKey = substr($userKey,5);
            $query = DB::select('username')->from('users')->where('id','=',$realKey);
            if($query->execute()->as_array()){
                $query = DB::insert('roles_users',array('user_id','role_id'))->values(array($realKey,1));
                $query->execute();
                return TRUE;
            }

    }


    /*Проверка наличия пользователя в БД по адресу почты*/
    public function getUserThEmail($currentEmail){
        $query = DB::select('email')->from('users')->where('email','=',$currentEmail);
        $res = $query->execute()->as_array();

        if(!empty($res)){
           $result['isRegistered'] = true;
        }else{
            $result['isRegistered'] = false;
        }

        return $result;
    }

    /*Проверка наличия пользователя по логину*/
    public function getUserThLogin($currentName){
        $query = DB::select('username')->from('users')->where('username','=',$currentName);
        $res = $query->execute()->as_array();

        if(!empty($res)){
           $result['isRegistered'] = true;
        }else{
            $result['isRegistered'] = false;
        }

        return $result;
    }

     /*Возвращаем данные профиля пользователя по его имени*/
    public function getUserInfo($userName){
        $query = DB::select()->from('users')->where('username','=',$userName);
        $res['userInfo'] = $query->execute()->as_array();
        if($res['userInfo']){
            $res['userInfo']['email'] = $res['userInfo'][0]['email'];
            $res['userInfo']['firstName'] = $res['userInfo'][0]['first_name'];
            $res['userInfo']['lastName'] = $res['userInfo'][0]['last_name'];
            $res['userInfo']['sex'] = $res['userInfo'][0]['sex'];
            //$res['userInfo']['role'] = $res['userInfo'][0]['role'];
            /*Узнаем права пользователя*/
            $query = DB::select()->from('roles_users')->where('user_id','=',$res['userInfo'][0]['id']);
            $result = $query->execute()->as_array();
            if(count($result) == 1){
                $res['userInfo']['role'] = 1;
            }elseif(count($result) == 2){
                $res['userInfo']['role'] = 2;
            }
        }else{
            $res['userInfo']['email'] = 'null';
        }
        return $res;

    }

    /*Удаляем пользователя по имени*/
    public function delUser($userName){
        $query = DB::delete('users')->where('username','=',$userName);
        $result = $query->execute();
        if(!empty($result)){
            $myres['deleted'] = true;
        }else{
            $myres['deleted'] = false;
        }
        return $myres;
    }

    /*Получаем email адрес и высылаем ссылку для сброса пароля*/
    public function resAndSend($email){
        $userData['email'] = $email;
        $query = DB::select('id')->from('users')->where('email','=',$userData['email']);
            $result = $query->execute();
        $userData['key'] = $result[0]['id'];
        
        $trash = $this->generateData(6);
        $userData['key'] = $trash.$userData['key'];

        $sandMail = Model::factory('Mmail')->sendResetMail($userData);
    }

    /*Меняем пароль*/
    public function resAndSave($id){
        $realId = substr($id,6);
        $userData['newPass'] = $this->generateData(7);

        $auth = Auth::instance();
        $hNewPassword = $auth->hash_password($userData['newPass']);

        $query = DB::update('users')->set(array(
                                               'password' => $hNewPassword,
                                               ))->where('id','=',$realId);
        $result = $query->execute();

        $query = DB::select('email')->from('users')->where('id','=',$realId);
        $result= $query->execute();
        $userData['email'] = $result[0]['email'];

        $mUser = Model::factory('Mmail')->sendNewPassword($userData);
    }


    /*Генерация случайного набора значений (на вход посылаем длинну желаемой выдачи)*/
    public function generateData($len){
        $arr = array('a','b','c','d','e','f',
                     'g','h','i','j','k','l',
                     'm','n','o','p','r','s',
                     't','u','v','x','y','z',
                     'A','B','C','D','E','F',
                     'G','H','I','J','K','L',
                     'M','N','O','P','R','S',
                     'T','U','V','X','Y','Z',
                     '1','2','3','4','5','6',
                     '7','8','9','0');

        // Генерируем пароль
        $gData = "";
        for($i = 0; $i < $len; $i++){
        // Вычисляем случайный индекс массива
            $index = rand(0, count($arr) - 1);
            $gData .= $arr[$index];
        }
        return $gData;
    }

    /*Редактироване профиля пользователя(выдаем данные в форму редактирования)*/
    public function getUserProfile($userID){
        $query = DB::select()->from('users')->where('id','=',$userID);
        $result = $query->execute()->as_array();

        return $result;
    }

    /*Обновления данных пользователя в БД*/
    public function updateUserProfile($userData){
        if(!empty($userData['password'])){
            $auth = Auth::instance();
            $hPassword = $auth->hash_password($userData['password']);
            $query = DB::update('users')->set(array(
                                               'password' => $hPassword,
                                               'email' => $userData['email'],
                                               'sex' => $userData['sex'],
                                               'first_name' => $userData['first_name'],
                                               'last_name' => $userData['last_name']
                                               ))->where('id','=',$userData['id']);
            $result = $query->execute();
            $MY['correct'] = true;
            return $MY;
        }else{
            $query = DB::update('users')->set(array(
                                               'email' => $userData['email'],
                                               'sex' => $userData['sex'],
                                               'first_name' => $userData['first_name'],
                                               'last_name' => $userData['last_name']
                                               ))->where('id','=',$userData['id']);
            $result = $query->execute();
            $MY['correct'] = true;
            return $MY;
        }

    }

    /*-----Добавление нового пользователя через админку-----*/
    public function admNewUser($userData){
        if((!empty($userData['login'])) && (!empty($userData['password'])) && (!empty($userData['email']))){
            $auth = Auth::instance();
            $userData['hash_password'] = $auth->hash_password($userData['password']);

            $userData['date_register'] = time();

            $query = DB::insert('users',array(
                                              'username',
                                              'password',
                                              'email',
                                              'sex',
                                              'first_name',
                                              'last_name',
                                              'date_register',
                                           ))->values(array(
                                                            $userData['login'],
                                                            $userData['hash_password'],
                                                            $userData['email'],
                                                            $userData['sex'],
                                                            $userData['first_name'],
                                                            $userData['last_name'],
                                                            $userData['date_register']));
            if($query->execute()){
                /*Узнаем ID который получил наш пользователь*/
                $query = DB::select('id')->from('users')->where('username','=',$userData['login']);
                $result = $query->execute();
                $idKey = $result[0]['id'];

                $query = DB::select('username')->from('users')->where('id','=',$idKey);
                if($query->execute()->as_array()){
                    $query = DB::insert('roles_users',array('user_id','role_id'))->values(array($idKey,1));
                    $query->execute();
                }
                if($userData['role'] == 'admin'){
                    $query = DB::insert('roles_users',array('user_id','role_id'))->values(array($idKey,2));
                    $query->execute();
                }
            }
        }
    }
}
