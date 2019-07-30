<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('petugas/M_Dashboard');
	}

	public function index()
	{	
		if($this->session->userdata('user_petugas') == false){
            redirect(base_url() . 'petugas/account/signin');                            
		}

		$data['reservation'] = $this->M_Dashboard->get_count_table('reservation');
		$data['customer'] = $this->M_Dashboard->get_count_table('customer');
		$data['rute'] = $this->M_Dashboard->get_count_table('rute');
		$data['transportation'] = $this->M_Dashboard->get_count_table('transportation');
		$data['user'] = $this->M_Dashboard->get_count_table('user');
		

		$data['nav'] = 'dashboard';
		$this->load->view('petugas/template/V_Header',$data);
		$this->load->view('petugas/V_Dashboard',$data);

		$data['script'] = '';
		$this->load->view('petugas/template/V_Footer',$data);
	}
}

