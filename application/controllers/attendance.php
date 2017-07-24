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
        $this->load->model('get_header_info','ghi');
        $username = $this->ghi->get_admin();
        $this->load->view('private/attendance/header.php',['username'=>$username]);
        $this->load->view('private/attendance/footer.php');

    }
    public function attend_view(){
        $this->load->view('private/attendance/attend_view.php');
    }
    public function attend_new(){
        echo 'Hello';
    }
}