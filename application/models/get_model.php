<?php
/**
 * Created by PhpStorm.
 * User: Akshat
 * Date: 7/9/2017
 * Time: 5:27 AM
 */
class Get_model extends MY_Model
{
    public function last_admission_no()
    {
        $last_row=$this->db->select('student_id')->order_by('student_id',"desc")->limit(1)->get('student')->row();
        $array=json_decode(json_encode($last_row),true);
        $id=$array['student_id'];
        $last_amd=$this->db->where('student_id',$id)->get('student')->row();
        $arrayadm=json_decode(json_encode($last_amd),true);
        return $arrayadm['admission_no'];
    }

    public function last_student_id()
    {
        $last_row=$this->db->select('student_id')->order_by('student_id',"desc")->limit(1)->get('student')->row();
        $array=json_decode(json_encode($last_row),true);
        $id=$array['student_id'];
        return $id;
    }

    public function get_class(){
        $query = $this->db->get('class');
		//And this for all methods
		if($query->num_rows() > 0) {
			$res = $query->result();
			return $res;
		}
    }

    public function get_section_list(){
        $query = $this->db->select('section_name')->get('section');
        $res = $query->result();
        $array=json_decode(json_encode($res),true);
        return $array;
    }
    public function get_category_list(){
        $query = $this->db->select('category_name')->get('category');
        $res = $query->result();
        $array=json_decode(json_encode($res),true);
        return $array;

    }
    public function get_caste_list(){
        $query = $this->db->select('caste_name')->get('caste');
        $res = $query->result();
        $array=json_decode(json_encode($res),true);
        return $array;
    }
    public function get_house_list(){
        $query = $this->db->select('house_name')->get('house');
        $res = $query->result();
        $array=json_decode(json_encode($res),true);
        return $array;
    }
    public function get_class_list(){
        $query = $this->db->select('class')->order_by('class')->get('class');
        $res = $query->result();
        $array=json_decode(json_encode($res),true);
        return $array;
    }
    public function get_list($field,$table_name)
    {
        $query = $this->db->select($field)->get($table_name);
        $res = $query->result();
        $array=json_decode(json_encode($res),true);
        return $array;
    }
    public function fees_head_list(){

        $query = $this->db->get('fees_head');
        $res = $query->result();
        return $res;
    }
    public function route_list(){

        $query = $this->db->get('route');
        $res = $query->result();
        return $res;
    }
    public function account_list(){

        $query = $this->db->get('account');
        $res = $query->result();
        return $res;
    }
    public function student_list(){

        $query = $this->db->query('select *from student');
        $res = $query->result();
        return $res;
    }
    public function show_table($table_name){
        $query = $this->db->get($table_name);
        $res = $query->result();
        return $res;

    }
    public function  admission_form_search($admission_no){
        $query=$this->db->select('*')->where('admission_no',$admission_no)->get('student');
        $res=$query->result_array();
        return $res;
    }
    public function id_card_rec($class,$section){
        $query=$this->db->select('student_first_name,student_class,student_section')->where('student_class',$class)
            ->where('student_section',$section)->get('student');
        $res=$query->result_array();
        return $res;

    }
    public function  attendance_search($class,$section){
        $query=$this->db->select('*')->where('student_class',$class)->where('student_section',$section)
            ->get('student');
        $res=$query->result_array();
        return $res;
    }
    public function insert_datewise_attendance($data)
    { 
        $insert = array(
                'date' => $data[4],
                'class' => $data[2],
                'section' =>$data[3],
                'student_id' =>$data[1],
                'status' =>$data[0],
            );
        $this->db->insert('attendance',$insert);
    }

    public function attendance_history($data)
    {
        $query = $this->db->select('count(status)')
                            ->select('class')
                            ->select('section')
                            //->select('status')
                            ->where('date',$data)
                            ->group_by(array("class","section"))
                            //->having('date',$data)
                            ->get('attendance');
                            //->group_by("class");
        $res = $query->result_array();
        return $res;//[0]['count(status)'];
         //return $query->num_rows();
    }

        public function attendance_history_present($data)
    {
        $query = $this->db->select('count(status)')
                            ->select('class')
                            ->select('section')
                            ->where('date',$data)
                            ->where('status',"P")
                            ->group_by(array("class","section"))
                            ->get('attendance');
        $res = $query->result_array();
        return $res;
    }

            public function attendance_history_absent($data)
    {
        $query = $this->db->select('count(status)')
                            ->select('class')
                            ->select('section')
                            ->where('date',$data)
                            ->where('status',"A")
                            ->group_by(array("class","section"))
                            ->get('attendance');
        $res = $query->result_array();
        return $res;
    }

    public function attendance_summary($si,$date)
    {   
        $query = $this->db->select('date')
                            ->select('status')
                            ->where('student_id',$si)
                            ->where('date',$date)
                            ->get('attendance');
        $res = $query->result_array();
        return $res;
    }
    public  function  org_info_cert()
    {
        $query = $this->db->select('name')
            ->select('address_1')
            ->select('address_2')
        ->select('city')
            ->select('dise_code')
            ->select('school_code')
            ->where('org_id',4)
        ->get('organisation_info');
        $res = $query->result_array();
        return $res;
    }
    public function get_fees_plan()
    {
        $query = $this->db->select('*')
                            ->get('fees_plan');
        $res = $query->result_array();
        return $res;
    }

    public function fees_structure($data)
    {
        $query = $this->db->select('value')
                            ->select('fees_heading')
                            ->where('category',$data['catrgory'])
                            ->where('class',$data['class'])
                            ->get('fees_plan');
        $res = $query->result_array();
        //return $res;
        $i =0;
        foreach ($res as $r) {
        $query = $this->db->select('frequency')
                            ->where('fees_heading',$r['fees_heading'])
                            ->select('january')
                            ->select('february')
                            ->where('january','1')
                            ->where('february','1')
                            ->get('fees_head');
        $result = $query->result_array();

        $new[$i] = $result;
        $new[$i]['value']=$r['value'];
        $i++;
        //print_r($result);
        }
        return $new;
    }
    public function enquiry_summary($date)
    {   
        $query = $this->db->select('enquiry_no')
                            ->select('class')
                            //->where('student_id',$si)
                            ->where('date',$date)
                            ->get('enquiry');
        $res = $query->result_array();
        return $res;
    }
    public function get_fees_plan_reciept($data)
    {
        $query = $this->db->select("*")
                        ->where('class',$data[0]['student_class'])
                        ->where('category',$data[0]['category'])
                        ->get('fees_plan');
        $res = $query->result_array();
        return $res;
    }
}
