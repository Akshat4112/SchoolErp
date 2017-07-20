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
    public function other_info_details($array)
    {
        return $this->db->insert('other_info',$array);
    }
    public function misc_details($array)
    {
        return $this->db->insert('misc_info',$array);
    }
    public function attach($array)
    {
        return $this->db->insert('attachemnts',$array);
    }
    public function balance($array)
    {
        return $this->db->insert('old_balance',$array);
    }
    public function ins_class($array){
        return $this->db->insert('class',$array);
    }
    public function additional_ield()
    {
    }
    public function insert_section($array){
        return $this->db->insert('section',$array);
    }
    public function insert_caste($array){
        return $this->db->insert('caste',$array);
    }
    public function insert_category($array){
        return $this->db->insert('category',$array);
    }
    public function insert_house($array){
        return $this->db->insert('house',$array);
    }
    public function insert_family($array){
        return $this->db->insert('family',$array);
    }

}