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
        $this->form_validation->set_rules('email','Email','required|trim');
        $this->form_validation->set_rules('password','Password','required');

        if($this->form_validation->run()){

            $email= $this->input->post('email');
            $password= $this->input->post('password');

            $this->load->model('login_model');
            $login_id = $this->login_model->login_valid($email,$password);
            if($login_id){
                $this->load->library('session');
                $this->session->set_userdata('login_id',$login_id);
                return redirect('dashboard');
                // echo 'Password Match';
            }else{
                echo 'password do not match';
            }
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