<?php 


class Reports extends CI_Controller{



public function index(){

		$data['reports']=$this->report_model->get_reports();
		$data['main_view']="reports/display";
		$this->load->view('layouts/main',$data);

	}


public function create(){
	$this->form_validation->set_rules('report_description','Report Description','trim|required');

	if($this->form_validation->run()==FALSE){
		$data['main_view']='reports_new/create_report';
		$this->load->view('layouts/main',$data);
	}else{

	$data=array(
			'report_description'=>$this->input->post('report_description'),
			'date'=>$this->input->post('date')

		);


		if($this->report_model->create_report($data)){
			$this->session->set_flashdata('report_created','Report successfully created!');
			redirect("reports/display");
		}

	}
}




































}





















































 ?>