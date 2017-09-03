<?php
/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 6/30/2017
 * Time: 12:37 PM
 */
class Testing extends MY_Controller{

    public function __construct()
    {
        parent::__construct();

        // for checking if user is logged in or not.

        if( ! $this->session->userdata('login_id')){
            return redirect('home');
            exit();
        }

        $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
    }
    public function test(){
        $this->load->library('email');

        $this->email->from('garg.ridhima72@gmail.com', 'Ridhima ');
        $this->email->to('akshat41121995@gmail.com');
        $this->email->cc('');
        $this->email->bcc('');

        $this->email->subject('Email Test');
        $this->email->message('Testing the email class.');

        if($this->email->send()){
            echo 'success';
        }else{
            echo 'Error';
        }
    }
}