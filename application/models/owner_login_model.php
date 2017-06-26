<?php
class Owner_login_model extends CI_Model{
    public function __construct()
    {
        parent::__construct();
    }
    public function valid_login($email,$password)
    {
        $q= $this->db->where(['ownerEmail'=>$email,'ownerPass'=>$password])
            ->get('owner');
        if($q->num_rows())
        {
            return $q->row()->ownerId;
        }
        else
        {
            return false;
        }
    }
}