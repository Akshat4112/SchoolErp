<?php

class Home extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->view('public/header_view');



    }

    public function index()
    {
        $this->load->view('public/content_view');

    }
    public function admin_login(){
        /*
         * Email and password to be fetchded with database later.
         */
        $this->form_validation->set_rules('email','Email','required|trim');
        $this->form_validation->set_rules('password','Password','required');

        // $this->form_validation->set_error_delimiters("<p class='text-danger'>","</p>");

        if($this->form_validation->run()){

            $email= $this->input->post('email');
            $password= $this->input->post('password');

            //echo 'Validation Successful';
        }else{
            $this->load->view('public/content_view');
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