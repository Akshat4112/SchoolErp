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
        $this->load->model('get_header_info','ghi');
        $username = $this->ghi->get_admin();
        $this->load->view('private/attendance/header.php',['username'=>$username]);
        $this->load->view('private/attendance/footer.php');

    }
    public function attend_view(){
        $this->load->view('private/attendance/attend_view.php');
    }
    public function attend_new(){

        //loading section dropdown form database
        $fieldsec='section_name';
        $table_namesec='section';
        $this->load->model('get_model','gm');
        $section_list=$this->gm->get_list($fieldsec,$table_namesec);
        $list1=array();
        foreach($section_list as $type )
        {
            array_push($list1, $type['section_name']);
        }
        //loading class dropdown from database
        $this->load->model('get_model','gm');
        $class_list=$this->gm->get_class_list();
        $list=array();
        foreach($class_list as $type )
        {
            array_push($list, $type['class']);
        }

        $data=$this->input->post();
        unset($data['submit']);
        print_r($data);

        //loading table data dynamically based upon input by form...
        $data['class']=0;
        $data['section']=0;
        $data['date']=0;
        $class_table = $data['class'];
        $section_table = $data['section'];
        $date_table = $data['date'];
        //$this->load->model('');
        $this->load->view('private/attendance/attend_new.php',['section'=>$list1,'class_drop'=>$list]);





    }
}