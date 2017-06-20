<?php
/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 6/5/2017
 * Time: 10:40 AM
 */
class Admissions extends CI_Controller{

    public function admissions_view(){
        $this->load->view('dashboard/examples/admissions/header_admission');
        $this->load->view('dashboard/examples/admission_view');
        $this->load->view('dashboard/examples/admissions/footer_admission');
    }
    public function application_view(){
        $this->load->view('dashboard/examples/admissions/header_admission');
        $this->load->view('dashboard/examples/admissions/application_view');
        $this->load->view('dashboard/examples/admissions/footer_admission');
    }
    public function admission_analysis_view(){
        $this->load->view('dashboard/examples/admissions/header_admission');
        $this->load->view('dashboard/examples/admissions/admission_analysis_view');
        $this->load->view('dashboard/examples/admissions/footer_admission');
    }
    public function create_admission_view(){
        $this->load->view('dashboard/examples/admissions/header_admission');
        $this->load->view('dashboard/examples/admissions/create_admission_view');
        $this->load->view('dashboard/examples/admissions/footer_admission');
    }
    public function confirm_view(){
        $this->load->view('dashboard/examples/admissions/header_admission');
        $this->load->view('dashboard/examples/admissions/confirm_view');
        $this->load->view('dashboard/examples/admissions/footer_admission');
    }
    public function application_gathering(){
        $this->load->view('dashboard/examples/admissions/header_admission');
        $this->load->view('dashboard/examples/admissions/application_gathering_view.php');
        $this->load->view('dashboard/examples/admissions/footer_admission');
    }
    public function admission_process(){
        $this->load->view('dashboard/examples/admissions/header_admission');
        $this->load->view('dashboard/examples/admissions/admission_process.php');
        $this->load->view('dashboard/examples/admissions/footer_admission');
    }
    public function done(){
        $this->load->view('dashboard/examples/admissions/header_admission');
        $this->load->view('dashboard/examples/admissions/done_view.php');
        $this->load->view('dashboard/examples/admissions/footer_admission');
    }

}