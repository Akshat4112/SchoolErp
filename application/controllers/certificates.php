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
        $this->load->view('private/certificates/header');
        $this->load->view('private/certificates/footer');
    }
    public function index(){
        $this->load->view('private/certificates/cert_view');
    }
    public function entrance_test()
    {

    }
    public function student_cert()
    {

    }
    public function school_leaving_cert()
    {

    }
    public function teacher_cert_l()
    {

    }
    public function teacher_cert_p()
    {

    }
}