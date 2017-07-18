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
    }

    public function index()
    {

        $this->load->view('private/admin/admin_dash');
    }

    public function masters_class()
    {
        $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
        if ($this->form_validation->run('class')) {

            // for inserting class in database from model

            $this->load->model('add_model', 'am');
            $post = $this->input->post();
            unset($post['submit']);
            if ($this->am->ins_class($post)) {
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

        /*$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');

        if ($this->form_validation->run('class_del')) {

           $post = $this->input->post();
            unset($post['del']);
            print_r($post);
            $this->load->model('del_model', 'dm');
            $class = $post['class_delete'];
        }
        else{
            echo 'not run';
           }*/
        $this->load->model('get_model', 'gm');
        $class = $this->gm->get_class();
        $this->load->view('private/admin/masters/class', ['det_class' => $class]);
    }


    public function masters_section()
    {
        $this->load->view('private/admin/masters/section');
    }

    public function masters_caste()
    {
        $this->load->view('private/admin/masters/caste');
    }

    public function masters_category()
    {
        $this->load->view('private/admin/masters/category');
    }

    public function masters_house()
    {
        $this->load->view('private/admin/masters/house');
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
}