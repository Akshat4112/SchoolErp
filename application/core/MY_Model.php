<?php
/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 7/2/2017
 * Time: 11:40 PM
 */
class MY_Model extends CI_Model{
    public function insert_data($table_name,$array){
        return $this->db->insert($table_name,$array);
    }
}