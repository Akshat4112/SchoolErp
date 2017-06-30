<?php
/**
 * Created by PhpStorm.
 * User: Innvosign
 * Date: 6/30/2017
 * Time: 12:38 PM
 */
class Test extends CI_Model{
    public function get_data(){

        $q= $this->db->query("SELECT *from student");
        return $q->result_array();


    }
}