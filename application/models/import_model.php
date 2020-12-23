<?php 




class Import_model extends CI_Model{




public function get_excel(){

	$query = $this->db->get('register');
	return $query->result();


}




}

















































 ?>