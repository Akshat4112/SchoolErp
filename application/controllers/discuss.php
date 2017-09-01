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
        $this->load->view('private/discuss/header',['username'=>$this->get_admin()]);
        $this->load->view('private/discuss/footer');
    }
    public function index(){

    }
}