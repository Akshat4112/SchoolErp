<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Class Admissions
 */
class Admissions extends MY_Controller
{


    public function __construct()
    {
        parent::__construct();

        // for checking if user is logged in or not.

        if( ! $this->session->userdata('login_id')){
            return redirect('home');
            exit();
        }

        $this->load->view('private/admissions/header_admission', ['username' => $this->get_admin()]);
        $this->load->view('private/admissions/footer_admission');
        $this->form_validation->set_error_delimiters('<div class="">', '</div>');

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
  //      print_r($data);

        if ($this->form_validation->run('sort_admission')) {
            $table_name = 'student';
            $sort_col_1=$data['sort_col_1'];
            $sort_col_2=$data['sort_col_2'];
            $sort_col_3=$data['sort_col_3'];

            $sort_type_1=$data['sort_type_1'];
            $sort_type_2=$data['sort_type_2'];
            $sort_type_3=$data['sort_type_3'];

//            if($data['sort_type_3']==''){
//                if($data['sort_type_2']=='') {

                    $stu_list = $this->sm->order_by_one($sort_col_1,$sort_type_1,$table_name);
                    $this->load->view('private/admissions/admission_view', ['stu_det' => $stu_list]);
//                }
//                else {
//                    echo '1';
//                    $stu_list = $this->sm->order_by_one($table_name, $sort_col_1, $sort_type_1, $sort_col_2, $sort_type_2
//                        , $sort_col_3, $sort_type_3);
//                    $this->load->view('private/admissions/admission_view', ['stu_det' => $stu_list]);
//                }
//            }else{
//                echo '2';
//                $stu_list = $this->sm->order_by_one($table_name,$sort_col_1,$sort_type_1,$sort_col_2,$sort_type_2,
//                    $sort_col_3,$sort_type_3);
//                $this->load->view('private/admissions/admission_view', ['stu_det' => $stu_list]);
//            }
        }else{
//            echo 'failed';
            $stu_list = $this->sm->student_list();
            $this->load->view('private/admissions/admission_view', ['stu_det' => $stu_list]);
        }
        $this->session->set_flashdata('Item',$stu_list);
    }

    public function student_details()
    {
        $configs = [
            'upload_path' => ' ./uploads',
            'allowed_types' => 'png|jpg|gif|jpeg'
        ];
        $this->load->library('upload',$configs);

        $this->load->model('get_model', 'gm');
        $last = $this->gm->last_admission_no();
        $class_list = $this->dropdown_db('class','class');
        $house_list = $this->dropdown_db('house_name', 'house');
        $section_list = $this->dropdown_db('section_name', 'section');
        $category_list = $this->dropdown_db('category_name','category');
        $caste_list = $this->dropdown_db('caste_name', 'caste');

        $this->load->model('get_model', 'gm');
        $last = $this->gm->last_admission_no();

        if ($this->form_validation->run('student') /*&& $this->upload->do_upload()*/) {

            $post = $this->input->post();
            unset($post['submit']);
            $table_name = 'student';
            if ($this->insert_data($table_name, $post)) {
                $this->session->set_flashdata('stu_succ', 'General details filled Successfully.');
                $this->load->view('private/admissions/address');
                //print_r($_POST['si']);
            }else{
                echo 'DB Query Error';
            }
        } else {
            $upload_error = $this->upload->display_errors();
                $this->load->view('private/admissions/create_admission_view', ['last_adm' => $last,
                'class_drop' => $class_list, 'section_drop' => $section_list, 'category_drop' => $category_list,
                'caste_drop' => $caste_list,'house_drop'=>$house_list],compact('upload_error'));
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
            if ($this->insert_data_key($table_name,$post,$last_student_id)) {
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



            if ($this->insert_data_key($table_name, $post,$last_student_id)) {
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

            if ($this->insert_data_key($table_name, $post,$student_id)) {
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

            if ($this->insert_data_key($table_name, $post,$student_id)) {
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

            if ($this->insert_data_key($table_name, $post,$student_id)) {
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
        $var = $this->session->flashdata('Item');
        print_r($var);

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

    /*
     * for generating ID Cards in PDF format
     * data is loading from function id_card which represents the
     * information currently generated depending on input of User.
     */

    public function id_generate(){
        $table_view = '';
    }

    public function download_pdf()
    {
            // Code for genrating pdf in Admissions
            $this->load->library('Pdf');
            $pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
            $pdf->SetCreator(PDF_CREATOR);
            $pdf->SetAuthor('SchoolERP');
            $pdf->SetTitle('Admission PDF');
            $pdf->SetSubject('Admission Reports in PDF');
            $pdf->SetKeywords('ADMISSION,Report,PDF');
            $pdf->AddPage();
            $var = $this->session->flashdata('Item');

            // create some HTML content

            $html = '
          <p style="font-size: 15px; font-weight: bold; text-align: center">
            Admission Report
           </p>
           <hr>
           
           <div class="row">
    <div class="col-lg-12" id="" style="overflow-y:scroll; overflow-x:hidden; height: 400px; width:1200px;">
        <table class="table table-hover table-bordered" id="userTbl">
            <thead>
            <tr class="">
                <th>Sno.</th>
                <th>Admission No.</th>
                <th>House</th>
                <th>Student Name</th>
                <th>Father</th>
                <th>Mother</th>
                <th>DOB</th>
                <th>Gender</th>
            </tr>
            </thead>
            <tbody>';
            if(count($var)):
                $count =0;
                foreach ($var as $student_det): 
                    $html .='<tr class="">
                        <td>'.++$count.'</td>
                        <td>'.$student_det['admission_no'] .'</td>
                        <td>' .$student_det['house'] .'</td>
                        <td>' .$student_det['student_first_name'] .'</td>
                        <td>' . $student_det['fathers_first_name'] .'</td>
                        <td>' .$student_det['mothers_first_name'] .'</td>
                        <td>' .$student_det['student_dob'] .'</td>
                        <td>' . $student_det['gender'] .'</td>
                    </tr>';
                endforeach; 
             else: 
                $html .='<tr>
                    <td>No Records Found</td>
                </tr>';
            endif;
           $html .='</tbody>
        </table>
    </div>
</div>


           ';

            $pdf->writeHTML($html, true, false, true, false, 'center');
            //Close and output PDF document
            $pdf->output();


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
        $this->session->set_flashdata('Item',$stu_list);
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
            $object->getActiveSheet()->setCellValueByColumnAndRow(0,$excel_row,$row['admission_no']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(1,$excel_row,$row['student_first_name']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(2,$excel_row,$row['fathers_first_name']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(3,$excel_row,$row['mothers_first_name']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(4,$excel_row,$row['student_class']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(5,$excel_row,$row['student_section']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(6,$excel_row,$row['student_roll_no']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(7,$excel_row,$row['student_dob']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(8,$excel_row,$row['f_mobile']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(9,$excel_row,$row['route']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(10,$excel_row,$row['scholarship_no']);
            $object->getActiveSheet()->setCellValueByColumnAndRow(11,$excel_row,$row['fees_balance']);
            $excel_row++;
        }
        $object_writer =PHPExcel_IOFactory::createWriter($object,'Excel5');
        header('Content-Type:application/vnd.ms-excel');
        header('Content-Description:attachment;filename="AccounData.xls"');
        $object_writer->save('php://output');
    }
    public function edit($var){
        $admission_no =  $var;
        $this->load->model('get_model','gm');
        $data = $this->gm->admission_form_search($admission_no);
        $this->load->view('private/admissions/edit/create_admission_view',["data"=>$data]);

    }
    public function edit_student_details(){
        $data = $this->input->post();
        unset($data['submit']);
        print_r($data);
    }
    public function analysis(){
    }
}