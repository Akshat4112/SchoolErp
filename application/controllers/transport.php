<?php

/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 7/29/2017
 * Time: 8:40 PM
 */
class Transport extends MY_Controller
{
    public function __construct()
    {
        // for checking if user is logged in or not.
        parent::__construct();
        if (!$this->session->userdata('login_id')) {
            return redirect('home');
            exit();
        }
        $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
        $this->load->view('private/transport/header', ['username' => $this->get_admin()]);
        $this->load->view('private/transport/footer');
    }

    public function index()
    {
        $this->load->model('get_model', 'gm');
        $rhl = $this->gm->route_list();
        $this->load->view('private/transport/dashboard', ['rhl' => $rhl]);
    }

    public function route()
    {
        if ($this->form_validation->run('route')) {

            $post = $this->input->post();
            unset($post['submit']);
//            print_r($post);

            $table_name = 'route';
            if($post==null){
                $post=0;
            }
            if ($this->insert_data($table_name, $post)) {

                $this->load->model('get_model', 'gm');
                $rhl = $this->gm->route_list();
                $this->load->view('private/transport/route', ['rhl' => $rhl]);
            } else {
                echo 'Database query error';
                $this->load->model('get_model', 'gm');
                $rhl = $this->gm->route_list();
                $this->load->view('private/transport/route', ['rhl' => $rhl]);
            }
        } else {
            $this->load->model('get_model', 'gm');
            $rhl = $this->gm->route_list();
            $this->load->view('private/transport/route', ['rhl' => $rhl]);
        }
    }

    public function route_plan()
    {
        $post = $this->input->post();
        unset($post['submit']);
        //print_r($post);
        $route_drop = $this->dropdown_db('route_name', 'route');
        $this->load->view('private/transport/route_plan', ['route_drop' => $route_drop]);
    }
    public function settings()
    {
        $this->load->view('private/transport/settings');
    }
}