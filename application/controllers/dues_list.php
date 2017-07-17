<?php
/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 7/17/2017
 * Time: 1:16 PM
 */
class Dues_list extends MY_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->view('private/dues_list/header');
        $this->load->view('private/dues_list/footer');
    }

    public function dues_lis(){
        $this->load->view('private/dues_list/dues_list');
    }

}