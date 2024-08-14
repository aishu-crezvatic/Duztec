<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/login_model');
    }
    public function index()
    {
        $this->load->view('admin/login/login');
    }
    public function login()
    {
        $email = $this->input->post('email');
        $password = md5(sha1($this->input->post('password')));
        $data = [
            'email' => $email,
            'password' => $password,
        ];
        $this->login_model->login($data);
    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url('admin'));
    }
}
/* End of file Login.php */
