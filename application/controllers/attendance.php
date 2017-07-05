<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 6/5/2017
 * Time: 10:41 AM
 */
class Attendance extends MY_Controller{
    public function index(){}
    public function attendance_view(){
        $this->load->view('dashboard/examples/attendance_view');
    }
    public function Attendance_sheets_view(){
        $this->load->view('dashboard/examples/attendance/attendance_sheets_view');
    }
    public function Attendance_lines_view(){
        $this->load->view('dashboard/examples/attendance/attendance_lines_view');
    }
}