<?php
/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 7/15/2017
 * Time: 8:27 PM
 */ class Admin extends MY_Controller{
     public function __construct()
     {
         parent::__construct();
         $this->load->view('private/admin/header');
         $this->load->view('private/admin/footer');
     }

    public function index(){

         $this->load->view('private/admin/admin_dash');
     }
}