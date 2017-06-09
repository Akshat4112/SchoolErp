<?php
/**
 * Created by PhpStorm.
 * User: Innvosign
 * Date: 6/5/2017
 * Time: 10:40 AM
 */
class Students extends CI_Controller{
    public function index(){}
    public function students_view(){
        $this->load->view('dashboard/examples/students_view');
    }
}