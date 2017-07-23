<?php
/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 7/18/2017
 * Time: 1:35 PM
 */
class Del_model extends MY_Model{
    public function delete_row($table_name,$field,$value){
        $this->db->where($field, $value);
        if($this->db->delete($table_name)){
            return true;
        }
    }
}