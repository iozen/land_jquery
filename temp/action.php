<?php 

include 'cfg/config.php';
include 'cfg/db.php';

$db = new Db;
function message_to_telegram($text)
 {
     $ch = curl_init();
     curl_setopt_array(
         $ch,
         array(
             CURLOPT_URL => 'https://api.telegram.org/bot' . TELEGRAM_TOKEN . '/sendMessage',
             CURLOPT_POST => TRUE,
             CURLOPT_RETURNTRANSFER => TRUE,
             CURLOPT_TIMEOUT => 10,
             CURLOPT_POSTFIELDS => array(
                 'chat_id' => TELEGRAM_CHATID,
                 'text' => $text,
             ),
         )
     );
     curl_exec($ch);
}
function send_json($data) {
	$json = json_encode($data);
	echo $json;
}
function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	$data = filter_var($data, FILTER_SANITIZE_STRING);
	$data = strip_tags($data);
	//		$data = $this->xss_clean($data);
	return $data;
}
function check_fields($post_data, $err) {

	$err['code'] = array();
	$err['field'] = array();

	if (strlen($post_data['name']) >= 60) {
		$err['error'] = 1;
		$err['field']['name'] = "Поле имя слишком длиноое.";
		array_push($err['code'], "001");
	}
	if (strlen($post_data['name']) <= 2) {
		$err['error'] = 1;
		$err['field']['name'] = "Поле имя слишком короткое.";
		array_push($err['code'], "002");
	}
/*	if (!preg_match("/^[a-zA-Zа-яА-ЯЄєЇїіІ ]*$/", $post_data['name'])) {
		$err['error'] = 1;
		 array_push($err['field'],"В имени дозволены только символы.");
		array_push($err['code'], "003");
	}*/
	if (!preg_match("/^[0-9\(\)\- ]{6,14}$/", $post_data['mob'])) {
		$err['error'] = 1;
		 array_push($err['field'],"Неверный формат телефона.");
		array_push($err['code'], "005");
	}
	if (!filter_var($post_data['email'], FILTER_VALIDATE_EMAIL)) {
		$err['error'] = 1;
		 array_push($err['field'],"Неверный формат e-mail.");
		array_push($err['code'], "007");

	}

	return $err;
}

$err = [];
$err['error'] = NULL;
$err['message'] = [];
$err['code'] = [];

$user_array = array(
	'name' => NULL,
	'email' => NULL,
	'mob' => NULL,
	'msg' => NULL
);

if (!empty($_POST['name'])) {
	$user_array['name'] = $_POST['name'];}

if (!empty($_POST['email'])) {
	$user_array['email'] = $_POST['email'];}

if (!empty($_POST['mob'])) {
	$user_array['mob'] = $_POST['mob'];}

if (!empty($_POST['msg'])) {
	$user_array['msg'] = $_POST['msg'];}

$user_array['name'] = test_input($user_array['name']);
$user_array['email'] = test_input($user_array['email']);
$user_array['mob'] = test_input($user_array['mob']);
$user_array['msg'] = test_input($user_array['msg']);

$err = check_fields($user_array, $err);

if($err['error'] == NULL){
$status_l = "success";
}else{
$status_l = "error";
}


/*
$q = "INSERT INTO `users` (`id`, `name`, `email`, `mob`, `msg`, `time`, `land`, `st`) VALUES (NULL, '".$user_array['name']."', '".$user_array['email']."', '".$user_array['mob']."', '".$user_array['msg']."', CURRENT_TIMESTAMP, 'iozenom.com EN', '$status_l');";

$db->put_query($q);
 */


 define('TELEGRAM_TOKEN', '1781833701:AAGVFpBu6yn8d5mZVhKfU54SYEIbhGJRyBM');
 
 define('TELEGRAM_CHATID', '-508162468');

$msg_chat = '
new client from  Land
Товар: '.$_POST['product'].' 
Імя: '.$user_array['name'].' 
Email: '.$user_array['email'].' 
Мобільний: '.$user_array['mob'].' 
Доставка: '.$user_array['msg'].' 
';

 
message_to_telegram($msg_chat);
 

if($err['error'] == NULL){
	$send['st'] = "success";
//	$send['msg'] = "<h2 style='color:green'> Thank you for registering!<br> You will be contacted shortly.</h2>";
	send_json($send);
}else{
	$msg = "<span style='color:red;'>";
	foreach($err['field'] as $v){
		$msg .= $v . "<br>";

	}
	$msg .= "</span>";
	$send['st'] = "error";
	$send['msg'] = $msg;
	send_json($send);
}
