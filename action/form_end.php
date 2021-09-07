<?php
if ($res['error'] == null) {
//$db->add_form($res['user']['fio'], $res['user']['mobile'], $res['user']['email'], $res['user']['msg']);
	//    $send->send($res['user'],  $url."?status=ok&key=$key", 'form');
	header('Location: ' . $baseurl.'thanks.php');
	exit;
} else {
	// $send->send($res['user'],  $url."?status=no&key=$key", 'form');
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
