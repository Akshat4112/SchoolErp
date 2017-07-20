<?php
/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 7/18/2017
 * Time: 1:35 PM
 */
class Del_model extends MY_Model{
    public function delete_class($class){
        $this->db->where('class', $class);
        if($this->db->delete('class')){
            return true;
        }
    }
    public function delete_row($table_name,$field){
        
    }
}