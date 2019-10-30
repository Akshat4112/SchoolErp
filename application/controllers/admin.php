<?php
/*
 * Created by PhpStorm.
 * User: Akshat
 * Date: 7/15/2017
 * Time: 8:27 PM
 */

/* this is a test comment. */

defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();

        // for checking if user is logged in or not.

        if( ! $this->session->userdata('login_id')){
            return redirect('home');
            exit();
        }


        $this->load->view('private/admin/header',['username'=>$this->get_admin()]);
        $this->load->view('private/admin/footer');
        $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
    }
    public function index()
    {

        $this->load->view('private/admin/admin_dash');
    }
    public function masters_class()
    {
        $drop = $this->dropdown_db('class','class');

        if ($this->form_validation->run('class')) {
            // for inserting class in database from model
            
            $post = $this->input->post();
            unset($post['submit']);
            $table_name='class';
            if ($this->insert_data($table_name,$post)) {
                //  $this->load->view('private/admin/masters/class');
            } else {
                echo 'Query failed in inserting record';
            }
        } else {
            //$this->load->view('private/admin/masters/class');
        }
        //for getting data to populate in table in masters class
        $this->load->model('get_model', 'gm');
        $class = $this->gm->get_class();
        $this->load->view('private/admin/masters/class', ['det_class' => $class,'dropdown'=>$drop]);
    }


    public function masters_class_del()
    {
        $drop = $this->dropdown_db('class','class');
        //Delete Functionality to be made later...

        if ($this->form_validation->run('class_del')) {
            $post = $this->input->post();
            unset($post['del_class']);
            
            $value = $post['class_delete'];
            $table_name='class';
            $field='class';
            if($this->delete_row($table_name,$field,$value)){
                $this->load->model('get_model', 'gm');
                $class = $this->gm->get_class();
                $this->load->view('private/admin/masters/class', ['det_class' => $class,'dropdown'=>$drop]);
            }
        }
        else{
            $this->load->model('get_model', 'gm');
            $class = $this->gm->get_class();
            $this->load->view('private/admin/masters/class', ['det_class' => $class,'dropdown'=>$drop]);
           }
    }


    public function masters_section()
    {
        //To be replaced with passing parameters from view dynamically
        //goal: one controller and one module for complete genric Creation.
        $form_validation='section';
        $table_name='section';
        $view='admin/masters/section';
        $field='section_name';
        $this->insert_genric($form_validation,$table_name,$view,$field);
    }
    public function masters_section_del()
    {
        $form_validation='section_del';
        $table_name='section';
        $view='admin/masters/section';
        $field='section_name';
        $unset='del_section';
        $value_form='section_delete';
        $this->delete_genric($form_validation,$table_name,$view,$field,$unset,$value_form);
    }

    public function masters_caste()
    {
        $form_validation='caste';
        $table_name='caste';
        $view='admin/masters/caste';
        $field='caste_name';
        $this->insert_genric($form_validation,$table_name,$view,$field);
    }
    public function masters_caste_del(){

        $form_validation='caste_del';
        $table_name='caste';
        $view='admin/masters/caste';
        $field='caste_name';
        $unset='del_caste';
        $value_form='caste_delete';
        $this->delete_genric($form_validation,$table_name,$view,$field,$unset,$value_form);
    }

    public function masters_category()
    {
        $data=$this->input->post();
        unset($data['caste_delete']);
        $form_validation='category';
        $table_name='category';
        $view='admin/masters/category';
        $field='category_name';
        $this->insert_genric($form_validation,$table_name,$view,$field);
    }
    public function masters_category_del(){
        $form_validation='category_del';
        $table_name='category';
        $view='admin/masters/category';
        $field='category_name';
        $unset='del_category';
        $value_form='category_delete';
        $this->delete_genric($form_validation,$table_name,$view,$field,$unset,$value_form);
    }
    public function masters_house()
    {
        $data=$this->input->post();
        unset($data['house_delete']);
        $form_validation='house';
        $table_name='house';
        $view='admin/masters/house';
        $field='house_name';
        $this->insert_genric($form_validation,$table_name,$view,$field);
    }
    public function masters_house_del()
    {
        $form_validation='house_del';
        $table_name='house';
        $view='admin/masters/house';
        $field='house_name';
        $unset='del_house';
        $value_form='house_delete';
        $this->delete_genric($form_validation,$table_name,$view,$field,$unset,$value_form);
    }

    public function masters_family()
    {
        $data=$this->input->post();
        unset($data['family_delete']);
        $form_validation='family';
        $table_name='family';
        $view='admin/masters/family';
        $field='family_name';
        $this->insert_genric($form_validation,$table_name,$view,$field);
    }
    public function masters_family_del(){
        $form_validation='family_del';
        $table_name='family';
        $view='admin/masters/family';
        $field='family_name';
        $unset='del_family';
        $value_form='family_delete';
        $this->delete_genric($form_validation,$table_name,$view,$field,$unset,$value_form);
    }
    public function org_info(){
        $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
        if ($this->form_validation->run('organisation_info')) {

            $post = $this->input->post();
            unset($post['submit']);
            
            $table_name='organisation_info';

            if ($this->insert_data($table_name,$post)) {
                $this->load->view('private/admin/organisation_info');
            } else {
                echo 'Database query error';
                $this->load->view('private/admin/organisation_info');
            }
        } else {
            $this->load->view('private/admin/organisation_info');
        }

    }
    public function create_user(){
        $this->load->view('private/admin/user/create_user');
    }
    public function user_profile(){
        $this->load->view('private/admin/user/user_profile');
    }

    public function enquiry(){

        $this->load->view('private/admin/enquiry/enquiry_header');
        $this->load->view('private/admin/enquiry/enquiry');
        $this->load->view('private/admin/enquiry/enquiry_footer');

    }
    public function bill_sundry(){
        $account = $this->dropdown_db('account_name','account');
        $this->load->view('private/admin/bill_sundry',['account'=>$account]);

    }
    public function shift(){
        $this->load->view('private/admin/shift');
    }
    public function standard_narration(){
        $this->load->view('private/admin/std_narration');
    }
    public function items(){
        $this->load->view('private/admin/misc/items');
    }
    public function set(){
        $this->load->view('private/admin/misc/set');
    }
    public function document_template(){
        $this->load->view('private/admin/misc/document_template');
    }
    public function cw_strength(){
        $this->load->model('get_model','gm');
        $sm = $this->gm->student_list();
        $this->load->view('private/admin/cw_strength',['sm'=>$sm]);
    }
    public function class_report(){

        //for dynamic dropdown of class
        $class_list = $this->dropdown_db('class','class');

        //for dynamic dropdown of section
        $section_list = $this->dropdown_db('section_name','section');

        //for dynamic dropdown of category
        $category_list = $this->dropdown_db('category_name','category');

        $data = $this->input->post();
        unset($data['submit']);
        //print_r($data);
        $this->load->view('private/admin/class_report',['class'=>$class_list,
            'section'=>$section_list,
            'category'=>$category_list]);
    }
}
