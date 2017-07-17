<?php
/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 7/17/2017
 * Time: 4:38 PM
 */
class Summary extends MY_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->view('private/summary/header');
        $this->load->view('private/summary/footer');
    }
    public function fees_summary(){
        $this->load->view('private/summary/fees_summary');
    }
}