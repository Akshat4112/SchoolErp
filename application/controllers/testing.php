<?php
/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 6/30/2017
 * Time: 12:37 PM
 */
class Testis extends MY_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->view('private/admin/header');
        $this->load->view('private/admin/footer');
        $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
    }

    public function insert_genric($form_validation,$table_name,$view,$field)
    {
        if ($this->form_validation->run($form_validation)) {

            // for inserting class in database from model

            
            $post = $this->input->post();
            unset($post['submit']);
            if ($this->insert_data($table_name,$post)) {
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