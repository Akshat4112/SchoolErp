<?php
/**
 * Created by PhpStorm.
 * User: Innvosign
 * Date: 7/6/2017
 * Time: 8:04 PM
 */
class Add_model extends MY_Model{
    public function insert_data($table_name,$array){
        return $this->db->insert($table_name,$array);
    }
}