<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Модель отвечающая за отправку электронных писем
 *
 */
class Model_Mmail extends Model_Database{

    /*Отправляем письмо для активации пользователя*/
    public function sendActivationMail($userData){

        $to = $userData['email'];
        $subject = "Регистрация на сайте EduName";
        $message = 'test'.$userData['activKey'];

        mail($to,$subject,$message);

    }
}
