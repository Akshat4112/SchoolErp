<?php
/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 7/20/2017
 * Time: 12:26 PM
 */
class Accounts extends MY_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->view('private/accounts/header');
        $this->load->view('private/accounts/footer');
    }
    public function index(){
        echo 'accounts';
    }
}