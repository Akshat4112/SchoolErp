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
        $this->load->model('get_model', 'gm');
        $last = $this->gm->last_admission_no();
        $this->load->view('private/admissions/create_admission_view', ['last_adm' => $last]);
    }

    /**
     *Function getting information from general from student information,
     * form validation is in student in config,
     * model add_model inserts the data using student_info in database in student table
     **/

    public function student_details()
    {


        $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
        if ($this->form_validation->run('student')) {

            $this->load->model('get_model', 'gm');
            $last = $this->gm->last_admission_no();
            //$this->load->view('private/admissions/create_admission_view',['last_adm'=>$last]);

            $post = $this->input->post();
            unset($post['submit']);
            $this->load->model('add_model', 'am');


            if ($this->am->student_info($post)) {
                $this->load->view('private/admissions/address');
            } else {
                    echo 'Database query error';
                    $this->load->view('private/admissions/create_admission_view',['last_adm'=>$last]);
           }
        } else {
            $this->load->model('get_model', 'gm');
            $last = $this->gm->last_admission_no();
            $this->load->view('private/admissions/create_admission_view',['last_adm'=>$last]);
        }

        //Below Part in function is for testing of other functions in same controller
        //$this->load->view('private/admissions/address');
    }

    /**
     *function for insert details in adress,
     * loading model get_model as gm for student id,
     * loading model add_model as am for data insertion
     */
    public function address_details()
    {

        $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
        if ($this->form_validation->run('address')) {

            /*for getting student id of last admitted student so thar it can
            *be traced for address details
            */

                    $this->load->model('get_model', 'gm');
                    $stu_id = $this->gm->last_student_id();

                    $post = $this->input->post();
                    $post['student_id'] = $stu_id;
                    unset($post['submit']);

                    $this->load->model('add_model', 'am');
                    if ($this->am->address_details($post)) {
                        $this->load->view('private/admissions/parents');
                    } else {
                        $this->load->view('private/admissions/address');
                    }
                } else {
                    $this->load->view('private/admissions/address');
                }
        //Below Part in function is for testing of other functions in same controller
        //$this->load->view('private/admissions/parents');

    }

    public function other_info_details()
    {

        $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');

        if ($this->form_validation->run('other_info')) {
        $post = $this->input->post();
        $this->load->model('get_model', 'gm');
        $stu_id = $this->gm->last_student_id();
        $post = $this->input->post();
        $post['student_id'] = $stu_id;
        unset($post['Submit']);


        $this->load->model('add_model', 'am');

        if ($this->am->other_info_details($post)) {

            $this->load->view('private/admissions/misc');
        } else {
            $this->load->view('private/admissions/parents');
        }
        }else{
            $this->load->view('private/admissions/parents');
        }
        //Below Part in function is for testing of other functions in same controller
        //$this->load->view('private/admissions/misc');


    }

    public function misc_details()
    {
        $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');

        if ($this->form_validation->run('misc_stu_details')) {
            $post = $this->input->post();
            $this->load->model('get_model', 'gm');
            $stu_id = $this->gm->last_student_id();
            $post = $this->input->post();
            $post['student_id'] = $stu_id;
            unset($post['Submit']);
            $this->load->model('add_model', 'am');
            if ($this->am->misc_details($post)) {
                $this->load->view('private/admissions/attach');
            } else {
                $this->load->view('private/admissions/misc');
            }
        } else {
            $this->load->view('private/admissions/misc');
        }
        //Below Part in function is for testing of other functions in same controller
        //$this->load->view('private/admissions/attach');
    }

    public function attachment()
    {

        $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');

        if ($this->form_validation->run('attach')) {
            $post = $this->input->post();
            $this->load->model('get_model', 'gm');
            $stu_id = $this->gm->last_student_id();
            $post = $this->input->post();
            $post['student_id'] = $stu_id;
            unset($post['Submit']);
            $this->load->model('add_model', 'am');
            if ($this->am->attach($post)) {
                $this->load->view('private/admissions/balance');
            } else {
                $this->load->view('private/admissions/attach');
            }
        } else {
            $this->load->view('private/admissions/attach');
        }

        //Below Part in function is for testing of other functions in same controller
        //$this->load->view('private/admissions/balance');
    }

    public function balance()
    {
        $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');

        if ($this->form_validation->run('balance')) {
            $post = $this->input->post();
            $this->load->model('get_model', 'gm');
            $stu_id = $this->gm->last_student_id();
            $post = $this->input->post();
            $post['student_id'] = $stu_id;
            unset($post['Submit']);
            $this->load->model('add_model', 'am');
            if ($this->am->balance($post)) {
                echo '<script>alert("Admission has been done succesfully")</script>';
                redirect('dashboard/');
            } else {
                $this->load->view('private/admissions/balance');
            }
        } else {
            redirect('dashboard/');
        }
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
}