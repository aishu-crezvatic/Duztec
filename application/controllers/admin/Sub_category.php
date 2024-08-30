<?php

defined('BASEPATH') or exit('No direct script access allowed');

class sub_category extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('admin/CommonModel');
    }

    public function index() {
        $data['data'] = $this->CommonModel->getRecords(DATABASE, 'sub_category', array('status !=' => 2));
        $data['categories'] = $this->CommonModel->getRecords(DATABASE, 'category', array('status !=' => 2));
        $this->load->view('admin/sub_category/sub_category', $data);
    }

    public function create() {
        $data = [
            'c_id' => trim($this->input->post('c_id')),
            'name' => trim($this->input->post('name')),
            'description' => trim($this->input->post('description')),
            'status' => 0,
            'created_date' => strip_tags(date('Y-m-d H:i:s', strtotime("+0 days")))
        ];
        $this->CommonModel->add(DATABASE, 'sub_category', $data);
        $this->session->set_flashdata('success', 'Sub Category Created');
        redirect(base_url('admin/sub_category'));
    }

    public function edit($id) {
        $data['data'] = $this->CommonModel->getRow(DATABASE, 'sub_category', array('c_id' => $id), '*');
        $data['categories'] = $this->CommonModel->getRecords(DATABASE, 'category', array('status !=' => 2));
        $this->load->view('admin/sub_category/edit', $data);
    }

    public function update() {
        $data = [
            'sc_id' => trim($this->input->post('sc_id')),
            'c_id' => trim($this->input->post('c_id')),
            'name' => trim($this->input->post('name')),
            'description' => trim($this->input->post('description'))
        ];
        $this->CommonModel->edit(DATABASE, 'sub_category', $data, array('sc_id' => $this->input->post('sc_id')));
        $this->session->set_flashdata('success', 'Sub Category Updated');
        redirect(base_url('admin/sub_category'));
    }

    public function delete() {
        $id = trim($this->input->post('id'));
        $this->CommonModel->soft_delete(DATABASE, 'sub_category', 'sc_id', $id);
        $this->session->set_flashdata('success', 'Sub Category Deleted');
        redirect(base_url('admin/sub_category'));
    }

    public function status($id) {
        $this->CommonModel->status(DATABASE, 'sub_category', 'sc_id', $id);
    }
    
//    public function delete(){
//        $id = $this->input->post('id');
//        $this->product_model->delete($id)
//        $this->session->set_flashdata('success', 'Product Deleted');
//        redirect(base_url('admin/product'));
//    }
}

/* End of file Index.php */

