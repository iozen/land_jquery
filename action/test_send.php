<?php 

include 'sending.php';
$send = new Sending;

$user = array(
    'pib' => 'test_pib',
    'mobile' => 'test_mob',
    'email' => 'email',
    'msg' => 'msg'
);

echo $send->send($user, 'no', 'no'); 


?>
