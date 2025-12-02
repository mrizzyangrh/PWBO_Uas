<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function index() {
        $this->load->view('login_view');
    }

    public function proses() {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $this->load->model('User_model');
        $user = $this->User_model->cek_login($email, $password);

        if($user) {
            $this->session->set_userdata('user_login', $user->email);
            redirect('dashboard');
        } else {
            $this->session->set_flashdata('error', 'Email atau password salah!');
            redirect('login');
        }
    }

    public function logout(){
        $this->session->unset_userdata('user_login');
        redirect('login');
    }
}
