<?php
/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 7/20/2017
 * Time: 12:26 PM
 */
defined('BASEPATH') OR exit('No direct script access allowed');
class Accounts extends MY_Controller{
    public function __construct()
    {
        parent::__construct();

        // for checking if user is logged in or not.

        if( ! $this->session->userdata('login_id')){
            return redirect('home');
            exit();
        }

        $this->load->view('private/accounts/header',['username'=>$this->get_admin()]);
        $this->load->view('private/accounts/footer');
        $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
    }
    public function index(){
        $this->load->model('get_model', 'gm');
        $stu_list = $this->gm->account_list();
        $this->load->view('private/accounts/default', ['account_det' => $stu_list]);
    }

    public function account_group()
    {
        //To be replaced with passing parameters from view dynamically
        //goal: one controller and one module for complete genric Creation.
        $form_validation='account_group';
        $table_name='account_group';
        $view='accounts/account_group';
        $field='account_group_name';
        $this->insert_genric($form_validation,$table_name,$view,$field);
    }
    public function account_group_del()
    {
        if ($this->form_validation->run('account_gr_delete')) {

            $post = $this->input->post();
            unset($post['del_account_group']);
            
            $value = $post['account_group_delete'];
            $table_name='account_group';
            $field='account_group_name';
            if($this->delete_row($table_name,$field,$value)){
                $this->load->model('get_model', 'gm');
                $list= $this->gm->get_list($field,$table_name);
                $this->load->view('private/accounts/account_group',['view' => $list]);
            }
        }
        else{
            $table_name='account_group';
            $field='account_group_name';
            $this->load->model('get_model', 'gm');
            $list= $this->gm->get_list($field,$table_name);
            $this->load->view('private/accounts/account_group',['view' => $list]);
        }
    }

    public function new_account(){

        //dynamically loading account group name in dropdown
        //inserting new account info in database via new account function and model
        $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
        if ($this->form_validation->run('account')) {



            $post = $this->input->post();
            unset($post['submit']);
            
            $table_name='account';

            if ($this->insert_data($table_name,$post)) {
                $field_a='account_group_name';
                $table_name_a='account_group';
                $this->load->model('get_model','gm');
                $group= $this->gm->get_list($field_a,$table_name_a);
                $this->load->view('private/accounts/new_account',['group'=>$group]);

            } else {
                echo 'Database query error';
                $field_a='account_group_name';
                $table_name_a='account_group';
                $this->load->model('get_model','gm');
                $group= $this->gm->get_list($field_a,$table_name_a);
                $this->load->view('private/accounts/new_account',['group'=>$group]);
            }
        } else {
            $field_a='account_group_name';
            $table_name_a='account_group';
            $this->load->model('get_model','gm');
            $group= $this->gm->get_list($field_a,$table_name_a);
            $this->load->view('private/accounts/new_account',['group'=>$group]);
        }
    }
    public function account_del()
    {

        if ($this->form_validation->run('account_delete')) {

            $post = $this->input->post();
            unset($post['del_account_name']);
            
            $value = $post['account_name_delete'];
            $table_name='account';
            $field='account_name';
            if($this->delete_row($table_name,$field,$value)){
                $this->load->model('get_model', 'gm');
                $list= $this->gm->get_list($field,$table_name);
                $this->load->view('private/accounts/delete',['view' => $list]);
            }
        }
        else{
            $table_name='account';
            $field='account_name';
            $this->load->model('get_model', 'gm');
            $list= $this->gm->get_list($field,$table_name);
            $this->load->view('private/accounts/delete',['view' => $list]);
        }
    }

    public function send_sms(){
        $this->load->view('private/accounts/send_sms');
    }
    public function import(){
        $this->load->view('private/accounts/import');
    }
    public function download_pdf(){
        // Code for genrating pdf in Admissions
        $this->load->library('Pdf');
        $pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor('SchoolERP');
        $pdf->SetTitle('Admission PDF');
        $pdf->SetSubject('Admission Reports in PDF');
        $pdf->SetKeywords('ADMISSION,Report,PDF');
        $pdf->AddPage();

        // create some HTML content

        $html = '
          <p style="font-size: 15px; font-weight: bold; text-align: center">
            Admission Report
           </p>
           <hr>
           
           
           <div class="row">
    <div class="col-lg-12" id="" style="overflow-y:scroll; overflow-x:hidden; height: 400px; width:1200px;">
        <table class="table table-hover table-bordered" id="userTbl">
            <thead>
            <tr class="">
                <th>Sno.</th>
                <th>Admission No.</th>
                <th>House</th>
                <th>Student Name</th>
                <th>Father</th>
                <th>Mother</th>
                <th>DOB</th>
                <th>Gender</th>
            </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
</div>


           ';

        $pdf->writeHTML($html, true, false, true, false, 'center');
        //Close and output PDF document
        $pdf->output();

    }
    public function excel_export(){
        $this->load->model('get_model');
        $this->load->library("excel");
        $object = new PHPExcel();

        $object->setActiveSheetIndex(0);
        $table_coloums = array("Account Name","Group","Address","City","Phone","Mobile","Email","Contact Person","Birthday on");
        $coloumn=0;
        foreach ($table_coloums as $field){
            $object->getActiveSheet()->setCellValueByColumnAndRow($coloumn,1,$field);
            $coloumn++;
        }
        $this->load->model('get_model', 'gm');
        $accounts_data = $this->gm->account_list();
        $excel_row = 2;
        foreach ($accounts_data as $row){
            $object->getActiveSheet()->setCellValueByColumnAndRow(0,$excel_row,$row->account_name);
            $object->getActiveSheet()->setCellValueByColumnAndRow(1,$excel_row,$row->group_acc);
            $object->getActiveSheet()->setCellValueByColumnAndRow(2,$excel_row,$row->address);
            $object->getActiveSheet()->setCellValueByColumnAndRow(3,$excel_row,$row->city);
            $object->getActiveSheet()->setCellValueByColumnAndRow(4,$excel_row,$row->phone);
            $object->getActiveSheet()->setCellValueByColumnAndRow(5,$excel_row,$row->mobile);
            $object->getActiveSheet()->setCellValueByColumnAndRow(6,$excel_row,$row->email);
            $object->getActiveSheet()->setCellValueByColumnAndRow(7,$excel_row,$row->contact_per);
            $object->getActiveSheet()->setCellValueByColumnAndRow(8,$excel_row,$row->birthday_on);
            $excel_row++;
        }
        $object_writer =PHPExcel_IOFactory::createWriter($object,'Excel5');
        header('Content-Type:application/vnd.ms-excel');
        header('Content-Description:attachment;filename="AccounData.xls"');
        $object_writer->save('php://output');

    }
    public function labels(){
        $this->load->view('private/accounts/labels');
    }

    public function open_balance_editor()
    {
        $this->load->model('get_model', 'gm');
        $stu_list = $this->gm->account_list();
        $this->load->view('private/accounts/open_balance_editor', ['account_det' => $stu_list]);
    }
    public function delete(){
        $this->load->view('private/accounts/delete');
    }
    public function balance_sheet(){
        $this->load->view('private/accounts/final_accounts/balance_sheet');
    }
    public function contra(){
        $account = $this->dropdown_db('account_name','account');
        $this->load->view('private/accounts/financial_accounting/contra',['account'=>$account]);
    }
    public function credit_note(){
        $account = $this->dropdown_db('account_name','account');
        $this->load->view('private/accounts/financial_accounting/credit_note',['account'=>$account]);
    }
    public function debit_note(){
        $account = $this->dropdown_db('account_name','account');
        $this->load->view('private/accounts/financial_accounting/debit_note',['account'=>$account]);
    }
    public function journal(){
        $account = $this->dropdown_db('account_name','account');
        $this->load->view('private/accounts/financial_accounting/journal',['account'=>$account]);
    }
    public function outstanding_balance(){
        $this->load->view('private/accounts/final_accounts/outstanding_balance');
    }

    public function profit_loss()
    {
        $this->load->view('private/accounts/final_accounts/profit_loss');
    }
    public function receipt(){
        $account = $this->dropdown_db('account_name','account');
        $this->load->view('private/accounts/financial_accounting/receipt',['account'=>$account]);
    }
    public function trading_accounts(){
        $this->load->view('private/accounts/final_accounts/trading_account');
    }
    public function trial_balance(){
        $this->load->view('private/accounts/final_accounts/trial_balance');
    }
    public function payments(){
        $account= $this->dropdown_db('account_name','account');
        $this->load->model('get_model', 'gm');
        $table_name='payments';
        $payments_table= $this->gm->show_table($table_name);

        //getting account name dropdown
        $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');

        if ($this->form_validation->run('payments')) {
            $post = $this->input->post();
            unset($post['submit']);
            $table_name='payments';
            if ($this->insert_data($table_name,$post)) {
                $this->load->view('private/accounts/financial_accounting/payments',['account'=>$account,
                    'payments' => $payments_table]);
            } else {
                echo 'Database query error';
                $this->load->view('private/accounts/financial_accounting/payments',['account'=>$account,
                    'payments' => $payments_table]);
            }
        } else {
            $this->load->view('private/accounts/financial_accounting/payments',['account'=>$account,
                'payments' => $payments_table]);
        }
    }
    public function day_book(){
        $this->load->view('private/accounts/financial_accounting/day_book');
    }
    public function log_book(){
        $this->load->view('private/accounts/financial_accounting/log_book');
    }
    public function ledger(){
        $this->load->view('private/accounts/financial_accounting/ledger');
    }
    public function quick_payment(){
        $this->load->view('private/accounts/financial_accounting/quick_payment');
    }
    public function quick_receipt(){
        $account = $this->dropdown_db('account_name','account');
        $this->load->view('private/accounts/financial_accounting/quick_receipt',['account'=>$account]);
    }
    public function bank_entry(){
        $this->load->view('private/accounts/financial_accounting/bank_entry');
    }
    public function day_book_cum_cash_book(){
        $this->load->view('private/accounts/financial_accounting/day_book_cum_cash_book');
    }
    public function cash_bank_book()
    {
        $this->load->view('private/accounts/financial_accounting/cash_bank_book');

    }
    public function cumulative_interest(){
        $this->load->view('private/accounts/intereset_calculation/cumulative_interest');
    }
    public function bill_wise_interest_calculation(){
        $this->load->view('private/accounts/intereset_calculation/bill_wise_interest_calculation');
    }
    public function interest_on_balance(){
        $this->load->view('private/accounts/intereset_calculation/interest_on_balance');
    }
    public function simple_interest_calculation(){
        $this->load->view('private/accounts/intereset_calculation/simple_intereset_calculation');
    }
}