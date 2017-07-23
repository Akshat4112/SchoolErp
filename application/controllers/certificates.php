<?php
/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 7/19/2017
 * Time: 1:40 PM
 */
class Certificates extends MY_Controller{
    public function __construct()
    {
        parent::__construct();

        $this->load->view('private/certificates/footer');
    }
    public function index(){
        $this->load->view('private/certificates/header');
        $this->load->view('private/certificates/cert_view');
    }
    public function slc_new()
    {
        $this->load->view('private/certificates/slc_header');
        $this->load->view('private/certificates/slc_new');
    }
    public function entrance_test()
    {
        $this->load->view('private/certificates/et_header');
        $this->load->view('private/certificates/entrance_test');
    }
    public function student_cert()
    {
        $this->load->view('private/certificates/sc_header');
        $this->load->view('private/certificates/student_cert');
    }
    public function school_leaving_cert()
    {
        $this->load->view('private/certificates/slc_header');
        $this->load->view('private/certificates/school_leaving_cert');
    }
    public function teacher_cert_l()
    {
        $this->load->view('private/certificates/tcl_header');
        $this->load->view('private/certificates/teacher_cert_l');
    }
    public function teacher_cert_p()
    {
        $this->load->view('private/certificates/tcp_header');
        $this->load->view('private/certificates/teacher_cert_p');
    }
}