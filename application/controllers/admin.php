<?php

/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 7/15/2017
 * Time: 8:27 PM
 */
class Admin extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('get_header_info','ghi');
        $username = $this->ghi->get_admin();
        $this->load->view('private/admin/header',['username'=>$username]);
        $this->load->view('private/admin/footer');
        $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
    }

    public function index()
    {

        $this->load->view('private/admin/admin_dash');
    }

    public function masters_class()
    {
        if ($this->form_validation->run('class')) {

            // for inserting class in database from model

            $this->load->model('add_model', 'am');
            $post = $this->input->post();
            unset($post['submit']);
            $table_name='class';
            if ($this->am->insert_data($table_name,$post)) {
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
        $this->load->view('private/admin/masters/class', ['det_class' => $class]);
    }


    public function masters_class_del()
    {

        //Delete Functionality to be made later...

        if ($this->form_validation->run('class_del')) {

            $post = $this->input->post();
            unset($post['del_class']);
            $this->load->model('del_model', 'dm');
            $value = $post['class_delete'];
            $table_name='class';
            $field='class';
            if($this->dm->delete_row($table_name,$field,$value)){
                $this->load->model('get_model', 'gm');
                $class = $this->gm->get_class();
                $this->load->view('private/admin/masters/class', ['det_class' => $class]);
            }
        }
        else{
            $this->load->model('get_model', 'gm');
            $class = $this->gm->get_class();
            $this->load->view('private/admin/masters/class', ['det_class' => $class]);
           }
    }


    public function masters_section()
    {
        //To be replaced with passing parameters from view dynamically
        //goal: one controller and one module for complete genric Creation.
        $form_validation='section';
        $table_name='section';
        $view='section';
        $field='section_name';
        $this->insert_genric($form_validation,$table_name,$view,$field);

        //for getting data to populate in table in masters class
        /*if ($this->form_validation->run('section')) {

            // for inserting class in database from model
            $this->load->model('add_model', 'am');
            $post = $this->input->post();
            unset($post['submit']);
            $table_name = 'section';
            if ($this->am->insert_data($table_name,$post)) {
                $this->load->model('get_model', 'gm');
                $section = $this->gm->get_section_list();
              $this->load->view('private/admin/masters/section',['sec'=>$section]);
            } else {
                echo 'Query failed in inserting record';
            }

        } else {
            $this->load->model('get_model', 'gm');
            $section = $this->gm->get_section_list();
            $this->load->view('private/admin/masters/section',['sec'=>$section]);
        }*/

    }
    public function masters_section_del()
    {
        if ($this->form_validation->run('section_del')) {
            echo '1';
            $post = $this->input->post();
            echo '1';
            unset($post['del_section']);
            echo '1';
            $this->load->model('del_model', 'dm');
            $value = $post['section_delete'];
            echo '1';
            $table_name='section';
            $field='section_name';
            if($this->dm->delete_row($table_name,$field,$value)){
                echo '1';
                $this->load->model('get_model', 'gm');
                $section = $this->gm->get_list('section_name','section');
                $this->load->view('private/admin/masters/section', ['sec' => $section]);
            }
        }
        else{
            echo '2';
            $this->load->model('get_model', 'gm');
            $section = $this->gm->get_list('section_name','section');
            $this->load->view('private/admin/masters/section', ['sec' => $section]);
        }
    }

    public function masters_caste()
    {
        $form_validation='caste';
        $table_name='caste';
        $view='caste';
        $field='caste_name';
        $this->insert_genric($form_validation,$table_name,$view,$field);


        /*if ($this->form_validation->run('caste')) {

            // for inserting class in database from model

            $this->load->model('add_model', 'am');
            $post = $this->input->post();
            unset($post['submit']);
            $table_name='caste';
            if ($this->am->insert_data($table_name,$post)) {
                $this->load->model('get_model', 'gm');
                $caste = $this->gm->get_caste_list();
                $this->load->view('private/admin/masters/caste',['cas'=>$caste]);
            } else {
                echo 'Query failed in inserting record';
            }
        } else {
            $this->load->model('get_model', 'gm');
            $caste = $this->gm->get_caste_list();
            $this->load->view('private/admin/masters/caste',['cas'=>$caste]);
        }*/

    }




    public function masters_category()
    {
        $form_validation='category';
        $table_name='category';
        $view='category';
        $field='category_name';
        $this->insert_genric($form_validation,$table_name,$view,$field);

        /*
        if ($this->form_validation->run('category')) {

            // for inserting class in database from model

            $this->load->model('add_model', 'am');
            $post = $this->input->post();
            unset($post['submit']);
            $table_name='category';
            if ($this->am->insert_data($table_name,$post)) {
                $this->load->model('get_model', 'gm');
                $category = $this->gm->get_category_list();
                $this->load->view('private/admin/masters/category',['cat'=>$category]);
            } else {
                echo 'Query failed in inserting record';
            }
        } else {
            $this->load->model('get_model', 'gm');
            $category = $this->gm->get_category_list();
            $this->load->view('private/admin/masters/category',['cat'=>$category]);
        }*/

    }
    public function masters_caste_del()
    {

    }

    public function masters_house()
    {
        if ($this->form_validation->run('house')) {

            // for inserting class in database from model

            $this->load->model('add_model', 'am');
            $post = $this->input->post();
            unset($post['submit']);
            $table_name='house';
            $field_name='house_name';
            if ($this->am->insert_data($table_name,$post)) {
                $this->load->model('get_model', 'gm');
                $house = $this->gm->get_list($field_name,$table_name);
                $this->load->view('private/admin/masters/house',['house'=>$house]);
            } else {
                echo 'Query failed in inserting record';
            }
        } else {
            $this->load->model('get_model', 'gm');
            $table_name='house';
            $field_name='house_name';
            $house= $this->gm->get_list($field_name,$table_name);
            $this->load->view('private/admin/masters/house',['house'=>$house]);
        }
    }

    public function masters_family()
    {
        $this->load->view('private/admin/masters/family');
    }

    public function route_plan()
    {
        $this->load->view('private/admin/route/route_plan');
    }

    public function route()
    {
        $this->load->view('private/admin/route/route');
    }


    public function org_info(){
        $this->load->view('private/admin/organisation_info');
    }
    public function create_user(){
        $this->load->view('private/admin/user/create_user');
    }
    public function user_profile(){
        $this->load->view('private/admin/user/user_profile');
    }
    public function enquiry(){
        $this->load->view('private/admin/enquiry');

    }
    public function bill_sundry(){
        $this->load->view('private/admin/bill_sundry');

    }
    public function shift(){
        $this->load->view('private/admin/shift');
    }
    public function standard_narration(){
        $this->load->view('private/admin/std_narration');
    }

    public function insert_genric($form_validation,$table_name,$view,$field)
    {
        if ($this->form_validation->run($form_validation)) {

            // for inserting class in database from model

            $this->load->model('add_model', 'am');
            $post = $this->input->post();
            unset($post['submit']);
            if ($this->am->insert_data($table_name,$post)) {
                $this->load->model('get_model', 'gm');
                $array = $this->gm->get_list($field,$table_name);
                $this->load->view('private/admin/masters/'.$view,['view'=>$array]);
            } else {
                echo 'Query failed in inserting record';
            }
        } else {
            $this->load->model('get_model', 'gm');
            $array = $this->gm->get_list($field,$table_name);
            $this->load->view('private/admin/masters/'.$view,['view'=>$array]);
        }
    }
}
