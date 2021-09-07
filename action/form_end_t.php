<?php


if ($res['error'] == null) {
  
//    $send->send($res['user'],  $url."?status=ok&key=$key", 'form'); 
var_dump ($res); 
    exit;
} else {
     
   // $send->send($res['user'],  $url."?status=no&key=$key", 'form'); 
    
    $ms = '';
    foreach ($res['message'] as $value) {
    echo   $value . " \n ";
    }

    
    
    exit;

}
  



