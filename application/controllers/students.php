<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 6/5/2017
 * Time: 10:40 AM
 */
class Students extends MY_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->view('dashboard/examples/students/header_view');
        $this->load->view('dashboard/examples/students/footer');
    }

    public function profile(){
        $this->load->view('dashboard/examples/students/student_profile');
    }
    public function dashboard(){
        $this->load->view('dashboard/examples/students/dashboard');
    }
    public function general(){
        $this->load->view('dashboard/examples/students/general');
    }

    public function create_student(){
        $this->load->view('dashboard/examples/students/create_student');
   }
}