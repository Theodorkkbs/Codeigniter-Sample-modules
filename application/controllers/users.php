<?php



class Users extends CI_Controller{

/*
public function show($user_id){

	//$this->load->model('user_model'); //manual call
	//$result=$this->user_model->get_users();
	/*foreach($result as $value){
		echo $value->id ."<br>";
	}
*/
	/*
	$data['results']=$this->user_model->get_users($user_id, 'rico');   //epistrefoume pinaka 

	$this->load->view('user_view',$data);


}


public function insert(){

$username="peter";
$password="secret";
$this->user_model->create_users([

'username'=>$username,
'password'=>$password


]);

}

public function update(){
$id=3;
$username="willian";
$password="notSoSecret";
$this->user_model->update_users([

'username'=>$username,
'password'=>$password


],$id);

}


public function delete(){
$id=3;

$this->user_model->delete_users($id);

}
*/

public function login(){
	//echo $this->input->post('username');
	$this->form_validation->set_rules('username','Username','trim|required|min_length[3]');
	$this->form_validation->set_rules('password','Password','trim|required|min_length[3]');
	$this->form_validation->set_rules('confirm_password','Confirm Password','trim|required|min_length[3]|matches[password]');

	if($this->form_validation->run()==FALSE){
		$data=array(
			'errors'=>validation_errors()

		);

		$this->session->set_flashdata($data);
		redirect('home');
	}else{

		$username=$this->input->post('username');
		$password=$this->input->post('password');

		$user_id=$this->user_model->login_user($username,$password);
		if($user_id){

			$user_data=array(
				'user_id'=>$user_id,
				'username'=>$username,
				'logged_in'=>true


			);

			$this->session->set_userdata($user_data);
			$this->session->set_flasdata('login_success','You are now logged in');
			//redirect('admin_view');
						redirect('home/index');



		}else{
			$this->session->set_flasdata('login_failed','Sorry you are not logged in');
			redirect('home');

		}
	}


}



public function logout(){
	$this->session->sess_destroy();
	redirect('home');

}



public function register(){


	$this->form_validation->set_rules('username','Username','trim|required|min_length[3]');
	$this->form_validation->set_rules('password','Password','trim|required|min_length[3]');
	$this->form_validation->set_rules('confirm_password','Confirm Password','trim|required|min_length[3]|matches[password]');
	$this->form_validation->set_rules('firstname','First name','trim|required|min_length[3]');
	$this->form_validation->set_rules('lastname','Last name','trim|required|min_length[3]');
	$this->form_validation->set_rules('email','Email','trim|required|min_length[3]');


	if($this->form_validation->run()==FALSE){
		$data=array(
			'errors'=>validation_errors()

		);

		$data['main_view']='users/register_view';
		$this->load->view('layouts/main',$data);
	}else{

		


		if($this->user_model->register_user()){
				$this->session->set_flasdata('user_registered','User has been Registered');
					redirect('home/index');
	
		}else{
					redirect('home/index');

		}
		


		}
	}

	


}























