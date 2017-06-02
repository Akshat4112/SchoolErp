<?php
/**
 * Created by PhpStorm.
 * User: Innvosign
 * Date: 5/30/2017
 * Time: 6:36 PM
 */
class Dashboard extends CI_Controller{
    public function index(){
        
        $this->load->view('dashboard/examples/dashboard_view');

    }
    public function admission_view(){
    	$this->load->view('dashboard/examples/admission_view');
    }
    public function logout(){
        session_destroy();
        redirect('/');
    }
}