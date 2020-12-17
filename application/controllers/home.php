<?php




class home extends CI_Controller{


	public function index(){

		if($this->session->userdata('logged_in')){

			$user_id=$this->userdata('user_id');

			$data['projects']=$this->task_model->get_all_projects($user_id);
			$data['tasks']=$this->project_model->get_all_tasks($user_id);

		}

		$data['main_view']="home_view";
		$this->load->view('layouts/main',$data);
	}
}