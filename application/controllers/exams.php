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
        $form_validation='subject';
        $table_name='subject';
        $view='exams/subject_master';
        $field='subject_name';
        $this->insert_genric($form_validation,$table_name,$view,$field);
    }

    public function term_master(){
        $form_validation='term';
        $table_name='terms';
        $view='exams/term_master';
        $field='term_name';
        $this->insert_genric($form_validation,$table_name,$view,$field);
    }
    public function assessment_master(){
        $this->load->view('private/exams/assessment_master');
    }
    public function subject_master_b(){}
    public function term_master_b(){}
    public function attendance_master(){}
}