<?php
/**
 * Created by PhpStorm.
 * User: Innvosign
 * Date: 7/4/2017
 * Time: 1:01 PM
 */
class Get_header_info extends MY_Model{
    public function get_admin(){
        $admin_id = $this->session->userdata('login_id');
        $user_name = $this->db->select('admin_name')->from('admin')->where('admin_id',$admin_id)->get();
        return $user_name->result();
    }
}