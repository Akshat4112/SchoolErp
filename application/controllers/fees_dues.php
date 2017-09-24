<?php
/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 9/1/2017
 * Time: 9:03 AM
 */
class Fees_dues extends MY_Controller{
    public function __construct()
    {
        parent::__construct();

        // for checking if user is logged in or not.

        if( ! $this->session->userdata('login_id')){
            return redirect('home');
            exit();
        }

        $this->load->view('private/fees/header',['username' => $this->get_admin()]);
        $this->load->view('private/fees/footer');
        $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
    }

    public function fees_dues_class_wise(){
        $class = $this->dropdown_db('class','class');
        $section = $this->dropdown_db('section_name','section');
        $category = $this->dropdown_db('category_name','category');
        $route = $this->dropdown_db('route_name','route');

        $this->load->view('private/fees/fees_dues_list/fees_dues_list_class_wise',
            ['class'=>$class,'section'=>$section,'category'=>$category,'route'=>$route]);
    }
    public function family_wise_dues_list(){
        $this->load->view('private/fees/fees_dues_list/family_wise_dues_list');
    }
    public function fees_status_report(){
        $this->load->view('private/fees/fees_dues_list/fees_status_report');
    }
    public function fees_dues_list_detailed(){
        $class = $this->dropdown_db('class','class');
        $section = $this->dropdown_db('section_name','section');
        $category = $this->dropdown_db('category_name','category');
        $route = $this->dropdown_db('route_name','route');

        $this->load->view('private/fees/fees_dues_list/fees_dues_list_detailed',
            ['class'=>$class,'section'=>$section,'category'=>$category,'route'=>$route]);
    }
    public function fees_estimation_list(){
        $class = $this->dropdown_db('class','class');
        $this->load->view('private/fees/fees_dues_list/fees_estimation_list',['class'=>$class]);
    }
}