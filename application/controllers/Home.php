<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_Booking');
		$this->load->model('M_Home');
	}

	public function index()
	{	
		
		$rute_all = $this->M_Booking->get_all_rute();
		$setting = $this->M_Home->get_setting();

		if (count($rute_all) == 0) {
			$data['rute_all'][0] =[
				'rute_to' => 'not_available',
				'rute_from' => 'not_available'
			];
		}
		else{
			$data['rute_all'] = $rute_all;
		}
		$data['setting'] = $setting;

		$this->load->view('template/V_Header');
		$this->load->view('V_Home',$data);
		$this->load->view('template/V_Footer');
	}
}

