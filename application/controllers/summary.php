<?php
/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 7/17/2017
 * Time: 4:38 PM
 */
class Summary extends MY_Controller{
    public function __construct()
    {
        parent::__construct();

        // for checking if user is logged in or not.

        if( ! $this->session->userdata('login_id')){
            return redirect('home');
            exit();
        }

        $this->load->view('private/summary/header',['username' => $this->get_admin()]);
        $this->load->view('private/summary/footer');
    }
    public function fees_summary(){
        $this->load->view('private/summary/fees_summary');
    }
}