<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Модель отвечающая за работу с пользователем
 * Регистрация
 */
class Model_Muser extends Model_Database{

    /*Запись полученый данных с рег.формы в БД*/
    public function register($userData){

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

    /*Активация пользователя по ссылке из письма*/
    public function activation($userKey){
        $realKey = substr($userKey,5);

        $query = DB::select()->from('roles_users')->where('user_id','=',$realKey);
        $result = $query->execute()->as_array();
        if(empty($result)){return FALSE;}
        if($result[0]['role_id'] == 1){
            return FALSE;
        }else{
            $query = DB::select('username')->from('users')->where('id','=',$realKey);
            if($query->execute()->as_array()){
                $query = DB::insert('roles_users',array('user_id','role_id'))->values(array($realKey,1));
                $query->execute();
                return TRUE;
            }
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
}
