<?php
/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 7/9/2017
 * Time: 5:27 AM
 */
class Get_model extends MY_Model
{
    public function last_admission_no()
    {
        $last_row=$this->db->select('student_id')->order_by('student_id',"desc")->limit(1)->get('student')->row();
        $array=json_decode(json_encode($last_row),true);
        $id=$array['student_id'];
        $last_amd=$this->db->where('student_id',$id)->get('student')->row();
        $arrayadm=json_decode(json_encode($last_amd),true);
        return $arrayadm['admission_no'];
    }

    public function last_student_id()
    {
        $last_row=$this->db->select('student_id')->order_by('student_id',"desc")->limit(1)->get('student')->row();
        $array=json_decode(json_encode($last_row),true);
        $id=$array['student_id'];
        return $id;
    }

    public function get_class(){
        $query = $this->db->get('class');
        $res = $query->result();
        return $res;
    }

    public function get_section_list(){
        $query = $this->db->select('section_name')->get('section');
        $res = $query->result();
        $array=json_decode(json_encode($res),true);
        return $array;
    }
    public function get_category_list(){
        $query = $this->db->select('category_name')->get('category');
        $res = $query->result();
        $array=json_decode(json_encode($res),true);
        return $array;

    }
    public function get_caste_list(){
        $query = $this->db->select('caste_name')->get('caste');
        $res = $query->result();
        $array=json_decode(json_encode($res),true);
        return $array;
    }
    public function get_house_list(){
        $query = $this->db->select('house_name')->get('house');
        $res = $query->result();
        $array=json_decode(json_encode($res),true);
        return $array;
    }
    public function get_class_list(){
        $query = $this->db->select('class')->order_by('class')->get('class');
        $res = $query->result();
        $array=json_decode(json_encode($res),true);
        return $array;
    }
    public function get_list($field,$table_name)
    {
        $query = $this->db->select($field)->get($table_name);
        $res = $query->result();
        $array=json_decode(json_encode($res),true);
        return $array;
    }
    public function fees_head_list(){

        $query = $this->db->get('fees_head');
        $res = $query->result();
        return $res;
    }
    public function route_list(){

        $query = $this->db->get('route');
        $res = $query->result();
        return $res;
    }
    public function account_list(){

        $query = $this->db->get('account');
        $res = $query->result();
        return $res;
    }
    public function show_table($table_name){
        $query = $this->db->get($table_name);
        $res = $query->result();
        return $res;

    }
    public function  admission_form_search($admission_no){
        $query=$this->db->select('*')->where('admission_no',$admission_no)->get('student');
        $res=$query->result_array();
        return $res;
    }
    public function id_card_rec($class,$section){
        $query=$this->db->select('student_first_name,student_class,student_section')->where('student_class',$class)
            ->where('student_section',$section)->get('student');
        $res=$query->result_array();
        return $res;

    }
}