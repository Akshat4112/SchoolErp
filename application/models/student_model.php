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
        $res = $query->result();
        return $res;
    }
    public function order_by($field_name,$by,$table_name){

        $query = $this->db->order_by($field_name,$by)->get($table_name);
        $res = $query->result();
        return $res;
    }
}