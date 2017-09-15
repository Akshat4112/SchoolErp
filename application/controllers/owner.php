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
		$this->load->library('form_validation');
		$this->form_validation->set_rules('owneremail', 'owneremailn', 'trim|required');
		$this->form_validation->set_rules('password', 'password', 'trim|required');

		if ($this->form_validation->run() == FALSE) {
				die('ERROR!');
		} else {	
        if ($this->input->POST('owneremail') == 'akshat41121995@gmail.com' && $this->input->POST('password') == 'nicola11') {
            //Why?
			$name = 'akshat';
            $this->load->view('public/login_success');
        } else {
            redirect('owner/incinfo');
        }
	  }
    }

    public function incinfo()
    {
        $this->load->view('public/incorrect_info');

    }
}
