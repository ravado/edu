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
}
