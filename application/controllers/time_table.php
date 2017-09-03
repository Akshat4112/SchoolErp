<?php
/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 7/19/2017
 * Time: 1:40 PM
 */
class Time_table extends MY_Controller{
    public function __construct()
    {
        parent::__construct();

        // for checking if user is logged in or not.

        if( ! $this->session->userdata('login_id')){
            return redirect('home');
            exit();
        }

        $this->load->view('private/time_table/header',['username' => $this->get_admin()]);
        $this->load->view('private/time_table/footer');
    }
    public function index(){
    }
    public function assign_periods(){
        $this->load->view('private/time_table/assign_period');
    }
    public function subject_masters(){
        $this->load->view('private/time_table/assign_period');
    }
    public function teacher_wise_time_table(){
        $this->load->view('private/time_table/teacher_wise_time_table');
    }
    public function class_wise_time_table(){
        $this->load->view('private/time_table/class_wise_time_table');
    }
    public function teachers_subject(){
        $this->load->view('private/time_table/teachers_subject');
    }
    public function teachers_period(){
        $this->load->view('private/time_table/teachers_period');
    }
}