<?php
/**
 * Created by PhpStorm.
 * User: Innvosign
 * Date: 6/5/2017
 * Time: 10:40 AM
 */
class Students extends CI_Controller{
    public function index(){}
    public function students_view(){
        $this->load->view('dashboard/examples/students/header_view');
        $this->load->view('dashboard/examples/students_profile_view');
        $this->load->view('dashboard/examples/students/footer');
    }
    public function create_student(){
        $this->load->view('dashboard/examples/students/header_view');
        $this->load->view('dashboard/examples/students/create_student_view');
        $this->load->view('dashboard/examples/students/footer');
    }
    public function student_profile(){
        $this->load->view('dashboard/examples/students/header_view');
        $this->load->view('dashboard/examples/students/student_profile');
        $this->load->view('dashboard/examples/students/footer');
    }
}