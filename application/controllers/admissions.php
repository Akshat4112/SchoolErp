<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 6/5/2017
 * Time: 10:40 AM
 */
class Admissions extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->view('dashboard/examples/admissions/header_admission');
        $this->load->view('dashboard/examples/admissions/footer_admission');
    }

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

        $this->load->view('dashboard/examples/admissions/create_admission_view');

    }
    public function confirm_view(){

        $this->load->view('dashboard/examples/admissions/confirm_view');

    }
    public function application_gathering(){

        $this->load->view('dashboard/examples/admissions/application_gathering_view.php');

    }
    public function admission_process(){

        $this->load->view('dashboard/examples/admissions/admission_process.php');

    }
    public function done(){

        $this->load->view('dashboard/examples/admissions/done_view.php');

    }

}