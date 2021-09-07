<?php

header("Content-type: application/json; charset=utf-8");
if ($res['error'] == null) {
    //$db->add_form($res['user']['fio'], $res['user']['mobile'], $res['user']['email'], $res['user']['msg']);
    //    $send->send($res['user'],  $url."?status=ok&key=$key", 'form');
    $data = array();
    $data['status'] = "success";

    $final = json_encode($data);
    echo $final;    
    exit;
} else {
    // $send->send($res['user'],  $url."?status=no&key=$key", 'form');
    $data = array();
    $data['status'] = "error";

    $pib_error = array();
    $pib_error['status'] = false;
    $pib_error['message'] = '';


    $mobile_error = array();
    $mobile_error['status'] = false;
    $mobile_error['message'] = '';


    $email_error = array();
    $email_error['status'] = false;
    $email_error['message'] = '';



    foreach ($res['code'] as $k => $v) {

        if($v == "001"){
            $pib_error['status'] = true;
            $pib_error['message'] .= $res['message'][$k]. '<br>';
        }
        if($v == "002"){
            $pib_error['status'] = true;
            $pib_error['message'] .= $res['message'][$k]. '<br>';
        }
        if($v == "011"){
            $pib_error['status'] = true;
            $pib_error['message'] .= $res['message'][$k]. '<br>';
        }
        if($v == "004"){
            $mobile_error['status'] = true;
            $mobile_error['message'] .= $res['message'][$k]. '<br>';
        }
        if($v == "005"){
            $mobile_error['status'] = true;
            $mobile_error['message'] .= $res['message'][$k]. '<br>';
        }
        if($v == "006"){
            $mobile_error['status'] = true;
            $mobile_error['message'] .= $res['message'][$k]. '<br>';
        }
    }

    $data['pib'] = $pib_error;
    $data['mobile'] = $mobile_error;
    $data['email'] = $email_error;
    $final = json_encode($data);
    echo $final;    

    exit;
}
