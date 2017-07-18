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
}