<?php
/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 7/4/2017
 * Time: 11:35 AM
 */
class Student_model extends MY_Model {
    public function student_list(){

        $query = $this->db->get('student');
        $res = $query->result();
        return $res;
    }
    public function get_attachements(){

    }
    public function get_student_address(){

    }
    public function get_student_details(){

    }
    public function get_other_info(){

    }
    public function get_old_balance(){

    }
    public function get_misc_info(){

    }
    public function get_balance_student(){

    }
}