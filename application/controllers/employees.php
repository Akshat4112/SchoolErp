<?php
/**
 * Created by PhpStorm.
 * User: Innvosign
 * Date: 6/5/2017
 * Time: 10:40 AM
 */
class Employees extends CI_Controller{
    public function index(){
    	$this->load->view('dashboard/examples/employees_view');
    }
    public function employee_info(){
        $this->load->view('dashboard/examples/employeeinfo_view');
    }
}