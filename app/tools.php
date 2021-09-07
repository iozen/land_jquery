<?php

class Tools {

    public function send_json($data) {
        // $val = array(
        //      'status' => $data
        //  );
        $json = json_encode($data);
        echo $json;
    }

    public function look_session() {
        session_start();
        if (isset($_SESSION['user']) && ($_SESSION['user']['open'] == TRUE)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function check_fields($post_data, $err) {

        $err['code'] = [];
        
        if (strlen($post_data['name']) >= 60) {
            $err['error'] = 1;
            $err['field']['name'] = "Name very logng.";
            array_push($err['code'], "001");
        }

        if (strlen($post_data['name']) <= 1) {
            $err['error'] = 1;
            $err['field']['name'] = "Name very short.";
            array_push($err['code'], "002");
        }

       /* if (!preg_match("/^[a-zA-Z]+[а-яА-Я ]*$/", $post_data['name'])) {
            $err['error'] = 1;
            $err['field']['last_name'] = "In Name only letters and white space allowed";
            array_push($err['code'], "003");
	}*/
        if (strlen($post_data['last_name']) >= 60) {
            $err['error'] = 1;
            $err['field']['last_name'] = "Last Name very logng.";
            array_push($err['code'], "004");
        }

        if (strlen($post_data['last_name']) <= 1) {
            $err['error'] = 1;
            $err['field']['last_name'] = "Last Name very short.";
            array_push($err['code'], "005");
        }
       /* 
        if (!preg_match("/^[a-zA-Z]+[а-яА-Я ]*$/", $post_data['last_name'])) {
            $err['error'] = 1;
            $err['field']['last_name'] = "In Last Name only letters and white space allowed";
            array_push($err['code'], "006");
        }
	*/
        if (!filter_var($post_data['email'], FILTER_VALIDATE_EMAIL)) {
            $err['error'] = 1;
            $err['field']['email'] = "Invalid email format";
            array_push($err['code'], "007");
            
        }

        return $err;
    }

}

?>
