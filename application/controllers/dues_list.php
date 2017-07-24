<?php
/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 7/17/2017
 * Time: 1:16 PM
 */
class Dues_list extends MY_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('get_header_info','ghi');
        $username = $this->ghi->get_admin();
        $this->load->view('private/dues_list/header',['username'=>$username]);
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
        $this->load->view('private/dues_list/dues_list',['class_drop'=>$list]);
        //print_r($this->input->post());
        $cla=$this->input->post();
        //$class = $cla['class']+1;

        //for getting section dynamically from database which is updated by masters

        //for getting category dynamically from database which is updated by masters

        //for getting route dynamically from database which is updated by masters

        //for getting family dynamically from database which is updated by masters

        //for getting ignore dynamically from database which is updated by masters

    }
}