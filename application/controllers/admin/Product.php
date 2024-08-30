<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Product extends CI_Controller {

    private $_table;
    private $_table2;
    private $_table3;
    private $_view_folder;
    private $_view;
    private $_edit;
    
    public function __construct() {
        parent::__construct();
        $this->load->model('admin/CommonModel');
        $this->_table = 'product';
        $this->_table2 = 'category';
        $this->_table3 = 'sub_category';
        $this->_view_folder = 'admin/product';
        $this->_view = 'product';
        $this->_edit = 'edit';
    }

    public function index() {
        $data['data'] = $this->CommonModel->getRecords(DATABASE, $this->_table, array('status !=' => 2));
        $data['categories'] = $this->CommonModel->getRecords(DATABASE, $this->_table2, array('status !=' => 2));
        $data['sub_categories'] = $this->CommonModel->getRecords(DATABASE, $this->_table3, array('status !=' => 2));
        $data['page_types'] = array('1'=> 1,'2'=> 2,'3'=> 3,'4'=> 4,'5'=> 5,'6'=> 6,'7'=> 7);
//        echo "<pre>";
//        print_r($data);
//        exit;
        $this->load->view($this->_view_folder.'/'.$this->_view, $data);
    }

    public function create() {
        $data = [
            'c_id' => trim($this->input->post('c_id')),
            'name' => trim($this->input->post('name')),
            'description' => trim($this->input->post('description')),
            'status' => 0,
            'created_date' => strip_tags(date('Y-m-d H:i:s', strtotime("+0 days")))
        ];
        $this->CommonModel->add(DATABASE, $this->_table, $data);
        $this->session->set_flashdata('success', 'Product Created');
        redirect(base_url($this->_view_folder));
    }

    public function edit($id) {
        $data['data'] = $this->CommonModel->getRow(DATABASE, $this->_table, array('c_id' => $id), '*');
        $data['categories'] = $this->CommonModel->getRecords(DATABASE, $this->_table2, array('status !=' => 2));
        $this->load->view($this->_view_folder.'/'.$this->_edit, $data);
    }

    public function update() {
        $data = [
            'sc_id' => trim($this->input->post('sc_id')),
            'c_id' => trim($this->input->post('c_id')),
            'name' => trim($this->input->post('name')),
            'description' => trim($this->input->post('description'))
        ];
        $this->CommonModel->edit(DATABASE, $this->_table, $data, array('sc_id' => $this->input->post('sc_id')));
        $this->session->set_flashdata('success', 'Product Updated');
        redirect(base_url($this->_view_folder));
    }

    public function delete() {
        $id = trim($this->input->post('id'));
        $this->CommonModel->soft_delete(DATABASE, $this->_table, 'sc_id', $id);
        $this->session->set_flashdata('success', 'Product Deleted');
        redirect(base_url($this->_table));
    }

    public function status($id) {
        $this->CommonModel->status(DATABASE, $this->_table, 'sc_id', $id);
    }
    
//    public function delete(){
//        $id = $this->input->post('id');
//        $this->product_model->delete($id)
//        $this->session->set_flashdata('success', 'Product Deleted');
//        redirect(base_url('admin/product'));
//    }
}

/* End of file Index.php */

