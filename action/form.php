<?php

header("Access-Control-Allow-Origin: *");
//header("Content-type: application/json; charset=utf-8");

include_once '../app/config.php';
//include_once '../app/db.php';
include_once 'action.php';
include_once 'sending.php';
include_once 'validation.php';

$act = new Action();
$send = new Sending();
//$db = new Db();

$type = $_GET['type'];

$user = array(
    'pib' => null,
    'mobile' => null,
    'email' => null,
    'msg' => null
);

$page = "";
if(!empty($_POST['page'])){
    $page = $_POST['page'];
}

$res = $act->action($user);

if($type == 'static'){
    include_once 'form_end.php';
}else {
    include_once 'form_end_js.php';
}
