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
        $query = $this->db->query('SELECT *from student');
        $data['det']= $query->result_array();


        $this->load->view('dashboard/examples/admission_view',$data);
    }

    public function create_admission_view(){
        $this->load->view('dashboard/examples/admissions/create_admission_view');
    }
    public function student_details(){
        $this->load->view('dashboard/examples/admissions/create_admission_view');
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
            echo  $message['success'] =  'Student Information is successfully saved';
        }else{
            echo  $message['failed']='All Fields are Required';
            redirect('admissions/create_admission_view');

        }

    }
    public function address_details(){

        $house_no = $this->input->post('house_no');
        $street_name = $this->input->post('street_name');
        $other_info = $this->input->post('other_info');
        $zip_code = $this->input->post('zip_code');
        $city = $this->input->post('city');
        $state = $this->input->post('state');
        $country = $this->input->post('country');

        $data=array(
            'house_no'=>$house_no,
            'street_name'=>$street_name,
            'other_info'=>$other_info,
            'zip_code'=>$zip_code,
            'city'=>$city,
            'state'=>$state,
            'country'=>$country
        );

        $this->db->insert('address',$data);
    }
    public function other_info_details(){
        $fathers_first_name=$this->input->post('fathers_first_name');
        $fathers_middle_name=$this->input->post('fathers_middle_name');
        $fathers_last_name=$this->input->post('fathers_last_name');
        $f_mobile=$this->input->post('f_mobile');
        $f_qual=$this->input->post('f_qual');
        $f_occu=$this->input->post('f_qual');
        $f_dob=$this->input->post('f_dob');
        $f_photo=$this->input->post('f_photo');
        $mothers_first_name=$this->input->post('mothers_first_name');
        $mothers_middle_name=$this->input->post('mothers_middle_name');
        $mothers_last_name=$this->input->post('mothers_last_name');
        $m_mobile=$this->input->post('m_mobile');
        $m_qual=$this->input->post('m_qual');
        $m_occu=$this->input->post('m_occu');
        $m_dob=$this->input->post('m_dob');
        $m_photo=$this->input->post('m_photo');
        $parents_wedding_date=$this->input->post('parents_wedding_date');

        $data=array(
            'fathers_first_name'=>$fathers_first_name,
            'fathers_middle_name'=>$fathers_middle_name,
            'fathers_last_name'=>$fathers_last_name,
            'f_mobile'=>$f_mobile,
            'f_qual'=>$f_qual,
            'f_occu'=>$f_occu,
            'f_dob'=>$f_dob,
            'f_photo'=>$f_photo,
            'mothers_first_name'=>$mothers_first_name,
            'mothers_middle_name'=>$mothers_middle_name,
            'mothers_last_name'=>$mothers_last_name,
            'm_mobile'=>$m_mobile,
            'm_qual'=>$m_qual,
            'm_occu'=>$m_occu,
            'm_dob'=>$m_dob,
            'm_photo'=>$m_photo,
            'parents_wedding_date'=>date('dd-mm-yyyy')
            );
        $this->db->insert('other_info',$data);
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

}