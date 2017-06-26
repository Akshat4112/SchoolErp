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
    public function student_details(){

        $this->load->library('form_validation');
        $this->form_validation->set_rules('student_first_name','First Name','required|trim');

        $this->form_validation->set_rules('student_last_name','Last Name','required|trim');
        /***

         * $this->form_validation->set_rules('student_dob','First Name','required|trim');
        $this->form_validation->set_rules('student_gender','First Name','required|trim');
        $this->form_validation->set_rules('student_category','First Name','required|trim');
        $this->form_validation->set_rules('student_caste','First Name','required|trim');
        $this->form_validation->set_rules('student_class','First Name','required|trim');
        $this->form_validation->set_rules('student_section','First Name','required|trim');
        $this->form_validation->set_rules('student_roll_no','First Name','required|trim');
        $this->form_validation->set_rules('student_route','First Name','required|trim');
        $this->form_validation->set_rules('student_house','First Name','required|trim');
        $this->form_validation->set_rules('admission_no','First Name','required|trim');
         *
         ***/

        if($this->form_validation->run()) {

            $student_first_name = $this->input->post('student_first_name');
            $student_middle_name = $this->input->post('student_middle_name');
            $student_last_name = $this->input->post('student_last_name');
            $student_dob = $this->input->post('student_dob');
            $gender = $this->input->post('gender');
            $category = $this->input->post('category');
            $caste = $this->input->post('caste');
            $student_class = $this->input->post('student_class');
            $student_section = $this->input->post('student_section');
            $student_roll_no = $this->input->post('student_roll_no');
            $route = $this->input->post('route');
            $house = $this->input->post('house');
            $student_photo = $this->input->post('student_photo');
            $admission_no = $this->input->post('admission_no');


            $data = array('student_first_name' => $student_first_name,
                'student_middle_name' => $student_middle_name,
                'student_last_name' => $student_last_name,
                'student_class' => $student_class,
                'student_section' => $student_section,
                'student_roll_no' => $student_roll_no,
                'route' => $route,
                'caste' => $caste,
                'category' => $category,
                'house' => $house,
                'student_photo' => $student_photo,
                'admission_no' => $admission_no,
                'gender' => $gender,
                'student_dob' => $student_dob
            );
            $this->db->insert('student', $data);
        }else{
            echo 'all fields required';
        }

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