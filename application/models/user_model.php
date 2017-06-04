<?php

class User_model extends CI_Model{
    public function get($user_id = null){
        if($user_id === null){
            $q = $this->db->get('users');
        }else{
            $q = $this->db->get_where(['user_id'=>$user_id]);
        }
        return $q->result_array();
    }
    public function insert(){

    }
    public function update(){

    }
    public function delete(){

    }
}