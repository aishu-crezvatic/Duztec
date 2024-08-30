<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Category extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('admin/CommonModel');
    }

    public function index() {
        $data['data'] = $this->CommonModel->getRecords(DATABASE, 'category', array('status !=' => 2));
        $this->load->view('admin/category/category', $data);
    }

    public function create() {
        $config['upload_path'] = 'uploads';
        // $config['allowed_types'] = 'gif|jpg|png|jpeg|webp';
        $config['allowed_types'] = '*';
        // $config['max_size']      = 2048; 
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        // check logo upload or not 
        $logo = 'logo.tls';
        if ($this->upload->do_upload('category_image')) {
            $comp_logo = $this->upload->data();
            $image = $comp_logo['file_name'];
        }

        $data = [
            'category_image' => trim($image),
            'name' => trim($this->input->post('name')),
            'description' => trim($this->input->post('description')),
            'status' => 0,
            'created_date' => strip_tags(date('Y-m-d H:i:s', strtotime("+0 days")))
        ];
        $this->CommonModel->add(DATABASE, 'category', $data);
        $this->session->set_flashdata('success', 'Category Created');
        redirect(base_url('admin/category'));
    }

    public function edit($id) {
        $data['data'] = $this->CommonModel->getRow(DATABASE, 'category', array('c_id' => $id), '*');
        $this->load->view('admin/category/edit', $data);
    }

    public function update() {
        if ($_FILES['category_image']['error'] != 4) {
            $config['upload_path'] = 'uploads';
            // $config['allowed_types'] = 'gif|jpg|png|jpeg|webp';
            $config['allowed_types'] = '*';
            // $config['max_size']      = 2048; 
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            // check logo upload or not 
            $logo = 'logo.tls';
            if ($this->upload->do_upload('category_image')) {
                $comp_logo = $this->upload->data();
                $image = $comp_logo['file_name'];
            }
            $data = [
                'c_id' => trim($this->input->post('c_id')),
                'category_image' => trim($image),
                'name' => trim($this->input->post('name')),
                'description' => trim($this->input->post('description'))
            ];
        } else {
            $data = [
                'c_id' => trim($this->input->post('c_id')),
                'name' => trim($this->input->post('name')),
                'description' => trim($this->input->post('description'))
            ];
        }
        $this->CommonModel->edit(DATABASE, 'category', $data, array('c_id' => trim($this->input->post('c_id'))));
        $this->session->set_flashdata('success', 'Category Updated');
        redirect(base_url('admin/category'));
    }

    public function delete() {
        $id = trim($this->input->post('id'));
        $this->CommonModel->soft_delete(DATABASE, 'category', 'c_id', $id);
        $this->session->set_flashdata('success', 'Category Deleted');
        redirect(base_url('admin/category'));
    }

    public function status($id) {
        $this->CommonModel->status(DATABASE, 'category', 'c_id', $id);
    }
    
//    public function delete(){
//        $id = $this->input->post('id');
//        $this->product_model->delete($id)
//        $this->session->set_flashdata('success', 'Product Deleted');
//        redirect(base_url('admin/product'));
//    }
    
}

/* End of file Index.php */

