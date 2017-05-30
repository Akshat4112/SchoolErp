<?php
class Home extends CI_Controller{
    public function index(){
        $this->load->view('public/header_view');
        $this->load->view('public/content_view');
        $this->load->view('public/footer_view');
    }
}