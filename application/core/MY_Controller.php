<?php
/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 7/2/2017
 * Time: 11:35 PM
 */

class MY_Controller extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
//            if( ! $this->session->userdata('login_id')){
//                return redirect('home');
//                exit();
//            }
    }

    public function delete_genric($form_validation,$table_name,$view,$field,$unset,$value_form){
        if ($this->form_validation->run($form_validation)) {
            $post = $this->input->post();
            unset($post[$unset]);
            
            $value = $post[$value_form];
            if($this->delete_row($table_name,$field,$value)){
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
            $post = $this->input->post();
            unset($post['submit']);
            if ($this->insert_data($table_name,$post)) {
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

    public function dropdown_db($field,$table_name){
        $this->load->model('get_model','gm');
        return $dropdownn = $this->gm->get_list($field,$table_name);
    }

    public function get_admin(){
        $admin_id = $this->session->userdata('login_id');
        $user_name = $this->db->select('admin_name')->from('admin')->where('admin_id',$admin_id)->get();
        return $user_name->result();
    }

    public function traverse(){}
    public function get_all(){}
    public function update(){}

    public function delete_row($table_name,$field,$value){
        $this->db->where($field, $value);
        if($this->db->delete($table_name)){
            return true;
        }
    }

    public function insert_data($table_name,$array){
        return $this->db->insert($table_name,$array);
    }

    public function insert_data_key($table_name,$array,$key){
        $this->db->where('student_id', $key);
        return $this->db->update($table_name, $array);
    }
}