<?php

class Home extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->view('public/header_view');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->helper('form');
    }

    public function index()
    {
        $this->load->view('public/content_view');

    }
    public function admin_login(){
        /*
         * Email and password to be fetchded with database later.
         */
        $email=$this->input->post('email');
        $password=$this->input->post('password');
        if($email=='akshat41121995@gmail.com' && $password=='nicola11') {
            echo $email;

            redirect('dashboard');
        }
        else{
            redirect('home');

        }
    }

    public function about_us()
    {
        $this->load->view('public/about_us');
    }

    public function contact_us()
    {
        $this->load->view('public/contact_us');
    }

    public function help()
    {
        $this->load->view('public/help');
    }

    public function suggestions(){
        $this->load->view('public/suggestions');
    }
    public function query(){
        $this->load->view('public/query');
    }
    public function feedback(){
        $this->load->view('public/feedback');
    }
}