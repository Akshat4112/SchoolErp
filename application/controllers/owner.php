<?php

class Owner extends CI_Controller{
    public function index(){
        $this->load->view('public/header_view');
        $this->load->view('public/owner_view');
        $this->load->view('public/footer_view');

        $email = $this->input->post('ownemail');
        $password = $this->input->post('ownpass');

        $data=array('ownerEmail'=>$email,'ownerPass'=>$password);
        if($email=='akshat41121995@gmail.com' && $password=='nicola'){

        }
}
    public function get_owner(){
        $this->load->model('owner');
        $data = $this->owner->getowner();
        $this->load->view('public/login_success',$data);

    }
}