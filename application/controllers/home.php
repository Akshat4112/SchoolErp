<?php
class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->view('private/header');
        $this->load->view('private/footer');
    }
    public function about(){
        $this->load->view('private/about');
        echo 'Hello';
    }
    public function index()
    {
    //    echo 'hello1';

    }
}