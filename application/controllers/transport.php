<?php
/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 7/29/2017
 * Time: 8:40 PM
 */
class Transport extends MY_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->view('private/transport/header');
        $this->load->view('private/transport/footer');
    }
    public function index(){}
    public function route()
    {
        $data=$this->input->post();
        unset($data['submit']);
        $form_validation='route';
        $table_name='route';
        $view='transport/route';
        $field=$data;
        print_r($data);
        $this->insert_genric($form_validation,$table_name,$view,$field);
    }
    public function route_plan()
    {
        $this->load->view('private/transport/route_plan');
    }
}