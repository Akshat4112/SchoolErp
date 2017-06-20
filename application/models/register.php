<?php
class Register extends CI_Model{
    public function __construct()
    {
        parent::__construct();
    }
    public function insert($tablename,$data){
        $insert = $this->db->insert($tablename,$data);

    }
}