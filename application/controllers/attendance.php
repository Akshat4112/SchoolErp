<?php
/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 7/17/2017
 * Time: 8:22 PM
 */
defined('BASEPATH') OR exit('No direct script access allowed');
class Attendance extends MY_Controller{
    public function __construct()
    {
        parent::__construct();

        // for checking if user is logged in or not.

        if( ! $this->session->userdata('login_id')){
            return redirect('home');
            exit();
        }

        $this->load->view('private/attendance/header.php',['username'=>$this->get_admin()]);
        $this->load->view('private/attendance/footer.php');

    }
    public function attend_view(){
        $data = $this->input->post();

        $this->load->view('private/attendance/attend_view.php');
    }

    public function summary(){
        $this->load->view('private/attendance/summary/summary.php');
    }
    public function prints(){
        $this->load->view('private/attendance/print.php');
    }
    public function attend_new(){
        $this->load->model('get_model','gm');

        //loading section dropdown form database
        $section_list = $this->dropdown_db('section_name','section');

        //loading class dropdown from database
        $class_list = $this->dropdown_db('class','class');

        $post = $this->input->post();
        unset($post['submit']);
        //print_r($post);

        $get_data = $this->gm->attendance_search($post['class'],$post['section']);

        $this->load->view('private/attendance/new/attend_new.php',['section_drop'=>$section_list,
            'class_drop'=>$class_list,'data'=>$get_data]);
    }
}