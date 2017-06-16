<?php
/**
 * Created by PhpStorm.
 * User: Innvosign
 * Date: 6/5/2017
 * Time: 10:40 AM
 */
class Admissions extends CI_Controller{
    public function index(){}
    public function admissions_view(){
        $this->load->view('dashboard/examples/admission_view');
    }
    public function application_view(){
        $this->load->view('dashboard/examples/admissions/application_view');
    }
    public function admission_analysis_view(){
        $this->load->view('dashboard/examples/admissions/admission_analysis_view');
    }
    public function create_admission_view(){
        $this->load->view('dashboard/examples/admissions/header_admission');
        $this->load->view('dashboard/examples/admissions/create_admission_view');
    }
}