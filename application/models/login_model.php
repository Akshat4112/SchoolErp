<?php
/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 7/4/2017
 * Time: 12:49 AM
 */

class Login_model extends MY_Model
{
    public function login_valid($email, $password)
    {
        $q = $this->db->where(['admin_email' => $email, 'admin_password' => $password])
            ->get('admin');

        if ($q->num_rows() >= 1) {

            return $q->row()->admin_id;

        } else {
            return FALSE;
        }
    }
}