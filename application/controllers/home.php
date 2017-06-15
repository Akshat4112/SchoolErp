<?php
class Home extends CI_Controller{
    public function index(){
        $this->load->view('public/header_view');
        $this->load->view('public/content_view');
        $this->load->view('public/footer_view');
        
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
    public function signin(){
    }
    public function register(){
    }
}