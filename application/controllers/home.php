<?php
class Home extends CI_Controller{
    public function index(){
        $this->load->helper('form');
        $this->load->view('public/header_view');
        $this->load->view('public/content_view');

        $email = $this->input->post('email');
        $password = $this->input->post('password');

        if($email=='akshat@gmail.com' and $password =='123'){
            $this->load->view('public/login_success');
        }else{
            $this->load->view('public/incorrect_info');
        }
    }
    public function about_us(){
        $this->load->view('public/about_us');
    }
    public function contact_us(){
        $this->load->view('public/contact_us');
    }
    public function help(){
        $this->load->view('public/help');
    }
    public function register(){
        $this->load->helper('form');
        $this->load->view('public/register_view');

        $regemail = $this->input->post('regemail');
        $regpass = $this->input->post('regpass');
        $regconpass = $this->input->post('regconpass');

    }
}