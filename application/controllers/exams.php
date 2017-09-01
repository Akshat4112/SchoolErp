<?php
/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 7/19/2017
 * Time: 1:41 PM
 */
defined('BASEPATH') OR exit('No direct script access allowed');
class Exams extends MY_Controller{
    public function __construct()
    {
        parent::__construct();
        
       
        $this->load->view('private/exams/header',['username' => $this->get_admin()]);
        $this->load->view('private/exams/footer');
    }
    public function index(){

    }
}