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
        $message = 'Переходим по ссылке http://weblol.net/user/activation/i/'.$userData['activKey'];

        mail($to,$subject,$message);

    }

    /*Отправляем письмо со спец.ссылкой для сброса пароля*/
    public function sendResetMail($userData){
        $to = $userData['email'];
        $subject = "Сброс пароля";
        $message = 'Переходим по ссылке http://weblol.net/user/reset/'.$userData['key'];

        mail($to,$subject,$message);
    }

    /*Отправляем новый пароль пользователю*/
    public function sendNewPassword($userData){
        $to = $userData['email'];
        $subject = "новый пароль";
        $message = 'Переходим по ссылке http://weblol.net/user/reset/get/'.$userData['newPass'];

        mail($to,$subject,$message);
    }
}
