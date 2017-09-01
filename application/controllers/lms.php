<?php
/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 7/19/2017
 * Time: 1:41 PM
 */
class Lms extends MY_Controller{
    public function __construct()
    {
        parent::__construct();
        
       
        $this->load->view('private/lms/header',['username' => $this->get_admin()]);
        $this->load->view('private/lms/footer');
    }
    public function index(){

    }
}