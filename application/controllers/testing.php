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
    public function upload(){
        $this->load->view('test_view');
    }
}