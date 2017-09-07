<?php
/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 7/29/2017
 * Time: 8:19 PM
 */
class Misc extends MY_Controller{
    public function __construct()
    {
        parent::__construct();

        // for checking if user is logged in or not.

        if( ! $this->session->userdata('login_id')){
            return redirect('home');
            exit();
        }

        $this->load->view('private/misc/header');
        $this->load->view('private/misc/footer');
    }
    public function index(){

    }
    public function gatepass(){
 
        $data=$this->input->post();
//        echo '<pre>';
//        print_r($data);
        unset($data['submit']);
//        echo '<pre>';
//        print_r($data);
        $table_name = 'gatepass';
        if($this->form_validation->run('gatepass')){

        $this->insert_data($table_name,$data);
        $this->load->view('private/misc/gatepass');
        }
        else{
            $this->load->view('private/misc/gatepass');
        }

    }
    public function stock_purchase(){
        $this->load->view('private/misc/stock_purchase');
    }
    public function material_issue(){
        $this->load->view('private/misc/material_issue');
    }
    public function document_issue(){
        $this->load->view('private/misc/document_issue');
    }
    public function demand_bill_printing(){
        $this->load->view('private/misc/demand_bill_print');
    }

}