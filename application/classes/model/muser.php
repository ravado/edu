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
            return TRUE;
        }else{
            return FALSE;
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
}
