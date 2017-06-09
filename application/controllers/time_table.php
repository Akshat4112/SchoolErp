<?php
/**
 * Created by PhpStorm.
 * User: Innvosign
 * Date: 6/5/2017
 * Time: 10:40 AM
 */
class Time_table extends CI_Controller{
    public function index(){}
    public function time_table_view(){
        $this->load->view('dashboard/examples/time_table_view');
    }
}