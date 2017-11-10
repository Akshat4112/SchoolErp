<?php
/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 7/17/2017
 * Time: 8:22 PM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Attendance extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        // for checking if user is logged in or not.
        if (!$this->session->userdata('login_id')) {
            return redirect('home');
            exit();
        }

        $this->load->view('private/attendance/header.php', ['username' => $this->get_admin()]);
        $this->load->view('private/attendance/footer.php');
    }

    public function attend_view()
    {
        if ($this->form_validation->run('summary')) {
            $data = $this->input->post();
            $this->load->model('get_model', 'gm');
            $r = $this->gm->attendance_history($data['summary_on']);
//            print_r($r);
            $r1 = $this->gm->attendance_history_present($data['summary_on']);
//            print_r($r1);
            $r2 = $this->gm->attendance_history_absent($data['summary_on']);
//            print_r($r2);
            $this->load->view('private/attendance/attend_view.php', ['data' => $r, 'datap' => $r1, 'dataa' => $r2]);
        } else {
            $this->load->view('private/attendance/attend_view.php', ['data' => null]);
        }
    }

    public function summary()
    {
        if($this->form_validation->run('summary_iknow')) {
            $data = $this->input->post();
//            echo $data['admission_no'];
            $this->load->model('get_model', 'gm');
//            echo $data['from'];
//            echo $data['to'];
            $i = 0;
            $c = $data["from"];
            while ($c <= $data['to']) {
                $r[$i] = $this->gm->attendance_summary($data['admission_no'], $c);
                $c = (new DateTime($c))->add(new DateInterval("P1D"))
                    ->format('Y-m-d');

                $i++;
            }
//            print("\n");
//            print_r($r);
            $this->load->view('private/attendance/summary/Summary.php', ['data' => $r, 'i' => $i]);
        }else{
            $this->load->view('private/attendance/summary/Summary.php', ['data' => null, 'i' => null]);
        }
    }

    public function prints()
    {
        $this->load->view('private/attendance/print.php');
    }

    public function attend_new()
    {
        $this->load->model('get_model', 'gm');

        //loading section dropdown form database
        $section_list = $this->dropdown_db('section_name', 'section');

        //loading class dropdown from database
        $class_list = $this->dropdown_db('class', 'class');

        if ($this->form_validation->run('attend_new')) {
            $post = $this->input->post();
            unset($post['submit']);
            $get_data = $this->gm->attendance_search($post['class'], $post['section']);
            $this->load->view('private/attendance/new/attend_new.php', ['section_drop' => $section_list,
                'class_drop' => $class_list, 'data' => $get_data, 'date' => $post['entry_date']]);
            $this->session->set_flashdata('attendance', 'Attendance Updated Successfully.');
        } else {
            $data = array();
            $this->load->view('private/attendance/new/attend_new.php', ['section_drop' => $section_list,
                'class_drop' => $class_list, 'data' => $data]);
            $this->session->set_flashdata('attendance', 'Attendance Failed.');
        }
    }

    //for updating attendance datewise.
    public function attend_new_insert()
    {
        if ($_POST) {
            $field_array = array();
            for ($i = 0; $i < count($_POST['optradio']); $i++) {
                $field_array[$i]['optradio'] = $_POST['optradio'][$i];
                $array = explode(" ", $field_array[$i]['optradio']);
                $this->load->model('get_model', 'gm');
                $this->gm->insert_datewise_attendance($array);
                redirect('attendance/attend_new');
            }
        }
    }
    public function analytics(){
        $this->load->view('private/attendance/analytics/dashboard');
    }
}

