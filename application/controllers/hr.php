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
        $this->load->view('private/calendar/header');
        $this->load->view('private/calendar/footer');
    }
    public function index(){

    }
}