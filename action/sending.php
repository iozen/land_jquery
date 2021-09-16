<?php


class Sending {

    private $err;
    private $typed;

    public function __construct() {
        $this->err = array();
        $this->err['error'] = null;
        $this->err['message'] = array();
        $this->err['code'] = array();

        $this->typed = 'form';
    }

    public function send($user, $url, $type) {

        $to      = 'sssr25@gmail.com';
        $subject = 'Повідомлення із сайту agro-sweet.com.ua';
        $message = "Піб: " . $user['pib'] . " \n";
        $message .= "Мобільний: " . $user['mobile'] . " \n";
        $message .= "Email: " . $user['email'] . " \n";
        $message .= "Повідомлення: " . $user['msg'] . " \n";
        $headers = 'From: info@agro-sweet.com'       . "\r\n" .
            'X-Mailer: PHP/' . phpversion();
       return mail($to, $subject, $message, $headers);

    }

}
