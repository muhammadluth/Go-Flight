<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Account extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('petugas/M_Account_Petugas');
    }

    public function index()
    {
        // $this->load->view('V_Home');
    }

    public function signin()
    {
        if($this->session->userdata('user_petugas')){
            redirect(base_url() . 'petugas');                            
        }

        $this->load->view('petugas/v_signin');
    }


    public function signin_process()
    {

        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user_data = $this->M_Account_Petugas->get_password_users($username);

        if (count($user_data) == 0) {
            redirect(base_url() . 'petugas/account/signin?alert=failed');
        }

        $password_get = $user_data[0]["password"];
        $user_id = $user_data[0]["id"];
        $fullname = $user_data[0]["fullname"];
        $user_level = $user_data[0]["level"];

        if (password_verify($password, $password_get) == true) {
            if ($user_level == 2) {
                $value = [
                    'fullname' => $fullname,
                    'username' => $username,
                    'id' => $user_id
                ];
                $this->session->set_userdata('user_petugas', $value);

                redirect(base_url() . 'petugas');                
            } 
            else {
                redirect(base_url() . 'petugas/account/signin?alert=failed');
            }

        } 
        else {
            // echo 'salah';petugas
            // die;
            redirect(base_url() . 'petugas/account/signin?alert=failed');
        }
        // var_dump($password_get);
    }

    // public function signup()
    // {
    //     $this->load->view('template/V_Header');
    //     $this->load->view('v_signup');
    //     $this->load->view('template/V_Footer');
    // }

    // public function signup_process()
    // {
    //     $username = $this->input->post('username');
    //     $password = $this->input->post('password');

    //     $password = password_hash($password, PASSWORD_DEFAULT);

    //     $data = [
    //         "username" => $username,
    //         "password" => $password,
    //         "level" => 1
    //     ];

    //     if ($this->M_Account_Admin->signup_insert($data) == true) {
    //         redirect(base_url() . 'account/signin?alert=success');
    //     } else {
    //         redirect(base_url() . 'account/signup?alert=failed');
    //     }
    // }

    public function logout()
    {
        $this->session->unset_userdata('user_petugas');
        redirect(base_url().'petugas/account/signin');
    }

}
