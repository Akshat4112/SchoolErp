<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Innvosign
 * Date: 6/5/2017
 * Time: 10:41 AM
 */
class Faculties extends CI_Controller
{
    public function stu_badges(){
        $this->load->view('dashboard/examples/faculties/header');
        $this->load->view('dashboard/examples/faculties/stu_badges');
        $this->load->view('dashboard/examples/faculties/footer');
    }
    public function subject_reg(){
        $this->load->view('dashboard/examples/faculties/header');
        $this->load->view('dashboard/examples/faculties/subject_reg');
        $this->load->view('dashboard/examples/faculties/footer');
    }
    public function dashboard(){
        $this->load->view('dashboard/examples/faculties/header');
        $this->load->view('dashboard/examples/faculties/dashboard');
        $this->load->view('dashboard/examples/faculties/footer');
    }
    public function create_sub_reg(){
        $this->load->view('dashboard/examples/faculties/header');
        $this->load->view('dashboard/examples/faculties/create_sub_reg');
        $this->load->view('dashboard/examples/faculties/footer');
    }
}