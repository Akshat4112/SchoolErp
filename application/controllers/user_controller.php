<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_controller extends MY_Controller {

    public function index(){
        echo 'it is working';
    }

    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
    }
}