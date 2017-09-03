<?php
/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 7/19/2017
 * Time: 1:40 PM
 */
class Library extends MY_Controller{
    public function __construct()
    {
        parent::__construct();

        // for checking if user is logged in or not.

        if( ! $this->session->userdata('login_id')){
            return redirect('home');
            exit();
        }

        $this->load->view('private/library/header',['username' => $this->get_admin()]);
        $this->load->view('private/library/footer');
    }
    public function index(){
        $this->load->view('private/library/dashboard');
    }
    public function book_issue_register(){
        $this->load->view('private/library/book_issue_register');
    }
    public function book_ledger(){
        $this->load->view('private/library/book_ledger');
    }
    public function book_receive_register(){
        $this->load->view('private/library/book_receive_register');
    }
    public function export(){
        $this->load->view('private/library/export');
    }
    public function import(){
        $this->load->view('private/library/import');
    }
    public function issue_book(){
        $this->load->view('private/library/issue_book');
    }
    public function new_book_entry(){
        $this->load->view('private/library/new_book_entry');
    }
    public function pending_books(){
        $this->load->view('private/library/pending_books');
    }
    public function prints(){
        $this->load->view('private/library/print');
    }
    public function receive_books(){
        $this->load->view('private/library/receive_book');
    }
    public function send_sms(){
        $this->load->view('private/library/send_sms');
    }
}