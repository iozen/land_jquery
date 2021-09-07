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

    public function send($arra_y, $url, $type) {

        if (!empty($type)) {
            $this->typed = $type;
        }

        if ($this->typed == 'form') {
            $tp = array(
                'Content-Type: multipart/form-data',
                'Accept: application/json'
            );
        }

        if ($this->typed == 'json') {
            $tp = array(
                'Content-Type: application/json'
            );
        }

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $arra_y);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $tp);
        $rs = array();
        $rs['output'] = curl_exec($ch);
        $rs['error'] = curl_error($ch);
        curl_close($ch);
        return $rs;
    }

}
