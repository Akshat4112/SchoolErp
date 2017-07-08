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
    public function parents_details($array)
    {
        return $this->db->insert('other_info',$array);
    }
    public function misc_details($array)
    {
        return $this->db->insert('misc_info',$array);
    }
    public function attachements_details($array)
    {
        return $this->db->insert('attachemnts',$array);
    }
    public function balance_details($array)
    {
        return $this->db->insert('old_balance',$array);
    }
    public function additional_ield()
    {
    }
}