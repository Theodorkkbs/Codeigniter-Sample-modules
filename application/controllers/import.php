<?php 
 
defined('BASEPATH') OR exit('No direct script access allowed');  
  
class Import extends CI_Controller {  
 
	function __construct() {
		parent::__construct();
		$this->load->database();
		$this->load->model('import_model');
    }
	public function index(){

		$data['alldata']=$this->import_model->get_excel();
		$this->load->view('excel_file_upload',$data);
	}
	
}