<?php
/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 8/9/2017
 * Time: 12:39 AM
 */
class Fees_reports extends MY_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('get_header_info','ghi');
        $username = $this->ghi->get_admin();
        $this->load->view('private/fees/header',['username'=>$username]);
        $this->load->view('private/fees/footer');
        $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
    }

    public function balance_fees_report(){
        $this->load->view('private/fees/fees_reports/balance_fees_report');
    }
}