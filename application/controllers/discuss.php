<?php
/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 7/19/2017
 * Time: 1:40 PM
 */
class Discuss extends MY_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('get_header_info','ghi');
        $username = $this->ghi->get_admin();
        $this->load->view('private/calendar/header',['username'=>$username]);
        $this->load->view('private/calendar/footer');
    }
    public function index(){

    }
}