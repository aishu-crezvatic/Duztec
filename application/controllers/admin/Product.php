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
        $data['page_types'] = array('1' => 1, '2' => 2, '3' => 3, '4' => 4, '5' => 5, '6' => 6, '7' => 7);
//        echo "<pre>";
//        print_r($data);
//        exit;
        $this->load->view($this->_view_folder . '/' . $this->_view, $data);
    }

    public function create() {
//        echo "<pre>";
//        print_r($_POST);
//        print_r($_FILES);
//        exit;

        //Images
        $config['upload_path'] = 'uploads/product/image';
        // $config['allowed_types'] = 'gif|jpg|png|jpeg|webp';
        $config['allowed_types'] = '*';
        // $config['max_size']      = 2048; 

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        // check logo upload or not    
        $image_path = array();
        if (!empty($_FILES['images']['name'][0])) {
            // Upload multiple images
            $files = $_FILES['images'];
            // print_r($_FILES['images']);
            $file_count = is_array($files['name']) ? count($files['name']) : 0;

            for ($i = 0; $i < $file_count; $i++) {
                $_FILES['images']['name'] = $files['name'][$i];
                $_FILES['images']['type'] = $files['type'][$i];
                $_FILES['images']['tmp_name'] = $files['tmp_name'][$i];
                $_FILES['images']['error'] = $files['error'][$i];
                $_FILES['images']['size'] = $files['size'][$i];

                if ($this->upload->do_upload('images')) {
                    $images = $this->upload->data();
                    $image_path[] = $images['file_name'];
                }
            }
            //merge existing images with new one
//                if($data['images']!=''){
//                    $db_images = explode(',', $data['images']);
//                    $db_and_upload_merge = array_merge($db_images,$image_path);
//                    $vendor_img = implode(',', $db_and_upload_merge);
//                }else{
            $product_imgs = implode(',', $image_path);
//                }                
        } else {
            // fetch existing image name
//                $vendor_img = $data['images'];
            $product_imgs = '';
        }
        
        //Videos
        $config['upload_path'] = 'uploads/product/video';
        // $config['allowed_types'] = 'gif|jpg|png|jpeg|webp';
        $config['allowed_types'] = '*';
        // $config['max_size']      = 2048; 

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        // check logo upload or not    
        $image_path = array();
        if (!empty($_FILES['images']['name'][0])) {
            // Upload multiple images
            $files = $_FILES['videos'];
            // print_r($_FILES['images']);
            $file_count = is_array($files['name']) ? count($files['name']) : 0;

            for ($i = 0; $i < $file_count; $i++) {
                $_FILES['images']['name'] = $files['name'][$i];
                $_FILES['images']['type'] = $files['type'][$i];
                $_FILES['images']['tmp_name'] = $files['tmp_name'][$i];
                $_FILES['images']['error'] = $files['error'][$i];
                $_FILES['images']['size'] = $files['size'][$i];

                if ($this->upload->do_upload('images')) {
                    $images = $this->upload->data();
                    $image_path[] = $images['file_name'];
                }
            }
            //merge existing images with new one
//                if($data['images']!=''){
//                    $db_images = explode(',', $data['images']);
//                    $db_and_upload_merge = array_merge($db_images,$image_path);
//                    $vendor_img = implode(',', $db_and_upload_merge);
//                }else{
            $product_vids = implode(',', $image_path);
//                }                
        } else {
            // fetch existing image name
//                $vendor_img = $data['images'];
            $product_vids = '';
        }

        $page_type = trim($this->input->post('page_type'));

        switch ($page_type) {
            case 1:
                $data = [
                    'name' => trim($this->input->post('name')),
                    'c_id' => trim($this->input->post('c_id')),
                    'sc_id' => trim($this->input->post('sc_id')),
                    'page_type' => trim($this->input->post('page_type')),
                    'advantages_title' => trim($this->input->post('advantages_title')),
                    'advantages_1' => trim($this->input->post('advantages_1')),
                    'advantages1_para' => trim($this->input->post('advantages1_para')),
                    'advantages_2' => trim($this->input->post('advantages_2')),
                    'advantages2_para' => trim($this->input->post('advantages2_para')),
                    'advantages_3' => trim($this->input->post('advantages_3')),
                    'advantages3_para' => trim($this->input->post('advantages3_para')),
                    'advantages_4' => trim($this->input->post('advantages_4')),
                    'advantages4_para' => trim($this->input->post('advantages4_para')),
                    'product_diversity_matrix' => trim($this->input->post('product_diversity_matrix')),
                    'description' => trim($this->input->post('description')),
                    'images' => $product_imgs,
                    'videos' => $product_vids,
                    'conclusion' => trim($this->input->post('conclusion')),
                    'status' => 0,
                    'created_date' => strip_tags(date('Y-m-d H:i:s', strtotime("+0 days")))
                ];
                break;
            case 2:
                $data = [
                    'name' => trim($this->input->post('name')),
                    'c_id' => trim($this->input->post('c_id')),
                    'sc_id' => trim($this->input->post('sc_id')),
                    'page_type' => trim($this->input->post('page_type')),
                    'advantages_1' => trim($this->input->post('advantages_1')),
                    'advantages1_para' => trim($this->input->post('advantages1_para')),
                    'advantages_2' => trim($this->input->post('advantages_2')),
                    'advantages2_para' => trim($this->input->post('advantages2_para')),
                    'description' => trim($this->input->post('description')),
                    'images' => $product_imgs,
                    'videos' => $product_vids,
                    'conclusion' => trim($this->input->post('conclusion')),
                    'status' => 0,
                    'created_date' => strip_tags(date('Y-m-d H:i:s', strtotime("+0 days")))
                ];
                break;
            case 3:
                $data = [
                    'name' => trim($this->input->post('name')),
                    'c_id' => trim($this->input->post('c_id')),
                    'sc_id' => trim($this->input->post('sc_id')),
                    'page_type' => trim($this->input->post('page_type')),
                    'key_features' => trim($this->input->post('key_features')),
                    'key_features1' => trim($this->input->post('key_features1')),
                    'key_features1_para' => trim($this->input->post('key_features1_para')),
                    'key_features2' => trim($this->input->post('key_features2')),
                    'key_features2_para' => trim($this->input->post('key_features2_para')),
                    'key_features3' => trim($this->input->post('key_features3')),
                    'key_features3_para' => trim($this->input->post('key_features3_para')),
                    'key_features4' => trim($this->input->post('key_features4')),
                    'key_features4_para' => trim($this->input->post('key_features4_para')),
                    'why_choose' => trim($this->input->post('why_choose')),
                    'why_choose1' => trim($this->input->post('why_choose1')),
                    'why_choose1_para' => trim($this->input->post('why_choose1_para')),
                    'why_choose2' => trim($this->input->post('why_choose2')),
                    'why_choose2_para' => trim($this->input->post('why_choose2_para')),
                    'why_choose3' => trim($this->input->post('why_choose3')),
                    'why_choose3_para' => trim($this->input->post('why_choose3_para')),
                    'description' => trim($this->input->post('description')),
                    'images' => $product_imgs,
                    'videos' => $product_vids,
                    'conclusion' => trim($this->input->post('conclusion')),
                    'status' => 0,
                    'created_date' => strip_tags(date('Y-m-d H:i:s', strtotime("+0 days")))
                ];
                break;
            case 4:
                $data = [
                    'name' => trim($this->input->post('name')),
                    'c_id' => trim($this->input->post('c_id')),
                    'sc_id' => trim($this->input->post('sc_id')),
                    'page_type' => trim($this->input->post('page_type')),
                    'key_features' => trim($this->input->post('key_features')),
                    'key_features1' => trim($this->input->post('key_features1')),
                    'key_features1_para' => trim($this->input->post('key_features1_para')),
                    'key_features2' => trim($this->input->post('key_features2')),
                    'key_features2_para' => trim($this->input->post('key_features2_para')),
                    'key_features3' => trim($this->input->post('key_features3')),
                    'key_features3_para' => trim($this->input->post('key_features3_para')),
                    'key_features4' => trim($this->input->post('key_features4')),
                    'key_features4_para' => trim($this->input->post('key_features4_para')),
                    'why_choose' => trim($this->input->post('why_choose')),
                    'why_choose1_para' => trim($this->input->post('why_choose1_para')),
                    'why_choose2_para' => trim($this->input->post('why_choose2_para')),
                    'why_choose3_para' => trim($this->input->post('why_choose3_para')),
                    'description' => trim($this->input->post('description')),
                    'images' => $product_imgs,
                    'videos' => $product_vids,
                    'conclusion' => trim($this->input->post('conclusion')),
                    'status' => 0,
                    'created_date' => strip_tags(date('Y-m-d H:i:s', strtotime("+0 days")))
                ];
                break;
            case 5:
                $data = [
                    'name' => trim($this->input->post('name')),
                    'c_id' => trim($this->input->post('c_id')),
                    'sc_id' => trim($this->input->post('sc_id')),
                    'page_type' => trim($this->input->post('page_type')),
                    'technology' => trim($this->input->post('technology')),
                    'benefits' => trim($this->input->post('benefits')),
                    'description' => trim($this->input->post('description')),
                    'images' => $product_imgs,
                    'videos' => $product_vids,
                    'conclusion' => trim($this->input->post('conclusion')),
                    'status' => 0,
                    'created_date' => strip_tags(date('Y-m-d H:i:s', strtotime("+0 days")))
                ];
                break;
            case 6:
                $data = [
                    'name' => trim($this->input->post('name')),
                    'c_id' => trim($this->input->post('c_id')),
                    'sc_id' => trim($this->input->post('sc_id')),
                    'page_type' => trim($this->input->post('page_type')),
                    'key_features' => trim($this->input->post('key_features')),
                    'key_features1' => trim($this->input->post('key_features1')),
                    'key_features1_para' => trim($this->input->post('key_features1_para')),
                    'key_features2' => trim($this->input->post('key_features2')),
                    'key_features2_para' => trim($this->input->post('key_features2_para')),
                    'key_features3' => trim($this->input->post('key_features3')),
                    'key_features3_para' => trim($this->input->post('key_features3_para')),
                    'key_features4' => trim($this->input->post('key_features4')),
                    'key_features4_para' => trim($this->input->post('key_features4_para')),
                    'need_title' => trim($this->input->post('need_title')),
                    'need_para' => trim($this->input->post('need_para')),
                    'key_features_title' => trim($this->input->post('key_features_title')),
                    'key_features_para' => trim($this->input->post('key_features_para')),
                    'choose_title' => trim($this->input->post('choose_title')),
                    'choose_para' => trim($this->input->post('choose_para')),
                    'description' => trim($this->input->post('description')),
                    'images' => $product_imgs,
                    'videos' => $product_vids,
                    'conclusion' => trim($this->input->post('conclusion')),
                    'status' => 0,
                    'created_date' => strip_tags(date('Y-m-d H:i:s', strtotime("+0 days")))
                ];
                break;
            case 7:
                $data = [
                    'name' => trim($this->input->post('name')),
                    'c_id' => trim($this->input->post('c_id')),
                    'sc_id' => trim($this->input->post('sc_id')),
                    'page_type' => trim($this->input->post('page_type')),
                    'key_features' => trim($this->input->post('key_features')),
                    'key_features1' => trim($this->input->post('key_features1')),
                    'key_features1_para' => trim($this->input->post('key_features1_para')),
                    'key_features2' => trim($this->input->post('key_features2')),
                    'key_features2_para' => trim($this->input->post('key_features2_para')),
                    'key_features3' => trim($this->input->post('key_features3')),
                    'key_features3_para' => trim($this->input->post('key_features3_para')),
                    'key_features4' => trim($this->input->post('key_features4')),
                    'key_features4_para' => trim($this->input->post('key_features4_para')),
                    'key_features5' => trim($this->input->post('key_features5')),
                    'key_features5_para' => trim($this->input->post('key_features5_para')),
                    'description' => trim($this->input->post('description')),
                    'images' => $product_imgs,
                    'videos' => $product_vids,
                    'conclusion' => trim($this->input->post('conclusion')),
                    'status' => 0,
                    'created_date' => strip_tags(date('Y-m-d H:i:s', strtotime("+0 days")))
                ];
                break;
            default:
                echo "Bar\n";
                break;
        }

        $this->CommonModel->add(DATABASE, $this->_table, $data);
        $this->session->set_flashdata('success', 'Product Created');
        redirect(base_url($this->_view_folder));
    }

    public function edit($id) {
        $data['data'] = $this->CommonModel->getRow(DATABASE, $this->_table, array('p_id' => $id), '*');
        $data['categories'] = $this->CommonModel->getRecords(DATABASE, $this->_table2, array('status !=' => 2));
        $data['sub_categories'] = $this->CommonModel->getRecords(DATABASE, $this->_table3, array('status !=' => 2));
        $data['page_types'] = array('1' => 1, '2' => 2, '3' => 3, '4' => 4, '5' => 5, '6' => 6, '7' => 7);
//        echo "<pre>";
//        print_r($data);
//        exit;
        $this->load->view($this->_view_folder . '/' . $this->_edit, $data);
    }

    public function update() {

//        echo "<pre>";
//        print_r($_POST);
//        print_r($_FILES);
//        exit;
        
        $p_id = trim($this->input->post('p_id'));
//        $data = $this->VendorModel->GetDataVinC(array('dv_id' => $p_id)); //?????????????????????????????????????????????????//
        $data = $this->CommonModel->getRow(DATABASE, $this->_table, array('p_id' => $p_id), '*');
//        echo "<pre>";
//        print_r($data);
//        exit;
        //images
        $config['upload_path'] = 'uploads/product/image';
        // $config['allowed_types'] = 'gif|jpg|png|jpeg|webp';
        $config['allowed_types'] = '*';
        // $config['max_size']      = 2048; 

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        // check logo upload or not    
        $image_path = array();
        if (!empty($_FILES['images']['name'][0])) {
            // Upload multiple images
            $files = $_FILES['images'];
            // print_r($_FILES['images']);
            $file_count = is_array($files['name']) ? count($files['name']) : 0;

            for ($i = 0; $i < $file_count; $i++) {
                $_FILES['images']['name'] = $files['name'][$i];
                $_FILES['images']['type'] = $files['type'][$i];
                $_FILES['images']['tmp_name'] = $files['tmp_name'][$i];
                $_FILES['images']['error'] = $files['error'][$i];
                $_FILES['images']['size'] = $files['size'][$i];

                if ($this->upload->do_upload('images')) {
                    $images = $this->upload->data();
                    $image_path[] = $images['file_name'];
                }
            }
            //merge existing images with new one
            if ($data['images'] != '') {
                $db_images = explode(',', $data['images']);
                $db_and_upload_merge = array_merge($db_images, $image_path);
                $product_imgs = implode(',', $db_and_upload_merge);
            } else {
                $product_imgs = implode(',', $image_path);
            }
        } else {
            // fetch existing image name
            $product_imgs = $data['images'];
//            $product_imgs = '';
        }
        
        //videos
        $config['upload_path'] = 'uploads/product/video';
        // $config['allowed_types'] = 'gif|jpg|png|jpeg|webp';
        $config['allowed_types'] = '*';
        // $config['max_size']      = 2048; 

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        // check logo upload or not    
        $image_path = array();
        if (!empty($_FILES['images']['name'][0])) {
            // Upload multiple images
            $files = $_FILES['images'];
            // print_r($_FILES['images']);
            $file_count = is_array($files['name']) ? count($files['name']) : 0;

            for ($i = 0; $i < $file_count; $i++) {
                $_FILES['images']['name'] = $files['name'][$i];
                $_FILES['images']['type'] = $files['type'][$i];
                $_FILES['images']['tmp_name'] = $files['tmp_name'][$i];
                $_FILES['images']['error'] = $files['error'][$i];
                $_FILES['images']['size'] = $files['size'][$i];

                if ($this->upload->do_upload('images')) {
                    $images = $this->upload->data();
                    $image_path[] = $images['file_name'];
                }
            }
            //merge existing images with new one
            if ($data['images'] != '') {
                $db_images = explode(',', $data['images']);
                $db_and_upload_merge = array_merge($db_images, $image_path);
                $product_vids = implode(',', $db_and_upload_merge);
            } else {
                $product_vids = implode(',', $image_path);
            }
        } else {
            // fetch existing image name
            $product_vids = $data['videos'];
//            $product_imgs = '';
        }

        $page_type = trim($this->input->post('name'));

        switch ($page_type) {
            case 1:
                $data = [
                    'name' => trim($this->input->post('name')),
                    'c_id' => trim($this->input->post('c_id')),
                    'sc_id' => trim($this->input->post('sc_id')),
                    'page_type' => trim($this->input->post('page_type')),
                    'advantages_title' => trim($this->input->post('advantages_title')),
                    'advantages_1' => trim($this->input->post('advantages_1')),
                    'advantages1_para' => trim($this->input->post('advantages1_para')),
                    'advantages_2' => trim($this->input->post('advantages_2')),
                    'advantages2_para' => trim($this->input->post('advantages2_para')),
                    'advantages_3' => trim($this->input->post('advantages_3')),
                    'advantages3_para' => trim($this->input->post('advantages3_para')),
                    'advantages_4' => trim($this->input->post('advantages_4')),
                    'advantages4_para' => trim($this->input->post('advantages4_para')),
                    'product_diversity_matrix' => trim($this->input->post('product_diversity_matrix')),
                    'description' => trim($this->input->post('description')),
                    'images' => $product_imgs,
                    'videos' => $product_vids,
                    'conclusion' => trim($this->input->post('conclusion'))
                ];
                break;
            case 2:
                $data = [
                    'name' => trim($this->input->post('name')),
                    'c_id' => trim($this->input->post('c_id')),
                    'sc_id' => trim($this->input->post('sc_id')),
                    'page_type' => trim($this->input->post('page_type')),
                    'advantages_1' => trim($this->input->post('advantages_1')),
                    'advantages1_para' => trim($this->input->post('advantages1_para')),
                    'advantages_2' => trim($this->input->post('advantages_2')),
                    'advantages2_para' => trim($this->input->post('advantages2_para')),
                    'description' => trim($this->input->post('description')),
                    'images' => $product_imgs,
                    'videos' => $product_vids,
                    'conclusion' => trim($this->input->post('conclusion'))
                ];
                break;
            case 3:
                $data = [
                    'name' => trim($this->input->post('name')),
                    'c_id' => trim($this->input->post('c_id')),
                    'sc_id' => trim($this->input->post('sc_id')),
                    'page_type' => trim($this->input->post('page_type')),
                    'key_features' => trim($this->input->post('key_features')),
                    'key_features1' => trim($this->input->post('key_features1')),
                    'key_features1_para' => trim($this->input->post('key_features1_para')),
                    'key_features2' => trim($this->input->post('key_features2')),
                    'key_features2_para' => trim($this->input->post('key_features2_para')),
                    'key_features3' => trim($this->input->post('key_features3')),
                    'key_features3_para' => trim($this->input->post('key_features3_para')),
                    'key_features4' => trim($this->input->post('key_features4')),
                    'key_features4_para' => trim($this->input->post('key_features4_para')),
                    'why_choose' => trim($this->input->post('why_choose')),
                    'why_choose1' => trim($this->input->post('why_choose1')),
                    'why_choose1_para' => trim($this->input->post('why_choose1_para')),
                    'why_choose2' => trim($this->input->post('why_choose2')),
                    'why_choose2_para' => trim($this->input->post('why_choose2_para')),
                    'why_choose3' => trim($this->input->post('why_choose3')),
                    'why_choose3_para' => trim($this->input->post('why_choose3_para')),
                    'description' => trim($this->input->post('description')),
                    'images' => $product_imgs,
                    'videos' => $product_vids,
                    'conclusion' => trim($this->input->post('conclusion'))
                ];
                break;
            case 4:
                $data = [
                    'name' => trim($this->input->post('name')),
                    'c_id' => trim($this->input->post('c_id')),
                    'sc_id' => trim($this->input->post('sc_id')),
                    'page_type' => trim($this->input->post('page_type')),
                    'key_features' => trim($this->input->post('key_features')),
                    'key_features1' => trim($this->input->post('key_features1')),
                    'key_features1_para' => trim($this->input->post('key_features1_para')),
                    'key_features2' => trim($this->input->post('key_features2')),
                    'key_features2_para' => trim($this->input->post('key_features2_para')),
                    'key_features3' => trim($this->input->post('key_features3')),
                    'key_features3_para' => trim($this->input->post('key_features3_para')),
                    'key_features4' => trim($this->input->post('key_features4')),
                    'key_features4_para' => trim($this->input->post('key_features4_para')),
                    'why_choose' => trim($this->input->post('why_choose')),
                    'why_choose1_para' => trim($this->input->post('why_choose1_para')),
                    'why_choose2_para' => trim($this->input->post('why_choose2_para')),
                    'why_choose3_para' => trim($this->input->post('why_choose3_para')),
                    'description' => trim($this->input->post('description')),
                    'images' => $product_imgs,
                    'videos' => $product_vids,
                    'conclusion' => trim($this->input->post('conclusion'))
                ];
                break;
            case 5:
                $data = [
                    'name' => trim($this->input->post('name')),
                    'c_id' => trim($this->input->post('c_id')),
                    'sc_id' => trim($this->input->post('sc_id')),
                    'page_type' => trim($this->input->post('page_type')),
                    'technology' => trim($this->input->post('technology')),
                    'benefits' => trim($this->input->post('benefits')),
                    'description' => trim($this->input->post('description')),
                    'images' => $product_imgs,
                    'videos' => $product_vids,
                    'conclusion' => trim($this->input->post('conclusion'))
                ];
                break;
            case 6:
                $data = [
                    'name' => trim($this->input->post('name')),
                    'c_id' => trim($this->input->post('c_id')),
                    'sc_id' => trim($this->input->post('sc_id')),
                    'page_type' => trim($this->input->post('page_type')),
                    'key_features' => trim($this->input->post('key_features')),
                    'key_features1' => trim($this->input->post('key_features1')),
                    'key_features1_para' => trim($this->input->post('key_features1_para')),
                    'key_features2' => trim($this->input->post('key_features2')),
                    'key_features2_para' => trim($this->input->post('key_features2_para')),
                    'key_features3' => trim($this->input->post('key_features3')),
                    'key_features3_para' => trim($this->input->post('key_features3_para')),
                    'key_features4' => trim($this->input->post('key_features4')),
                    'key_features4_para' => trim($this->input->post('key_features4_para')),
                    'need_title' => trim($this->input->post('need_title')),
                    'need_para' => trim($this->input->post('need_para')),
                    'key_features_title' => trim($this->input->post('key_features_title')),
                    'key_features_para' => trim($this->input->post('key_features_para')),
                    'choose_title' => trim($this->input->post('choose_title')),
                    'choose_para' => trim($this->input->post('choose_para')),
                    'description' => trim($this->input->post('description')),
                    'images' => $product_imgs,
                    'videos' => $product_vids,
                    'conclusion' => trim($this->input->post('conclusion'))
                ];
                break;
            case 7:
                $data = [
                    'name' => trim($this->input->post('name')),
                    'c_id' => trim($this->input->post('c_id')),
                    'sc_id' => trim($this->input->post('sc_id')),
                    'page_type' => trim($this->input->post('page_type')),
                    'key_features' => trim($this->input->post('key_features')),
                    'key_features1' => trim($this->input->post('key_features1')),
                    'key_features1_para' => trim($this->input->post('key_features1_para')),
                    'key_features2' => trim($this->input->post('key_features2')),
                    'key_features2_para' => trim($this->input->post('key_features2_para')),
                    'key_features3' => trim($this->input->post('key_features3')),
                    'key_features3_para' => trim($this->input->post('key_features3_para')),
                    'key_features4' => trim($this->input->post('key_features4')),
                    'key_features4_para' => trim($this->input->post('key_features4_para')),
                    'key_features5' => trim($this->input->post('key_features5')),
                    'key_features5_para' => trim($this->input->post('key_features5_para')),
                    'description' => trim($this->input->post('description')),
                    'images' => $product_imgs,
                    'videos' => $product_vids,
                    'conclusion' => trim($this->input->post('conclusion'))
                ];
                break;
            default:
                echo "Bar\n";
                break;
        }

//        $data = [
//            'sc_id' => trim($this->input->post('sc_id')),
//            'c_id' => trim($this->input->post('c_id')),
//            'name' => trim($this->input->post('name')),
//            'description' => trim($this->input->post('description'))
//        ];
        $this->CommonModel->edit(DATABASE, $this->_table, $data, array('p_id' => $this->input->post('p_id')));
        $this->session->set_flashdata('success', 'Product Updated');
        redirect(base_url($this->_view_folder));
    }

    public function delete() {
        $id = trim($this->input->post('id'));
        $this->CommonModel->soft_delete(DATABASE, $this->_table, 'p_id', $id);
        $this->session->set_flashdata('success', 'Product Deleted');
        redirect(base_url($this->_view_folder));
    }

    public function status($id) {
        $this->CommonModel->status(DATABASE, $this->_table, 'p_id', $id); 
    }

//    public function delete(){
//        $id = $this->input->post('id');
//        $this->product_model->delete($id)
//        $this->session->set_flashdata('success', 'Product Deleted');
//        redirect(base_url('admin/product'));
//    }
}

/* End of file Index.php */

