<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Innvosign
 * Date: 5/30/2017
 * Time: 6:36 PM
 */
class Dashboard extends MY_Controller{
    public function index(){
        $this->load->model('get_header_info','ghi');
        $username = $this->ghi->get_admin();
        $this->load->view('dashboard/examples/dashboard_view',['username'=>$username]);
    }
    public function documentation()
    {
        $this->load->view('dashboard/examples/dashboards/documentation');

    }
    public function support()
    {
        $this->load->view('dashboard/examples/dashboards/support');
    }
    public function prefrences()
    {
        $this->load->view('dashboard/examples/dashboards/prefrences');
    }
    public function logout(){
        session_destroy();
        redirect('/');
    }
}