<?php

/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 7/19/2017
 * Time: 1:40 PM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Certificates extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');

    }

    public function index()
    {
        $this->load->view('private/certificates/header', ['username' => $this->get_admin()]);
        $this->load->view('private/certificates/cert_view');
        $this->load->view('private/certificates/footer');
    }

    public function slc_new()
    {
        $this->load->model('get_model','gm');
        $org_info = $this->gm->org_info_cert();
//        print_r($org_info);
        $name = $org_info[0]['name'];

        $data = $this->input->post();
        unset($data['submit']);
        //print_r($data);

        if ($this->form_validation->run('sln')) {

            //inserting data in database for dashboard view
            $this->insert_data('student_leaving_certificate',$data);


            // Code for genrating pdf in school leaving certificate
            $this->load->library('Pdf');
            $pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
            $pdf->SetCreator(PDF_CREATOR);
            $pdf->SetAuthor('SchoolERP');
            $pdf->SetTitle('Transfer Certificate');
            $pdf->SetSubject('TC');
            $pdf->SetKeywords('TC,School Leaving');
            $pdf->AddPage();

            // create some HTML content
            $html = '
            <div style="font-size: 12px;">
            <i>School Code: 871238<br>
            Dise Code&nbsp;&nbsp; : 127392</i>
            </div>
            
            <p style="font-size: 25px; font-weight: bold; text-align: center">
            '.$name.'
            Simpkins Senior Secondary School<br>
            Maruti Estate, Shahganj Agra-282010
            </p>
            
            <p style="font-size: 20px; text-align: center; font-weight: bold;">
            Transfer Certificate
            </p>
            <p style="font-size: 15px;">
                This is to certify that <b>' . $data['name'] . '</b> Son of Mr. <b>' . $data['f_name'] . '</b>
                and Mrs.<b> ' . $data['m_name'] . '</b> was reading in class <b>' . $data['class'] . '</b> of the
                school <b>' . $data['school_name'] . '</b> .He has ended school from <b>' . $data['end_date'] . '</b> to
                <b>' . $data['start_date'] . '</b> having paid all fees dues to school.
            </p>
            <p style="font-size: 15px;">
                According to Admission Register his Date of birth (In Figures)<b> ' . $data['dob'] . '</b>,
                In Words <b>' . $data['dob_words'] . '</b>.
            </p>
            <p style="font-size: 15px;">
                He has been vaccinated or immunized against smll pox. Details of last examination passed by him are as follows
                 :--
            </p>
            <p style="font-size: 15px;">
                Class <b>' . $data['class_present'] . '</b> Medium English, Year <b>' . $data['year'] . '</b>.
                He was admitted to this school in class <b>' . $data['start_class'] . '</b>.He belongs to <b>' . $data['caste_name'] . '</b>
                caste.
            </p>
            <p style="font-size: 15px;">
            He possess a good character.<br><br>
            Presently he is promoted to class --<br><br>
            His attendance is above average.<br>
            </p>
            <p style="font-size: 15px; text-align: right;">
                Principal
            </p>';

            $pdf->writeHTML($html, true, false, true, false, 'center');
            //Close and output PDF document
            $pdf->output();
        } else {
            $this->load->view('private/certificates/school_leaving/slc_header', ['username' => $this->get_admin()]);
            $this->load->view('private/certificates/school_leaving/slc_new',['org_info'=>$org_info]);
//        echo 'Form Validation Failed';
        }
    }

    public function entrance_test()
    {
        $this->load->view('private/certificates/enterance_test/header', ['username' => $this->get_admin()]);
        $this->load->view('private/certificates/enterance_test/dashboard');
    }

    public function student_cert()
    {
        $this->load->view('private/certificates/sc_header', ['username' => $this->get_admin()]);
        $this->load->view('private/certificates/student_cert');
    }

    public function dashboard()
    {
        $this->load->model('get_model','gm');
        $table = $this->gm->show_table('student_leaving_certificate');
        //print_r($table);

        $this->load->view('private/certificates/school_leaving/slc_header', ['username' => $this->get_admin()]);
        $this->load->view('private/certificates/school_leaving/dashboard',['dash'=>$table]);
        $this->load->view('private/certificates/school_leaving/footer');
        
    }

    public function teacher_cert_l()
    {
        $this->load->view('private/certificates/tcl_header', ['username' => $this->get_admin()]);
        $this->load->view('private/certificates/teacher_cert_l');
    }

    public function teacher_cert_p()
    {
        $this->load->view('private/certificates/tcp_header', ['username' => $this->get_admin()]);
        $this->load->view('private/certificates/teacher_cert_p');
    }

    public function delete_sl()
    {
        $this->load->view('private/certificates/school_leaving/delete_sl');
    }

    public function print_list()
    {
        echo 'print list view';
    }
    public function ent_new()
    {

    }
    public function delete_ent()
    {

    }
}