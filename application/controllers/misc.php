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

    }

}