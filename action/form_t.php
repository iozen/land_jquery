<?php

header("Access-Control-Allow-Origin: *");
//header("Content-type: application/json; charset=utf-8");

include_once '../app/config.php';
include_once '../app/db.php';
include_once 'action.php';
include_once 'sending.php';
include_once 'validation.php';


$act = new Action();
$db = new Db();
//$send = new Sending();

$_POST['pib'] = 'олотюк Андрій Володимирович ';
$_POST['mobile'] = '878778787';
$_POST['email'] = 'kjkjk@kjj.com';
$_POST['msg'] = 'jkjkjkkjjk kjkjkjkj kjkjkjkjkjkjj';


$user = array(
    'fio' => null,
    'mob' => null,
    'email' => null,
    'adress' => null
);

$res = $act->action($user);

include_once 'form_end.php';
//include_once 'form_end_t.php';
