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
        $this->benchmark->mark('code_start');

        // Some code happens here
        $this->load->view('private/summary/fees_summary');
        $this->benchmark->mark('code_end');

        //echo $this->benchmark->elapsed_time('code_start', 'code_end');

        $this->load->library('encryption');
        $t='This is cipher text';
        $key = $this->encryption->create_key(128);

        $key = bin2hex($this->encryption->create_key(16));
        echo $key;
    }
}