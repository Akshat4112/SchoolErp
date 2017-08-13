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
        $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');

    }

    public function index()
    {
        //get name list for autocomplete functionality

        $this->load->model('student_model', 'sm');
        $stu_list = $this->sm->student_list();
        $this->load->view('private/admissions/admission_view', ['stu_det' => $stu_list]);

    }

    public function student_details()
    {

        $this->load->model('get_model', 'gm');
        $last = $this->gm->last_admission_no();


        $this->load->model('get_model', 'gm');
        $class_list = $this->gm->get_class_list();



        $fieldhouse= 'house_name';
        $table_namehouse= 'house';
        $this->load->model('get_model', 'gm');
        $house_list = $this->gm->get_list($fieldhouse, $table_namehouse);

        $fieldsec = 'section_name';
        $table_namesec = 'section';
        $this->load->model('get_model', 'gm');
        $section_list = $this->gm->get_list($fieldsec, $table_namesec);

        $fieldcat = 'category_name';
        $table_namecat = 'category';
        $this->load->model('get_model', 'gm');
        $category_list = $this->gm->get_list($fieldcat, $table_namecat);

        $fieldcast = 'caste_name';
        $table_namecast = 'caste';
        $this->load->model('get_model', 'gm');
        $caste_list = $this->gm->get_list($fieldcast, $table_namecast);


        if ($this->form_validation->run('student')) {

            $this->load->model('get_model', 'gm');
            $last = $this->gm->last_admission_no();


            $post = $this->input->post();
            unset($post['submit']);
            $this->load->model('add_model', 'am');
            $table_name = 'student';

            if ($this->am->insert_data($table_name, $post)) {
                $this->session->set_flashdata('stu_succ','General details filled Successfully.');
                $this->load->view('private/admissions/address');
            } else {
                echo 'Database query error';
                $this->load->view('private/admissions/student_details', ['last_adm' => $last,
                    'class_drop' => $class_list, 'section_drop' => $section_list, 'category_drop' => $category_list,
                    'caste_drop' => $caste_list,'house_drop'=>$house_list]);
            }
        } else {
            $this->load->model('get_model', 'gm');
            $last = $this->gm->last_admission_no();
            $this->load->view('private/admissions/create_admission_view', ['last_adm' => $last,
                'class_drop' => $class_list, 'section_drop' => $section_list, 'category_drop' => $category_list,
                'caste_drop' => $caste_list,'house_drop'=>$house_list]);
        }
    }

    /**
     *function for insert details in adress,
     * loading model get_model as gm for student id,
     * loading model add_model as am for data insertion
     */
    public function address_details()
    {


        if ($this->form_validation->run('address')) {

            /*for getting student id of last admitted student so thar it can
            *be traced for address details
            */

            $this->load->model('get_model', 'gm');
            $stu_id = $this->gm->last_student_id();

            $post = $this->input->post();
            $post['student_id'] = $stu_id;
            unset($post['submit']);
            $table_name = 'address';
            $this->load->model('add_model', 'am');
            if ($this->am->insert_data($table_name, $post)) {
                $this->session->set_flashdata('stu_succ','Address details filled Successfully.');
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



        if ($this->form_validation->run('other_info')) {
            $post = $this->input->post();
            $this->load->model('get_model', 'gm');
            $stu_id = $this->gm->last_student_id();
            $post = $this->input->post();
            $post['student_id'] = $stu_id;
            unset($post['Submit']);
            $table_name = 'other_info';

            $this->load->model('add_model', 'am');

            if ($this->am->insert_data($table_name, $post)) {
                $this->session->set_flashdata('stu_succ','Parents details filled Successfully.');
                $this->load->view('private/admissions/misc');
            } else {
                $this->load->view('private/admissions/parents');
            }
        } else {
            $this->load->view('private/admissions/parents');
        }
        //Below Part in function is for testing of other functions in same controller
        //$this->load->view('private/admissions/misc');


    }

    public function misc_details()
    {


        if ($this->form_validation->run('misc_stu_details')) {
            $post = $this->input->post();
            $this->load->model('get_model', 'gm');
            $stu_id = $this->gm->last_student_id();
            $post = $this->input->post();
            $post['student_id'] = $stu_id;
            unset($post['Submit']);
            $table_name = 'misc_info';
            $this->load->model('add_model', 'am');
            if ($this->am->insert_data($table_name, $post)) {
                $this->session->set_flashdata('stu_succ','Misc. details filled Successfully.');
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



        if ($this->form_validation->run('attach')) {
            $post = $this->input->post();
            $this->load->model('get_model', 'gm');
            $stu_id = $this->gm->last_student_id();
            $post = $this->input->post();
            $post['student_id'] = $stu_id;
            unset($post['Submit']);
            $table_name = 'attachemnts';
            $this->load->model('add_model', 'am');
            if ($this->am->insert_data($table_name, $post)) {
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


        if ($this->form_validation->run('balance')) {
            $post = $this->input->post();
            $this->load->model('get_model', 'gm');
            $stu_id = $this->gm->last_student_id();
            $post = $this->input->post();
            $post['student_id'] = $stu_id;
            unset($post['Submit']);
            $table_name = 'old_balance';
            $this->load->model('add_model', 'am');
            if ($this->am->insert_data($table_name, $post)) {
                //echo '<script>alert("Admission has been done succesfully")</script>';
                redirect('admissions/');
            } else {
                $this->load->view('private/admissions/balance');
            }
        } else {
            $this->load->view('private/admissions/balance');
        }
    }


    public function import()
    {
        $this->load->view('private/admissions/import_view');
    }

    public function export()
    {
        $this->load->model('student_model', 'sm');
        $stu_list = $this->sm->student_list();
        $this->load->view('private/admissions/export_view', ['stu_det' => $stu_list]);
    }

    public function admission_form()
    {
        if ($this->form_validation->run('adm_form')) {
            $post = $this->input->post();
            unset($post['submit']);
            $admission_no = $post['adm_no'];
            $this->load->model('get_model', 'gm');
            $stu_det = $this->gm->admission_form_search($admission_no);
            $this->load->view('private/admissions/admission_form_view', ['stu_det' => $stu_det]);
        } else {
            $this->load->model('get_model', 'gm');
            $stu_list = $this->gm->admission_form_search(0);
            $this->load->view('private/admissions/admission_form_view', ['stu_det' => $stu_list]);
        }
    }

    public function send_sms()
    {

        $this->load->view('private/admissions/send_sms.php');

    }

    public function id_card()
    {


        $field = 'class';
        $table_name = 'class';
        $this->load->model('get_model', 'gm');
        $class_list = $this->gm->get_list($field, $table_name);


        $fieldsec = 'section_name';
        $table_namesec = 'section';
        $this->load->model('get_model', 'gm');
        $section_list = $this->gm->get_list($fieldsec, $table_namesec);
        $this->load->model('get_model', 'gm');
        if ($this->form_validation->run()) {
            $class = '';
            $section = '';
            $data = $this->input->post();
            unset($data['submit']);
            print_r($data);
            $class = $data['class'];
            $section = $data['section'];

            $table_view = $this->gm->id_card_rec($class, $section);
            print_r($table_view);
            $this->load->view('private/admissions/id_card.php', ['class_drop' => $class_list, 'section_drop' => $section_list,
                'table_view' => $table_view]);
        } else {
            $table_view = $this->gm->id_card_rec(-1,-1);
            $this->load->view('private/admissions/id_card.php', ['class_drop' => $class_list, 'section_drop' => $section_list,
                'table_view' => $table_view]);
        }

    }

    public function create_list()
    {
        $this->load->view('private/admissions/create_list_view');
    }
    public function download_as_pdf()
    {

    }

}