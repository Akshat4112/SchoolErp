<?php
/**
 * Created by PhpStorm.
 * User: Innvosign
 * Date: 7/6/2017
 * Time: 8:04 PM
 */
class Add_model extends MY_Model{
    public function student_info($array){
        return $this->db->insert('student',$array);
    }
    public function address_details($array)
    {
        return $this->db->insert('address',$array);
    }
}