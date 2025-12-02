<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
    }

    public function index()
    {
        // load halaman login
        $this->load->view('auth/login');
    }

    public function login_process()
    {
        $email = $this->input->post('email', TRUE);
        $password = $this->input->post('password', TRUE);

        $user = $this->User_model->check_login($email, $password);

        if ($user) {
            // set session
            $this->session->set_userdata([
                'logged_in' => TRUE,
                'user_id'   => $user->id,
                'email'  => $user->email,
            ]);

            redirect('dashboard');
        } else {
            $this->session->set_flashdata('error', 'email atau password salah.');
            redirect('auth');
        }
    }
    

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('auth');
    }
}
