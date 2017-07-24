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
        $this->load->model('get_header_info','ghi');
        $username = $this->ghi->get_admin();
        $this->load->view('private/accounts/header',['username'=>$username]);
        $this->load->view('private/accounts/footer');
    }
    public function index(){
    }
    public function new_account(){
        $this->load->view('private/accounts/new_account');
    }
    public function send_sms(){
        $this->load->view('private/accounts/send_sms');
    }
    public function import(){
        $this->load->view('private/accounts/import');
    }
    public function export(){
        $this->load->view('private/accounts/export');
    }
    public function labels(){
        $this->load->view('private/accounts/labels');
    }
}