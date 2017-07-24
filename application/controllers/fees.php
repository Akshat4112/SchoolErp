<?php
/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 7/18/2017
 * Time: 10:30 PM
 */
class Fees extends MY_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->view('private/fees/header');
        $this->load->view('private/fees/footer');
        $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
    }
    public function fees_head()
    {
        $this->load->view('private/fees/fees_head');
    }

    public function fees_head_group()
    {
        $form_validation='fhg';
        $table_name='fees_head_group';
        $view='fees_head_group';
        $field='fees_head_group_name';
        $this->insert_genric($form_validation,$table_name,$view,$field);
    }
    public function fees_conc_sett()
    {
        $this->load->view('private/fees/fees_conc_settings');
    }
    public function fees_view(){
        $this->load->view('private/fees/fees_view');
    }
    public function fees_receipt(){
        $this->load->view('private/fees/fees_receipt');
    }
    public function fees_card(){
        $this->load->view('private/fees/fees_card');
    }
    public function fees_plan(){
        $this->load->view('private/fees/fees_plan');
    }
    public function fees_day_book(){
        $this->load->view('private/fees/fees_day_book');
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
                $this->load->view('private/fees/'.$view,['view'=>$array]);
            } else {
                echo 'Query failed in inserting record';
            }
        } else {
            $this->load->model('get_model', 'gm');
            $array = $this->gm->get_list($field,$table_name);
            $this->load->view('private/fees/'.$view,['view'=>$array]);
        }
    }
}