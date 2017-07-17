<?php
/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 7/17/2017
 * Time: 8:22 PM
 */
class Attendance extends MY_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->view('private/attendance/footer.php');
        $this->load->view('private/attendance/header.php');
    }
    public function attend_view(){
        $this->load->view('private/attendance/attend_view.php');
    }
}