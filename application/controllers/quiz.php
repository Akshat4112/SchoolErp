<?php
/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 7/19/2017
 * Time: 1:41 PM
 */
class Quiz extends MY_Controller{
    public function __construct()
    {
        parent::__construct();
        
       
        $this->load->view('private/quiz/header',['username' => $this->get_admin()]);
        $this->load->view('private/quiz/footer');
    }
    public function index(){

    }
}