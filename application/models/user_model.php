<?php

class User_model extends CI_Model{

public function get_users($user_id, $username){

/*
$config['hostname']="localhost";
$config['username']="root";
$config['password']="";
$config['database']="errand_db";


$config_2['hostname']="localhost";
$config_2['username']="root";
$config_2['password']="";
$config_2['database']="errand_db";

manual connection


$connection=$this->load->database($config);
*/
//$query=$this->db->query("SELECT * FROM users");  //this db select everything from users 
//return $query->num_fields();//this helper function returns the columns 
//$this->db->where('id',$user_id);

$this->db->where([
	'id'=>$user_id,
	'username'=>$username
]);
$query= $this->db->get('users');
return $query->result();
}



public function create_users($data){

	$this->db->insert('users', $data);
}

public function update_users($data, $id){
	$this->db->where(['id'=>$id]);
	$this->db->update('users', $data);
}

public function delete_users($id){
	$this->db->where(['id'=>$id]);
	$this->db->delete('users');
}

public function login_user($username,$password){
	$this->db->where(['username'=>$username,'password'=>$password]);
	$result=$this->db->get('users');

	$db_password=$result->row(2)->password;
	
	if(password_verify($password,$db_password)){
		return $result->row(0)->id;
	}else{
		return false;
	}

}



public function create_user(){

$password=$this->input->post('password');
$encripted_pass=password_hash($password,PASSWORD_BCRYPT);


	$data=array(

		'first_name'=>$this->input->post('firstname'),
		'last_name'=>$this->input->post('lastname'),
		'email'=>$this->input->post('email'),
		'username'=>$this->input->post('username'),
		'password'=>$encripted_pass

	);
	$insert_data=$this->db->insert('users', $data);
	return $insert_data;


}

}


