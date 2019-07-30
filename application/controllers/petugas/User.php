<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('petugas/M_User_Petugas');
	}

	public function index()
	{	
		$user = $this->M_User_Petugas->get_user();
		$data['user'] = $user;
		$data['nav'] = 'user';
		// var_dump($data);
		// die;
        $this->load->view('petugas/template/V_Header',$data);
		$this->load->view('petugas/V_user',$data);
		
		$script = '<script>
		function viewedit(id){
		  $.ajax({url: "'.base_url().'petugas/user/viewedit/"+id, success: function(result){
					$("#viewedit").html(result);
		  }});
		}
		</script>';
		$data['script'] = $script;
		$this->load->view('petugas/template/V_Footer',$data);
    }
    
    public function add(){
        $fullname = $this->input->post('fullname');
        $username = $this->input->post('username');
		$password = $this->input->post('password');
		$password = password_hash($password, PASSWORD_DEFAULT);
        $level = $this->input->post('level');

        $data = [
        	'fullname' => $fullname,
            'username' => $username,
            'password' => $password,
            'level' => $level
        ];
        
        $this->M_User_Petugas->add($data);

        redirect(base_url().'petugas/user');
    }

	public function viewedit($id = null){
		if($id == null){
			redirect(base_url().'petugas/user');
		}

		$data['user'] = $this->M_User_Petugas->get_user_id($id);

		$this->load->view('petugas/V_user_Viewedit',$data);
		
	}

	public function update(){
		$id = $this->input->post('id');
        $fullname = $this->input->post('fullname');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$password = password_hash($password, PASSWORD_DEFAULT);
        $level = $this->input->post('level');

        $data = [
        	'fullname' => $fullname,
            'username' => $username,
            'password' => $password,
            'level' => $level
        ];

		$this->M_User_Petugas->update($data,$id);
		redirect(base_url().'petugas/user');
	}

	public function delete($id = null){
		if($id == null){
			redirect(base_url().'petugas/user');
		}

		if ($id == '1') {
			redirect(base_url().'petugas/user');			
		}

		$this->M_User_Petugas->delete($id);	
		redirect(base_url().'petugas/user');			
	}
}
