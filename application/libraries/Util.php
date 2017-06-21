<?php
defined('BASEPATH') OR exit('Access Denied');

class Util{
    protected $CI;

    public function __construct()
    {
        $this->CI = &get_instance();
    }


    /**
     * This function check if the user is login or not 
     * based on isLogin flag stored on user session
     * @return void
     */
    public function checkLogin()
    {
        // if isLogin is set to FALSE
        if(! $this->CI->session->isLogin){
            redirect();
        }
        else{
            return "";
        }
    }
} // end of file