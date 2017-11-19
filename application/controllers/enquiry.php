<?php
/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 8/6/2017
 * Time: 1:35 PM
 */
defined('BASEPATH') OR exit('No direct script access allowed');
class Enquiry extends MY_Controller{
    public function __construct()
    {
        parent::__construct();

        // for checking if user is logged in or not.

        if( ! $this->session->userdata('login_id')){
            return redirect('home');
            exit();
        }
        $this->load->view('private/enquiry/header',['username' => $this->get_admin()]);
        $this->load->view('private/enquiry/footer');
        $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
    }
    public function index(){
        $this->load->view('private/enquiry/enquiry');
    }
    public function summary()
    {
        $data = $this->input->post();
            $this->load->model('get_model', 'gm');
         $i = 0;
            $c = $data["from"];
            while ($c <= $data['to']) {
                $r[$i] = $this->gm->enquiry_summary( $c);
                $c = (new DateTime($c))->add(new DateInterval("P1D"))
                    ->format('Y-m-d');

                $i++;
            }
            print_r($r);
            $this->load->view('private/enquiry/enquiry.php', ['data' => $r, 'i' => $i]);
    }
    public function new(){
        $this->load->view('private/enquiry/new');
    }
    public function submit()
    {
        $post = $this->input->post();
        unset($post['submit']);
        print_r($post);
        $date = date('Y-m-d');
        print $date;
        $post['date'] = $date;
        $this->load->model('insert_model','im');
        $this->im->submit_enquiry($post);
    }
    public function print(){}


    public function export(){}
    public function sms(){}
    public function download_pdf(){}
}