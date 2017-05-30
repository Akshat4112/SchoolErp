<?php
/**
 * Created by PhpStorm.
 * User: Innvosign
 * Date: 5/30/2017
 * Time: 6:36 PM
 */
class Dashboard extends CI_Controller{
    public function index(){
        $this->load->view('dashboard/header_view');
        $this->load->view('dashboard/dashboard_view');
        $this->load->view('dashboard/footer_view');
    }
    public function logout(){
        session_destroy();
        redirect('/');
    }
}