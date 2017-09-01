<?php
/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 7/19/2017
 * Time: 1:40 PM
 */
class Time_table extends MY_Controller{
    public function __construct()
    {
        parent::__construct();
        
       
        $this->load->view('private/time_table/header',['username' => $this->get_admin()]);
        $this->load->view('private/time_table/footer');
    }
    public function index(){

    }
}