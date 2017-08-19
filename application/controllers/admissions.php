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
        $sort_col_1=$data['sort_col_1']='';
        $sort_col_2=$data['sort_col_2']='';
        $sort_col_3=$data['sort_col_3']='';

        $sort_type_1=$data['sort_type_1']='';
        $sort_type_2=$data['sort_type_2']='';
        $sort_type_3=$data['sort_type_3']='';

        $this->load->model('student_model', 'sm');
        $data = $this->input->post();
        unset($data['submit']);
//        print_r($data);

        if ($this->form_validation->run('sort_admission')) {
            $table_name = 'student';
            $sort_col_1=$data['sort_col_1'];
            $sort_col_2=$data['sort_col_2'];
            $sort_col_3=$data['sort_col_3'];

            $sort_type_1=$data['sort_type_1'];
            $sort_type_2=$data['sort_type_2'];
            $sort_type_3=$data['sort_type_3'];

            if($data['sort_type_3']==''){
                if($data['sort_type_2']=='') {

                    $stu_list = $this->sm->order_by_one($sort_col_1,$sort_type_1,$table_name);
                    $this->load->view('private/admissions/admission_view', ['stu_det' => $stu_list]);

                }
                else {
                    echo '1';
//                    $stu_list = $this->sm->order_by_one($table_name, $sort_col_1, $sort_type_1, $sort_col_2, $sort_type_2
//                        , $sort_col_3, $sort_type_3);
//                    $this->load->view('private/admissions/admission_view', ['stu_det' => $stu_list]);
                }
            }else{
                echo '2';
//                $stu_list = $this->sm->order_by_one($table_name,$sort_col_1,$sort_type_1,$sort_col_2,$sort_type_2,
//                    $sort_col_3,$sort_type_3);
//                $this->load->view('private/admissions/admission_view', ['stu_det' => $stu_list]);
            }
        }else{
            //echo 'failed';
            $stu_list = $this->sm->student_list();
            $this->load->view('private/admissions/admission_view', ['stu_det' => $stu_list]);
        }
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

        $this->load->model('get_model', 'gm');
        $last = $this->gm->last_admission_no();

        if ($this->form_validation->run('student')) {

            $post = $this->input->post();
            unset($post['submit']);
            $table_name = 'student';
            $this->load->model('add_model','am');
            if ($this->am->insert_data($table_name, $post)) {
                $this->session->set_flashdata('stu_succ', 'General details filled Successfully.');
                $this->load->view('private/admissions/address');
                //print_r($_POST['si']);
            }else{
                echo 'DB Query Error';
            }
        } else {
                $this->load->view('private/admissions/create_admission_view', ['last_adm' => $last,
                'class_drop' => $class_list, 'section_drop' => $section_list, 'category_drop' => $category_list,
                'caste_drop' => $caste_list,'house_drop'=>$house_list]);
        }
    }

    /*
     *function for insert details in adress,
     * loading model get_model as gm for student id,
     * loading model add_model as am for data insertion
     */

    public function address_details()
    {
        $this->load->model('get_model', 'gm');
        $last_student_id = $this->gm->last_student_id();

        if ($this->form_validation->run('address')) {

            $post = $this->input->post();
            $table_name = 'student';

            unset($post['submit']);

            $this->load->model('add_model', 'am');
            if ($this->am->insert_data_key($table_name,$post,$last_student_id)) {
                $this->session->set_flashdata('stu_succ','Address details filled Successfully.');
                $this->load->view('private/admissions/parents');
            } else {
                $this->load->view('private/admissions/address');
            }
        } else {
            $this->load->view('private/admissions/address');
        }
    }

    public function other_info_details()
    {
        $this->load->model('get_model', 'gm');
        $last_student_id = $this->gm->last_student_id();

        if ($this->form_validation->run('other_info')) {
            $post = $this->input->post();
            unset($post['Submit']);

            $table_name = 'student';

            $this->load->model('add_model', 'am');

            if ($this->am->insert_data_key($table_name, $post,$last_student_id)) {
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
        $this->load->model('get_model', 'gm');
        $student_id = $this->gm->last_student_id();

        if ($this->form_validation->run('misc_stu_details')) {
            $post = $this->input->post();

            $post = $this->input->post();
            unset($post['Submit']);

            $table_name = 'student';
            $this->load->model('add_model', 'am');
            if ($this->am->insert_data_key($table_name, $post,$student_id)) {
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
        $this->load->model('get_model', 'gm');
        $student_id = $this->gm->last_student_id();


        if ($this->form_validation->run('attach')) {
            $post = $this->input->post();

            $post = $this->input->post();
            unset($post['Submit']);

            $table_name = 'student';
            $this->load->model('add_model', 'am');
            if ($this->am->insert_data_key($table_name, $post,$student_id)) {
                $this->session->set_flashdata('stu_succ','Attachements updated filled Successfully.');
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
        $this->load->model('get_model', 'gm');
        $student_id = $this->gm->last_student_id();

        if ($this->form_validation->run('balance')) {

            $post = $this->input->post();
            unset($post['Submit']);

            $table_name = 'student';
            $this->load->model('add_model', 'am');
            if ($this->am->insert_data_key($table_name, $post,$student_id)) {
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
        $section_list = $this->gm->get_list($fieldsec, $table_namesec);


        if ($this->form_validation->run('id_card')) {
            $class = '';
            $section = '';
            $data = $this->input->post();
            unset($data['submit']);

            $class = $data['class'];
            $section = $data['section'];

            $table_view = $this->gm->id_card_rec($class, $section);
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
    public function search_view(){

        $search_col_1=$data['search_col_1']='';
        $search_col_2=$data['search_col_2']='';
        $search_col_3=$data['search_col_3']='';

        $sb1=$data['sb1']='';
        $sb2=$data['sb2']='';
        $sb3=$data['sb3']='';

        $this->load->model('student_model', 'sm');
        $data = $this->input->post();
        unset($data['submit']);
//        print_r($data);

        if ($this->form_validation->run('search_admission')) {
            $table_name = 'student';
            $search_col_1=$data['search_col_1'];
            $search_col_2=$data['search_col_2'];
            $search_col_3=$data['search_col_3'];

            $sb1=$data['sb1'];
            $sb2=$data['sb2'];
            $sb3=$data['sb3'];

            if($data['sb3']==''){
                if($data['sb2']==''){

                    $stu_list = $this->sm->search_one($table_name,$search_col_1,$sb1);
                    $this->load->view('private/admissions/admission_view', ['stu_det' => $stu_list]);

                }else {
                    $stu_list = $this->sm->search_two($table_name, $search_col_1, $sb1, $search_col_2, $sb2
                        , $search_col_3, $sb3);
                    $this->load->view('private/admissions/admission_view', ['stu_det' => $stu_list]);
                }
            }else{
                $stu_list = $this->sm->search_three($table_name,$search_col_1,$sb1,$search_col_2,$sb2,
                    $search_col_3,$sb3);
                $this->load->view('private/admissions/admission_view', ['stu_det' => $stu_list]);
            }
        }else{
            //echo 'failed';
            $stu_list = $this->sm->student_list();
            $this->load->view('private/admissions/admission_view', ['stu_det' => $stu_list]);
        }
    }
    public function export()
    {
        $this->load->model('student_model', 'sm');
        $stu_list = $this->sm->student_list();
        $this->load->view('private/admissions/export_view', ['stu_det' => $stu_list]);
    }
    public function excel_export(){
        $this->load->model('student_model');
        $this->load->library("excel");
        $object = new PHPExcel();

        $object->setActiveSheetIndex(0);
        $table_coloums = array("Admission No.","Student Name","Fathers Name","Mothers Name",
            "Class","Section","Roll No.","DOB","Contact No.","Route","Scholarship No.","Old Balance");
        $coloumn=0;
        foreach ($table_coloums as $field){
            $object->getActiveSheet()->setCellValueByColumnAndRow($coloumn,1,$field);
            $coloumn++;
        }
        $this->load->model('student_model', 'sm');
        $student_data = $this->sm->student_list();
        $excel_row = 2;
        foreach ($student_data as $row){
            $object->getActiveSheet()->setCellValueByColumnAndRow(0,$excel_row,$row->admission_no);
            $object->getActiveSheet()->setCellValueByColumnAndRow(1,$excel_row,$row->student_first_name);
            $object->getActiveSheet()->setCellValueByColumnAndRow(2,$excel_row,$row->fathers_first_name);
            $object->getActiveSheet()->setCellValueByColumnAndRow(3,$excel_row,$row->mothers_first_name);
            $object->getActiveSheet()->setCellValueByColumnAndRow(4,$excel_row,$row->student_class);
            $object->getActiveSheet()->setCellValueByColumnAndRow(5,$excel_row,$row->student_section);
            $object->getActiveSheet()->setCellValueByColumnAndRow(6,$excel_row,$row->student_roll_no);
            $object->getActiveSheet()->setCellValueByColumnAndRow(7,$excel_row,$row->student_dob);
            $object->getActiveSheet()->setCellValueByColumnAndRow(8,$excel_row,$row->f_mobile);
            $object->getActiveSheet()->setCellValueByColumnAndRow(9,$excel_row,$row->route);
            $object->getActiveSheet()->setCellValueByColumnAndRow(10,$excel_row,$row->scholarship_no);
            $object->getActiveSheet()->setCellValueByColumnAndRow(11,$excel_row,$row->fees_balance);
            $excel_row++;
        }
        $object_writer =PHPExcel_IOFactory::createWriter($object,'Excel5');
        header('Content-Type:application/vnd.ms-excel');
        header('Content-Description:attachment;filename="AccounData.xls"');
        $object_writer->save('php://output');
    }
}