<?php

defined('BASEPATH') or exit('No direct script access allowed');
class FooterTagline extends CI_Controller

{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/footerTagline_model');
    }

    public function index()
    {
        $data['data'] = $this->footerTagline_model->fetch();

        $this->load->view('admin/home/footerTagline', $data);
    }

    // Create


    // Edit
    public function edit()
    {
        $description =  $this->input->post('description');
            $data = [
                'id' =>  $this->input->post('id'), 
                'about_wayam_description' => $description
            ]; 

        // print_r( $data);
        // exit;
        $this->footerTagline_model->edit($data);
        $this->session->set_flashdata('success', 'Updated Successfully');
        redirect(base_url('admin/footerTagline'));
    }
    public function delete()

    {

        $id = $this->input->post('id');
        // echo($id);
        // exit;
        $this->footerTagline_model->delete($id);
        $this->session->set_flashdata('success', 'Deleted');

        redirect(base_url('admin/footerTagline'));
    }



    public function status($id)
    {

        $this->footerTagline_model->status($id);
    }
}
