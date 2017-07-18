<?php
/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 7/18/2017
 * Time: 1:35 PM
 */
class Del_model extends MY_Model{
    public function del_class($class){
        $this->db->where('class', $class);
        $this->db->where('class');
    }
}