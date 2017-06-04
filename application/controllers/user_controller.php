<?php

class User_controller extends CI_Controller {

    public function index(){
        echo 'it is working';
    }

    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
    }

    public function get(){
        $this->user_model->get(3);

    }
    public function insert(){

    }
    public function update(){

    }
    public function delete(){

    }
}