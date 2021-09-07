<?php
function val_from_get($name){ 
    if(!empty($_GET[$name]))
    {
        return $_GET[$name];
    }
}
function render_error($name){
    $str = '';
    $str .= '<div class="error_cont '.$name.'_error" style="';
    $new_name = 'err_'.$name;

    if(!empty($_GET[$new_name])){
        $str .= 'display:block;';
        $err = $_GET[$new_name];
    }else{
        $str .= 'display:none;';
        $er.= "";
    }
    $str .= '">';
    $str .= $err;
    $str .='</div>';
    return $str;
}



