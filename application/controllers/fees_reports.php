<?php
/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 8/9/2017
 * Time: 12:39 AM
 */
class Fees_reports extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();

        // for checking if user is logged in or not.

        if (!$this->session->userdata('login_id')) {
            return redirect('home');
            exit();
        }


        $this->load->view('private/fees/header', ['username' => $this->get_admin()]);
        $this->load->view('private/fees/footer');
        $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
    }

    public function balance_fees_report()
    {
//        $data=$this->input->post();
//        print_r($data);
        $this->load->view('private/fees/fees_reports/balance_fees_report');
    }
    public function fees_head_summary()
    {
        $this->load->view('private/fees/fees_reports/fees_head_summary');
    }

    public function fees_concc_settingsI()
    {
        $this->load->view('private/fees/fees_reports/fees_concc_settings');
    }

    public function defaulter_list()
    {
        $this->load->view('private/fees/fees_reports/defaulter_list');
    }

    public function receipt_book()
    {
        $this->load->view('private/fees/fees_reports/receipt_book');
    }

    public function fees_day_book()
    {
        $this->load->view('private/fees/fees_reports/fees_day_book');
    }

    public function fees_summary_date_wise()
    {
        $this->load->view('private/fees/fees_reports/fees_summary_date_wise');
    }

    public function fees_head_wise_concc_report()
    {
        $this->load->view('private/fees/fees_reports/fees_head_wise_concc_report');
    }

    public function concc_register()
    {
        $this->load->view('private/fees/fees_reports/concc_register');
    }

    /**
     *function for fees_monthly summary
     */
    public function fees_monthly_summary()
    {
        //dropdown for fees head
        $this->load->model('get_model', 'gm');

        $drop = $this->dropdown_db('fees_heading', 'fees_head');

        $this->load->view('private/fees/fees_reports/fees_monthly_summary',
            ['fees_head' => $drop]);
    }

    public function yearly_fees_receivable_report()
    {
        //dropdown for class
        $this->load->model('get_model', 'gm');

        $field = 'class';
        $table_name = 'class';
        $class = $this->gm->get_list($field, $table_name);

        //dropdown for section
        $field_sec = 'section_name';
        $table_name_sec = 'section';
        $section = $this->gm->get_list($field_sec, $table_name_sec);

        $this->load->view('private/fees/fees_reports/yearly_fees_receivable_report', ['class' => $class, 'section' => $section]);
    }

    public function head_wise_collection()
    {

        //dropdown for fees head
        $this->load->model('get_model', 'gm');

        $field = 'fees_heading';
        $table_name = 'fees_head';
        $fees_head = $this->gm->get_list($field, $table_name);

        //dropdown for class
        $field_cla = 'class';
        $table_name_cla = 'class';
        $class = $this->gm->get_list($field_cla, $table_name_cla);

        $this->load->view('private/fees/fees_reports/head_wise_collection', ['fees_head' => $fees_head, 'class' => $class]);
    }

    public function fees_group_ledger()
    {
        //dropdown for fees head group
        $this->load->model('get_model', 'gm');

        $field = 'fees_head_group_name';
        $table_name = 'fees_head_group';
        $fhgn = $this->gm->get_list($field, $table_name);

        $this->load->view('private/fees/fees_reports/fees_group_ledger', ['fhgn' => $fhgn]);
    }

    public function fees_structure()
    {
        //dropdown for class
        $this->load->model('get_model', 'gm');

        $field = 'class';
        $table_name = 'class';
        $class = $this->gm->get_list($field, $table_name);

        //dropdown for category
        $field_cat = 'category_name';
        $table_name_cat = 'category';
        $category = $this->gm->get_list($field_cat, $table_name_cat);

        //dropdown for route
        $field_rou = 'route_name';
        $table_name_rou = 'route';
        $route = $this->gm->get_list($field_rou, $table_name_rou);

        $this->load->view('private/fees/fees_reports/fees_structure', ['class' => $class, 'category' => $category, 'route' => $route]);
    }

    public function fees_category_concc_wise()
    {
        //dropdown for category
        $this->load->model('get_model', 'gm');

        $field_cat = 'category_name';
        $table_name_cat = 'category';
        $category = $this->gm->get_list($field_cat, $table_name_cat);

        $this->load->view('private/fees/fees_reports/fees_category_concc_wise', ['category' => $category]);
    }

    public function fees_receipt_register()
    {
//        $this->load->model('get_model', 'gm');
//        $data = $this->input->post();
//        unset($data['submit']);
//        $from = $data['from'];
//        $to = $data['to'];
////        echo $from;
////        echo $to;
//        $table = $this->gm->fees_receipt_register_double_where($from, $to);
////        $adm_no=$table['admission_no'];
////        echo $adm_no;
//        echo '<pre>';
//        print_r($table);
        $this->load->view('private/fees/fees_reports/fees_receipt_register');
    }
}