<?php

class Owner extends CI_Controller{
    public function index(){
        $this->load->view('public/header_view');
        $this->load->view('public/owner_view');
        $this->load->view('public/footer_view');

        }
    public function owner_login(){

        $this->load->library('form_validation');
	    $this->form_validation->set_rules('owneremail', 'Email', 'required|alpha|trim');
	    $this->form_validation->set_rules('password', 'Password', 'required');

        if($this->form_validation->run())
        {
            $email = $this->input->POST('owneremail');
            $password = $this->input->POST('password');
            $this->load->model('owner_login_model');
            $login_id = $this->owner_login_model->valid_login($email,$password);
            if($login_id)
            {
                $this->load->library('session');
                $this->session->set_userdata('ownerId',$login_id);
                return redirect('public/login_success');

            }
            else
            {
                echo "failed";
            }
        }
        else
        {
            $this->load->view('public/header_view');
            $this->load->view('public/owner_view');
            $this->load->view('public/footer_view');
        }



    }
    public function logout(){
        $this->load->library('session');
        $this->session->unset_userdata('ownerId');
        return redirect('owner/');
    }
}