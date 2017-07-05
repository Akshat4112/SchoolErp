<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 6/5/2017
 * Time: 10:40 AM
 */
class Time_table extends MY_Controller{
    public function index(){}
    public function time_table_view(){
        $this->load->view('dashboard/examples/time_table_view');
    }
}