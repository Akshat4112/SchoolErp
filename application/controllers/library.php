<?php
/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 7/19/2017
 * Time: 1:40 PM
 */
class Library extends MY_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->view('private/library/header',['username' => $this->get_admin()]);
        $this->load->view('private/library/footer');
    }
    public function index(){
        $this->load->view('private/library/dashboard');
    }
}