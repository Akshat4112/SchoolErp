<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admissions extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('get_header_info', 'ghi');

        $username = $this->ghi->get_admin();
        $this->load->view('private/admissions/header_admission', ['username' => $username]);
        $this->load->view('private/admissions/footer_admission');

    }

    public function index()
    {

        $this->load->model('student_model', 'sm');
        $stu_list = $this->sm->student_list();
        $this->load->view('private/admissions/admission_view', ['stu_det' => $stu_list]);
    }

    public function create_admission_view()
    {
        $this->load->view('private/admissions/create_admission_view');
    }

    public function student_details()
    {
        $this->load->view('private/admissions/create_admission_view');

        $this->form_validation->set_error_delimiters('<div class="alert alert-error">', '</div>');
        if ($this->form_validation->run('student')) {

            $post = $this->input->post();
            unset($post['Submit']);

            $this->load->model('add_model', 'am');
            if ($this->am->student_info($post)) {
                /**
                 *echo for testing purpose
                 */
                //echo 'insert successful';
        //        $this->session->set_flashdata('create', 'Admission Created Successfully');
                echo '<script>alert("Student Information Inserted")</script>';
            } else {

                /**
                 *echo for testing purpose
                 */
                //echo 'insert failed';
          //      $this->session->set_flashdata('create', 'Failed');
                return redirect('admissions/create_admission_view');
            }
        }

    }
    public function address_details()
    {
        $this->load->view('private/admissions/create_admission_view');
        //if ($this->form_validation->run('address')) {

            $post = $this->input->post();
            $student_id=$post['student_id'];
            /*
            echo $student_id;
            echo '<pre>';
            print_r($post);
            */
            unset($post['submit']);
            /*
            echo '<pre>';
            print_r($post);
            */
            $this->load->model('add_model', 'am');
            if ($this->am->address_details($post)) {
                /*echo for testing purpose
                echo 'insert successful'; */
                echo '<script>alert("Address Inserted")</script>';
                } else {

                /*echo for testing purpose
                echo 'insert failed'; */

                return redirect('admissions/create_admission_view');
            }
        //}
    }



    public function import()
    {
        $this->load->view('private/admissions/import_view');
    }

    public function export()
    {
        $this->load->view('private/admissions/export_view');
    }

    public function admission_form()
    {

        $this->load->view('private/admissions/admission_form_view');

    }

    public function send_sms()
    {

        $this->load->view('private/admissions/send_sms.php');

    }

    public function id_card()
    {

        $this->load->view('private/admissions/id_card.php');

    }

    public function create_list()
    {

        $this->load->view('private/admissions/create_list_view');
    }
    public function edit_admission()
    {

    }


    public function other_info_details()
    {

    }


}