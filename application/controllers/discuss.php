<?php
/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 7/19/2017
 * Time: 1:40 PM
 */
defined('BASEPATH') OR exit('No direct script access allowed');
class Discuss extends MY_Controller{
    public function __construct()
    {
        parent::__construct();

        // for checking if user is logged in or not.

        if( ! $this->session->userdata('login_id')){
            return redirect('home');
            exit();
        }


        $this->load->view('private/discuss/header',['username'=>$this->get_admin()]);
        $this->load->view('private/discuss/footer');
    }
    public function index(){

    }
}