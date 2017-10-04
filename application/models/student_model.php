<?php
/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 7/4/2017
 * Time: 11:35 AM
 */
class Student_model extends MY_Model {
    public function student_list(){
        $query = $this->db->order_by('student_first_name','ASC')->get('student');
        $res = $query->result_array();
        return $res;
    }
    public function order_by_one($field_name,$by,$table_name){
        $query = $this->db->order_by($field_name,$by)->get($table_name);
        $res = $query->result_array();
        return $res;
    }
    public function order_by_two($field_name,$by,$table_name){
        $query = $this->db->order_by($field_name,$by)->get($table_name);
        $res = $query->result_array();
        return $res;
    }
    public function order_by_three($field_name,$by,$table_name){
        $query = $this->db->order_by($field_name,$by)->get($table_name);
        $res = $query->result_array();
        return $res;
    }
    public function search_one($table_name,$search_col_1,$sb1){
        $query = $this->db->select('*')->where($search_col_1,$sb1)->get($table_name);
        $res = $query->result_array();
        return $res;
    }
    public function search_two($table_name,$search_col_1,$sb1,$search_col_2,$sb2){
        $query = $this->db->select('*')->where($search_col_1,$sb1)->where($search_col_2
        ,$sb2)->get($table_name);
        $res = $query->result_array();
        return $res;
    }
    public function search_three($table_name,$search_col_1,$sb1,$search_col_2,$sb2,$search_col_3,$sb3){
        $query = $this->db->select('*')->where($search_col_1,$sb1)->where($search_col_2
            ,$sb2)->where($search_col_3,$sb3)->get($table_name);
        $res = $query->result_array();
        return $res;
    }
}