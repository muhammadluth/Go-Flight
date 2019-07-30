<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reservation extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('petugas/M_Reservation_Petugas');
	}

	public function index()
	{		
		if($this->session->userdata('user_petugas') == false){
            redirect(base_url() . 'petugas/account/signin');                            
		}

		$reservation = $this->M_Reservation_Petugas->get_reservation();
		$data['reservation'] = $reservation;
		$data['nav'] = 'reservation';
		// var_dump($data);
		// die;
        $this->load->view('petugas/template/V_Header',$data);
		$this->load->view('petugas/V_Reservation',$data);
		
		$script = '<script>
		function viewedit(id){
		  $.ajax({url: "'.base_url().'petugas/reservation/viewedit/"+id, success: function(result){
					$("#viewedit").html(result);
		  }});
		}
		</script>';
		$data['script'] = $script;
		$this->load->view('petugas/template/V_Footer',$data);
	}

	public function viewedit($id = null){
		if($this->session->userdata('user_petugas') == false){
            redirect(base_url() . 'petugas/account/signin');                            
		}

		if($id == null){
			redirect(base_url().'petugas/reservation');
		}

		$data['reservation'] = $this->M_Reservation_Petugas->get_reservation_id($id);

		$this->load->view('petugas/V_Reservation_Viewedit',$data);
		
	}

	public function update(){
		if($this->session->userdata('user_petugas') == false){
            redirect(base_url() . 'petugas/account/signin');                            
		}

		$id = $this->input->post('id');
		$status = $this->input->post('status');
		$this->M_Reservation_Petugas->update($status,$id);
		redirect(base_url().'petugas/reservation');
	}

	public function delete($id = null){
		if($this->session->userdata('user_petugas') == false){
            redirect(base_url() . 'petugas/account/signin');                            
		}

		if($id == null){
			redirect(base_url().'petugas/reservation');
		}
		$this->M_Reservation_Petugas->delete($id);	
		redirect(base_url().'petugas/reservation');			
	}
}
