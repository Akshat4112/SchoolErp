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
     public function masters_class(){
        $this->load->view('private/admin/masters/class');
     }
    public function masters_section(){
        $this->load->view('private/admin/masters/section');
    }
    public function masters_caste(){
        $this->load->view('private/admin/masters/caste');
    }
    public function masters_category(){
        $this->load->view('private/admin/masters/category');
    }
    public function masters_house(){
        $this->load->view('private/admin/masters/house');
    }
    public function masters_family(){
        $this->load->view('private/admin/masters/family');
    }
}