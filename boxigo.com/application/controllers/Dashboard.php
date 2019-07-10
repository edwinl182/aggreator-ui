<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->library('encrypt');
		$this->load->model('dashboard_model');
		if(!$this->session->userdata('user_id')){
			redirect('home');
		}
		$this->data['estimate_list'] = $this->fetch_estimates($this->session->userdata('user_id'));
	}

	public function index(){
		$this->load->user_dashboard('user_dashboard',$this->data);
	}

	function fetch_estimates($id){
		$estimates = $this->dashboard_model->fetch_estimates($id);
		return $estimates;
	}
}

?>