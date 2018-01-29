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

        // for checking if user is logged in or not.

        if( ! $this->session->userdata('login_id')){
            return redirect('home');
            exit();
        }
        $this->load->view('private/exams/header',['username' => $this->get_admin()]);

        $this->load->view('private/exams/footer');
    }
    public function index(){
        $this->load->view('private/exams/dashboard');
    }
    public function subject_master(){
        $this->load->view('private/exams/subject_master');
    }
    public function term_master(){
        $this->load->view('private/exams/term_master');
    }
    public function assessment_master(){
        $this->load->view('private/exams/assessment_master');
    }
    public function subject_master_b(){}
    public function term_master_b(){}
    public function attendance_master(){}
}