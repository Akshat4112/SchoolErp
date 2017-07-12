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
        //echo $last;
        $this->load->view('private/admissions/create_admission_view',['last_adm'=>$last]);
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
            //echo $last;
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
        }else {
            $this->load->model('get_model', 'gm');
            $last = $this->gm->last_admission_no();
            $this->load->view('private/admissions/create_admission_view',['last_adm'=>$last]);
        }
    }

    public function address_details()
    {

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
                //echo '<script>alert("Address Inserted")</script>';
                $this->load->view('private/admissions/parents');
                } else {

                /*echo for testing purpose
                echo 'insert failed'; */

                $this->load->view('private/admissions/address');
            }
        //}
    }
    public function other_info_details()
    {

        //if ($this->form_validation->run('address')) {
      $post = $this->input->post();

        $student_id=$post['student_id'];
        /*
        echo $student_id;
        echo '<pre>';
        print_r($post);
        */
        unset($post['Submit']);
        /*
        echo '<pre>';
        print_r($post);
        */
        $this->load->model('add_model', 'am');

        if ($this->am->other_info_details($post)) {
            /*echo for testing purpose
            echo 'insert successful'; */
            //echo '<script>alert("Other Info details Inserted")</script>';
            $this->load->view('private/admissions/misc');
        } else {

            /*echo for testing purpose
            echo 'insert failed'; */

            $this->load->view('private/admissions/parents');
        }
        //}

    }
    public function misc_details(){
        //if ($this->form_validation->run('address')) {
        $post = $this->input->post();

        $student_id=$post['student_id'];
        /*
        echo $student_id;
        echo '<pre>';
        print_r($post);
        */
        unset($post['Submit']);


        /*
        echo '<pre>';
        print_r($post);
        */
        $this->load->model('add_model', 'am');
        if ($this->am->misc_details($post)) {
            /*echo for testing purpose
            echo 'insert successful'; */

            $this->load->view('private/admissions/attach');
        } else {

            /*echo for testing purpose
            echo 'insert failed'; */

            $this->load->view('private/admissions/misc');
        }
        //}


    }
    public function attachment(){
        $this->load->view('private/admissions/balance');
    }
    public function balance(){
        $this->load->view('private/admissions/success_adm');
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