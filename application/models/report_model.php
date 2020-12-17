<?php 




class Report_model extends CI_Model{




public function get_reports(){

	$query = $this->db->get('tblgoals');
	return $query->result();


}



public function create_report($data){


	$insert_query=$this->db->insert('tblgoals',$data);
	return $insert_query;

}





























}

















































 ?>