<?php
class Action {
    private $err;
    private $user;
    private $err_t;
    public function __construct() {
        $this->err = array();
        $this->err['error'] = null;
        $this->err['message'] = array();
        $this->err['code'] = array();
        
        $this->user['user'] = array();
        $this->user['error'] = null;
        
    }
    private function set_error() {
        if ($this->err_t['error'] == true) {
            $this->err['error'] = true;
            array_push($this->err['message'], $this->err_t['message']);
            array_push($this->err['code'], $this->err_t['code']);
        }
    }
    public function action($user) {
        
        $val = new Validation();
        $user['pib'] = $val->test_input($_POST['pib']);
        $user['email'] = $val->test_input($_POST['email']);
        $user['mobile'] = $val->test_input($_POST['mobile']);
        $user['msg'] = $val->test_input($_POST['msg']);
        $this->err_t = $val->test_fio($user['pib'], 'pib', 2, 75);
        $this->set_error();
        $this->err_t = $val->test_mob($user['mobile'], 'mobile', 3, 15);
        $this->set_error();
        if ($this->err['error'] == null){
        
        $this->user['user'] = $user;
        return $this->user;
        
        }else{
            
           return $this->err; 
        }
    }
}
