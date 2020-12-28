<?php 


defined('BASEPATH') OR exit('No direct script access allowed');


class Import_model extends CI_Model{




public function get_excel(){

	$query = $this->db->get('register');
	return $query->result();


}

public function insert_Excel($arrData){
	        foreach ($arrData as $each_data){
                $data = array(
                    'excel_name' => $each_data['1'],
                    'excel_email' => $each_data['2'],
                );
                $this->db->insert('register', $data);
            }

        if ($this->db->affected_rows() > 0){
            return TRUE;
        } else {
            return FALSE;
        }
    }
}






















































 ?>