<?php
class Register extends CI_Model{
    public function __construct()
    {
        parent::__construct();
    }
    public function getowner(){
        $this->load->database();
        $data = $this->db->get('owner');
        return $data->result();

    }
}