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
}