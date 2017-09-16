<?php

class Home extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('parser');
        $data= array(
            'title' => 'SchooLERP'
        );
        $this->parser->parse('public/header_view', $data);
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->helper('form');
    }

    public function index()
    {
        if($this->session->userdata('login_id')){
            return redirect('dashboard');
        }
        $this->load->view('public/content_view');
    }
    public function admin_login(){
        if($this->form_validation->run('admin_form')){

            $email= $this->input->post('email');
            $password= $this->input->post('password');

            $this->load->model('login_model');
            $login_id = $this->login_model->login_valid($email,$password);
            if($login_id){
                $this->session->set_userdata('login_id',$login_id);
                return redirect('dashboard');
                // echo 'Password Match';
            }else{
                $this->session->set_flashdata('login_failed','Invalid Email/Password');
                return redirect('home');

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
    public function register(){
        $this->load->view('public/register');
    }
}