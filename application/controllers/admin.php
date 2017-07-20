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
        $this->load->view('private/admin/header');
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
            $class_del = $post['class_delete'];
            if($this->dm->delete_class($class_del)){
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
        //for getting data to populate in table in masters class

        if ($this->form_validation->run('section')) {

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
        }

    }
    public function masters_section_del()
    {

    }

    public function masters_caste()
    {
        if ($this->form_validation->run('caste')) {

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
        }
    }

    public function masters_category()
    {
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
        }
    }

    public function masters_house()
    {
        if ($this->form_validation->run('house')) {

            // for inserting class in database from model

            $this->load->model('add_model', 'am');
            $post = $this->input->post();
            unset($post['submit']);
            $table_name='house';
            if ($this->am->insert_data($table_name,$post)) {
                $this->load->model('get_model', 'gm');
                $house = $this->gm->get_house_list();
                $this->load->view('private/admin/masters/house',['house'=>$house]);
            } else {
                echo 'Query failed in inserting record';
            }
        } else {
            $this->load->model('get_model', 'gm');
            $house= $this->gm->get_house_list();
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

    public function fees_head()
    {
        $this->load->view('private/admin/fees/fees_head');
    }

    public function fees_head_group()
    {
        $this->load->view('private/admin/fees/fees_head_group');
    }

    public function fees_plan()
    {
        $this->load->view('private/admin/fees/fees_plan');
    }

    public function fees_conc_sett()
    {
        $this->load->view('private/admin/fees/fees_conc_settings');
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
}