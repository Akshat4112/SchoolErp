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



    }
    public function index(){
        $this->load->model('get_header_info','ghi');
        $username = $this->ghi->get_admin();
        $this->load->view('private/certificates/header',['username'=>$username]);
        $this->load->view('private/certificates/cert_view');
    }
    public function slc_new()
    {
        $this->load->model('get_header_info','ghi');
        $username = $this->ghi->get_admin();
        $this->load->view('private/certificates/slc_header',['username'=>$username]);
        $this->load->view('private/certificates/slc_new');

        $data=$this->input->post();
        unset($data['submit']);
        print_r($data);
    }
    public function entrance_test()
    {
        $this->load->model('get_header_info','ghi');
        $username = $this->ghi->get_admin();
        $this->load->view('private/certificates/et_header',['username'=>$username]);
        $this->load->view('private/certificates/entrance_test');
    }
    public function student_cert()
    {
        $this->load->model('get_header_info','ghi');
        $username = $this->ghi->get_admin();
        $this->load->view('private/certificates/sc_header',['username'=>$username]);
        $this->load->view('private/certificates/student_cert');
    }
    public function school_leaving_cert()
    {

        $this->load->model('get_header_info','ghi');
        $username = $this->ghi->get_admin();

        $this->load->library('Pdf');
        $pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
        $pdf->SetTitle('Pdf Example');
        $pdf->SetHeaderMargin(30);
        $pdf->SetTopMargin(20);
        $pdf->setFooterMargin(20);
        $pdf->SetAutoPageBreak(true);
        $pdf->SetAuthor('Author');
        $pdf->SetDisplayMode('real', 'default');
        $pdf->Write(5, 'CodeIgniter TCPDF Integration');
        $pdf->Output('pdfexample.pdf', 'I'); 


        $this->load->view('private/certificates/slc_header',['username'=>$username]);
        $this->load->view('private/certificates/school_leaving_cert');
    }
    public function teacher_cert_l()
    {
        $this->load->model('get_header_info','ghi');
        $username = $this->ghi->get_admin();
        $this->load->view('private/certificates/tcl_header',['username'=>$username]);
        $this->load->view('private/certificates/teacher_cert_l');
    }
    public function teacher_cert_p()
    {
        $this->load->model('get_header_info','ghi');
        $username = $this->ghi->get_admin();
        $this->load->view('private/certificates/tcp_header',['username'=>$username]);
        $this->load->view('private/certificates/teacher_cert_p');
    }
}