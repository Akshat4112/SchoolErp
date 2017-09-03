<?php
/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 7/19/2017
 * Time: 1:39 PM
 */
class Hr extends MY_Controller{
    public function __construct()
    {
        parent::__construct();

        // for checking if user is logged in or not.

        if( ! $this->session->userdata('login_id')){
            return redirect('home');
            exit();
        }
        
       
        $this->load->view('private/hr/header',['username' => $this->get_admin()]);
        $this->load->view('private/hr/footer');
    }
    public function index(){
        $this->load->view('private/hr/hr_view');

    }
}