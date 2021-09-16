<?php
if ($res['error'] == null) {
    $send->send($res['user'],  'no', 'form');
    header('Location: ' . $baseurl.'thanks.php');
    exit;
} else {
    $line = "&pib=".$_POST['pib']."&mobile=".$_POST['mobile']."&email=".$_POST['email']."&msg=".$_POST['msg'];
    $ms = '';
    foreach ($res['code'] as $k => $v) {
        if($v == "001"){
            $ms .= "&err_pib=".$res['message'][$k];
        }
        if($v == "002"){
            $ms .= "&err_pib=".$res['message'][$k];
        }
        if($v == "011"){
            $ms .= "&err_pib=".$res['message'][$k];
        }
        if($v == "004"){
            $ms .= "&err_mobile=".$res['message'][$k];
        }
        if($v == "005"){
            $ms .= "&err_mobile=".$res['message'][$k];
        }
        if($v == "006"){
            $ms .= "&err_mobile=".$res['message'][$k];
        }
    }
    header('Location: '.$baseurl.'?status=error' . $line.$ms.'#contact');
    exit;
}
