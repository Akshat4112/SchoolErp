<?php
/**
 * Created by PhpStorm.
 * User: Innvosign
 * Date: 6/30/2017
 * Time: 12:37 PM
 */
class Testis extends MY_Controller{
    public function index(){}
    public function abc(){
        $this->load->model('student_model','sm');
        $stu_list = $this->sm->student_list();
        //echo '<pre>';
        //print_r($stu_list);
        $this->load->view('dashboard/examples/admission_view',['stu_det'=>$stu_list]);

    }
}