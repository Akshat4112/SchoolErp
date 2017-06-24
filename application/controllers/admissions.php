<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admissions extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->view('dashboard/examples/admissions/header_admission');
        $this->load->view('dashboard/examples/admissions/footer_admission');
    }

    public function index(){
        $this->load->view('dashboard/examples/admission_view');
    }

    public function create_admission_view(){
        $this->load->view('dashboard/examples/admissions/create_admission_view');
    }
    public function import(){
        $this->load->view('dashboard/examples/admissions/import_view');
    }
    public function export(){
        $this->load->view('dashboard/examples/admissions/export_view');
    }
    public function admission_form(){

        $this->load->view('dashboard/examples/admissions/admission_form_view');

    }
    public function send_sms(){

        $this->load->view('dashboard/examples/admissions/send_sms.php');

    }
    public function id_card(){

        $this->load->view('dashboard/examples/admissions/id_card.php');

    }
    public function create_list(){

        $this->load->view('dashboard/examples/admissions/create_list_view');

    }
    public function application_view(){

        $this->load->view('dashboard/examples/admissions/application_view');

    }
    public function admission_analysis_view(){

        $this->load->view('dashboard/examples/admissions/admission_analysis_view');

    }

}