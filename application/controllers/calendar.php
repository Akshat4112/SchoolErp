<?php
/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 7/19/2017
 * Time: 1:41 PM
 */
defined('BASEPATH') OR exit('No direct script access allowed');
class Calendar extends MY_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->view('private/calendar/header',['username'=>$this->get_admin()]);
        $this->load->view('private/calendar/footer');
    }
    public function index(){
    }
}