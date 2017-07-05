<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 6/5/2017
 * Time: 10:41 AM
 */
class Accounting extends MY_Controller{
    public function index(){}
    public function accounting_view(){
        $this->load->view('dashboard/examples/accounting_view');
    }
}
