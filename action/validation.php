<?php
class Validation {
    public function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    public function clear_num($num) {
        $num = str_replace(' ', '', $num);
        $num = str_replace('(', '', $num);
        $num = str_replace(')', '', $num);
        $num = str_replace('-', '', $num);
        $num = str_replace('.', '', $num);
        $num = str_replace(',', '', $num);
        $num = str_replace('+', '', $num);
        return $num;
    }
    public function test_fio($string, $name, $min, $max) {
        $string = $this->test_input($string);
        $errs = array();
        $errs['error'] = false;
        $errs['message'] = array();
        if (strlen($string) >= $max) {
            $errs['error'] = true;
            $errs['message'] = "Поле ПІБ занадто довге";
            $errs['code'] = "001";
        }
        if (strlen($string) <= $min) {
            $errs['error'] = true;
            $errs['message'] = "Поле ПІБ занадто коротке";
            $errs['code'] = "002";
            
            
        }
/*        if (preg_match("/^.*[<>'=0-9(&lt;)(&gt;)!?].*$/", $string)) {
            $errs['error'] = true;
            $errs['message'] = '';
            $errs['code'] = "011";
	}*/
        return $errs;
    }
    public function test_email($email) {
        $email = $this->test_input($email);
	
	$errs = array();
        $errs['error'] = false;
        $errs['message'] = array();
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errs['error'] = true;
            $errs['message'] = "Неправильний формат E-mail";
            $errs['code'] = "007";
        }
        return $errs;
    }
    public function test_mob($num, $name, $min, $max) {
        $num = $this->test_input($num);
        $num = $this->clear_num($num);
        $errs = array();
        $errs['error'] = false;
        $errs['message'] = array();
        if (strlen($num) >= $max) {
            $errs['error'] = true;
            $errs['message'] = "Номер телефону занадто довгий";
            $errs['code'] = "004";
        }
        if (strlen($num) <= $min) {
            $errs['error'] = true;
            $errs['message'] = "Номер телефону занадто короткий";
            $errs['code'] = "005";
            
            
        }
        if (!preg_match("/^[0-9]*$/", $num)) {
            $errs['error'] = true;
            $errs['message'] = "Неправильний формат введеного номеру";
            $errs['code'] = "006";
        }
        return $errs;
    }
}
