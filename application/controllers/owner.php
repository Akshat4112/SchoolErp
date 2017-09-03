<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Owner extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();

        // for checking if user is logged in or not.

        if( ! $this->session->userdata('login_id')){
            return redirect('home');
            exit();
        }

    }

    public function index()
    {
        $this->load->view('public/header_view');
        $this->load->view('public/owner_view');
        $this->load->view('public/footer_view');

    }

    public function owner_login()
    {
        $email = $this->input->POST('owneremail');
        $password = $this->input->POST('password');

        if ($email == 'akshat41121995@gmail.com' && $password == 'nicola11') {
            $name = 'akshat';
            $this->load->view('public/login_success');

        } else {
            redirect('owner/incinfo');
        }
    }

    public function incinfo()
    {
        $this->load->view('public/incorrect_info');

    }
}