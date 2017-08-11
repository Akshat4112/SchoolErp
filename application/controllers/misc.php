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
        $this->load->view('private/misc/header');
        $this->load->view('private/misc/footer');
    }
    public function index(){

    }
    public function gatepass(){
        $data=$this->input->post();
        unset($data['submit']);
        print_r($data);
        $this->load->view('private/misc/gatepass');
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