<?php
/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 7/28/2017
 * Time: 1:00 PM
 */
class Export extends MY_Model
{
    public function fetch_data()
    {
        $this->db->select('*');
        $query = $this->db->get('account');
        return $query->result_array();
    }
}

