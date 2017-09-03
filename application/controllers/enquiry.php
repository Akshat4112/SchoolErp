<?php
/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 8/6/2017
 * Time: 1:35 PM
 */
defined('BASEPATH') OR exit('No direct script access allowed');
class Enquiry extends MY_Controller{
    public function __construct()
    {
        parent::__construct();

        // for checking if user is logged in or not.

        if( ! $this->session->userdata('login_id')){
            return redirect('home');
            exit();
        }


        $this->load->view('private/enquiry/header',['username' => $this->get_admin()]);
        $this->load->view('private/enquiry/footer');
        $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
    }
    public function index(){
        $this->load->view('private/enquiry/enquiry');
    }
    public function new(){

    }
    public function sort(){}
    public function print(){}
    public function search(){}
    public function print_enq(){}
    public function export(){}
    public function sms(){}
}