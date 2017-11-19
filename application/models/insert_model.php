<?php

class Insert_model extends MY_Model
{
	public function insert_fees_plan($data)
	{
		

		foreach ($data['category_name'] as $category ) {
			foreach ($data['class'] as $class) {
				
		$this->db->insert('fees_plan',array('fees_heading'=>$data['fees_heading'],'value'=>$data['fees_value'],'category'=>$category,'class'=>$class));
	}
}
	}

	public function submit_enquiry($data)
	{
		$this->db->insert('enquiry',$data);

	}

}

?>