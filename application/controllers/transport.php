<?php
/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 7/29/2017
 * Time: 8:40 PM
 */
class Transport extends MY_Controller{
    public function __construct()
    {
        parent::__construct();

        // for checking if user is logged in or not.

        if( ! $this->session->userdata('login_id')){
            return redirect('home');
            exit();
        }

        $this->load->view('private/transport/header');
        $this->load->view('private/transport/footer');
    }
    public function index(){}
    public function route()
    {
        $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');

        if ($this->form_validation->run('route')) {

            $post = $this->input->post();
            unset($post['submit']);
            
            $table_name='route';

            if ($this->insert_data($table_name,$post)) {

                $this->load->model('get_model', 'gm');
                $rhl = $this->gm->route_list();
                $this->load->view('private/transport/route',['rhl'=>$rhl]);
            } else {
                echo 'Database query error';

                $this->load->model('get_model', 'gm');
                $rhl = $this->gm->route_list();
                $this->load->view('private/transport/route',['rhl'=>$rhl]);
            }
        } else {
            $this->load->model('get_model', 'gm');
            $rhl = $this->gm->route_list();

            $this->load->view('private/transport/route',['rhl'=>$rhl]);
        }
    }


    public function route_plan()
    {
           $post = $this->input->post();
            unset($post['submit']);
            print_r($post);
            
            $route_name='route_name';
            $table_name='route';
            $this->load->model('get_model', 'gm');
            $route_drop = $this->gm->get_list($route_name,$table_name);
            $this->load->view('private/transport/route_plan',['route_drop'=>$route_drop]);
    }
}