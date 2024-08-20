<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Blog_details extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Load the Frontend_model
        $this->load->model('frontend_model');
    }

    public function index($b_id) {
//        $data['product_category'] = $this->frontend_model->productCategory();
        $data['product_sub_category'] = $this->frontend_model->productSubCategory();
        $data['product_with_cat_sub_cat'] = $this->frontend_model->product_with_cat_sub_cat();
//        echo "<pre>";
//        print_r($data);
//        exit;
        $data['blog_derail'] = $this->frontend_model->blog($b_id);
        $this->load->view('frontend/blog_details', $data);
    }
}
