<?php
/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 7/2/2017
 * Time: 11:35 PM
 */

class MY_Controller extends CI_Controller{
    public function delete_genric($form_validation,$table_name,$view,$field,$unset,$value_form){
        if ($this->form_validation->run($form_validation)) {
            $post = $this->input->post();
            unset($post[$unset]);
            $this->load->model('del_model', 'dm');
            $value = $post[$value_form];
            if($this->dm->delete_row($table_name,$field,$value)){
                $this->load->model('get_model', 'gm');
                $array = $this->gm->get_list($field,$table_name);
                $this->load->view('private/'.$view, ['view' => $array]);
            }else{
                echo 'Query failed in inserting record';
            }
        }
        else{
            $this->load->model('get_model', 'gm');
            $array = $this->gm->get_list($field,$table_name);
            $this->load->view('private/'.$view, ['view' => $array]);
        }
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
                $this->load->view('private/'.$view,['view'=>$array]);
            } else {
                echo 'Query failed in inserting record';
            }
        } else {
            $this->load->model('get_model', 'gm');
            $array = $this->gm->get_list($field,$table_name);
            $this->load->view('private/'.$view,['view'=>$array]);
        }
    }

}