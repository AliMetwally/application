<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->library('util');
        $this->util->checkLogin();
    }

    public function index(){
        echo 'dash';
    }

}