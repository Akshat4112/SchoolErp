<?php
/**
 * Created by PhpStorm.
 * User: Innvosign
 * Date: 6/30/2017
 * Time: 12:37 PM
 */
class Testis extends CI_Controller{
    public function index(){}
    public function abc(){
        $this->load->model('test');
        $data['user'] = $this->test->get_data();
        echo '<pre>';
         print_r($data);

        $this->load->view('test_view',$data);
    }
}