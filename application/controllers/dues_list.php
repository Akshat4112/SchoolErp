<?php
/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 7/17/2017
 * Time: 1:16 PM
 */
defined('BASEPATH') OR exit('No direct script access allowed');
class Dues_list extends MY_Controller{
    public function __construct()
    {
        parent::__construct();

        // for checking if user is logged in or not.

        if( ! $this->session->userdata('login_id')){
            return redirect('home');
            exit();
        }
       
        $this->load->view('private/dues_list/header',['username' => $this->get_admin()]);
        $this->load->view('private/dues_list/footer');
    }

    public function dues_lis(){

        //for getting class dynamically from database which is updated by masters

        $this->load->model('get_model','gm');
        $class_list=$this->gm->get_class_list();
        $list=array();
        foreach($class_list as $type )
        {
            array_push($list, $type['class']);
        }

        $fieldsec='section_name';
        $table_namesec='section';
        $this->load->model('get_model','gm');
        $section_list=$this->gm->get_list($fieldsec,$table_namesec);
        $list1=array();
        foreach($section_list as $type )
        {
            array_push($list1, $type['section_name']);
        }

        $fieldcat='category_name';
        $table_namecat='category';
        $this->load->model('get_model','gm');
        $category_list=$this->gm->get_list($fieldcat,$table_namecat);
        $list2=array();
        foreach($category_list as $type )
        {
            array_push($list2, $type['category_name']);
        }

        $this->load->view('private/dues_list/dues_list',['class_drop'=>$list,'section_drop'=>$list1,'category_drop'=>$list2]);
        //print_r($this->input->post());
        $cla=$this->input->post();
        //print_r($cla);
        //$class = $cla['class']+1;

        //for getting section dynamically from database which is updated by masters

        //for getting category dynamically from database which is updated by masters

        //for getting route dynamically from database which is updated by masters

        //for getting family dynamically from database which is updated by masters

        //for getting ignore dynamically from database which is updated by masters

    }
}