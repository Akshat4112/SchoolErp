<?php
class Home extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->view('public/header_view');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->helper('form');
    }
public function index(){
        $this->load->view('public/content_view');
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

        $this->load->view('public/register_view');
        $this->load->model('register');

        $regemail = $this->input->post('regemail');
        $regpass = $this->input->post('regpass');
        $regconpass = $this->input->post('regconpass');

        $data=array(
            'email'=>$regemail,
            'pass'=>$regpass,
            'con_pass'=>$regconpass
        );
        $tablename="register";
        $this->register->insert($tablename,$data);


    }
}