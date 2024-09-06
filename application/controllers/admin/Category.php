<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Category extends CI_Controller {

    private $_table;
    private $_view_folder;
    private $_view;
    private $_edit;
    
    public function __construct() {
        parent::__construct();
        $this->load->model('admin/CommonModel');
        $this->_table = 'category';
        $this->_view_folder = 'admin/category';
        $this->_view = 'category';
        $this->_edit = 'edit';
    }

    public function index() {
        $data['data'] = $this->CommonModel->getRecords(DATABASE, $this->_table, array('status !=' => 2));
        $this->load->view($this->_view_folder.'/'.$this->_view, $data);
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
        redirect(base_url($this->_view_folder));
    }

    public function edit($id) {
        $data['data'] = $this->CommonModel->getRow(DATABASE, $this->_table, array('c_id' => $id), '*');
        $this->load->view($this->_view_folder.'/'.$this->_edit, $data);
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
        $this->CommonModel->edit(DATABASE, $this->_table, $data, array('c_id' => trim($this->input->post('c_id'))));
        $this->session->set_flashdata('success', 'Category Updated');
        redirect(base_url($this->_view_folder));
    }

    public function delete() {
        $id = trim($this->input->post('id'));
        $this->CommonModel->soft_delete(DATABASE, $this->_table, 'c_id', $id);
        $this->session->set_flashdata('success', 'Category Deleted');
        redirect(base_url($this->_view_folder));
    }

    public function status() {
        $id = trim($this->input->post('data'));
        $this->CommonModel->status(DATABASE, $this->_table, 'c_id', $id);
    }
    
//    public function delete(){
//        $id = $this->input->post('id');
//        $this->product_model->delete($id)
//        $this->session->set_flashdata('success', 'Product Deleted');
//        redirect(base_url('admin/product'));
//    }
    
}

/* End of file Index.php */

