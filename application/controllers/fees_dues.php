<?php
/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 9/1/2017
 * Time: 9:03 AM
 */
class Fees_dues extends MY_Controller{
    public function __construct()
    {
        parent::__construct();


        $this->load->view('private/fees/header',['username' => $this->get_admin()]);
        $this->load->view('private/fees/footer');
        $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
    }

    public function fees_dues_class_wise(){
        $this->load->view('private/fees/fees_dues_list/fees_dues_list_class_wise');
    }
    public function family_wise_dues_list(){
        $this->load->view('private/fees/fees_dues_list/family_wise_dues_list');
    }
    public function fees_status_report(){
        $this->load->view('private/fees/fees_dues_list/fees_status_report');
    }
    public function fees_dues_list_detailed(){
        $this->load->view('private/fees/fees_dues_list/fees_dues_list_detailed');
    }
    public function fees_estimation_list(){
        $this->load->view('private/fees/fees_dues_list/fees_estimation_list');
    }
}