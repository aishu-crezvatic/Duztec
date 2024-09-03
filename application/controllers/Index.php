<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {

    
    public function __construct() {
        parent::__construct();
        // Load the Frontend_model
        $this->load->model('frontend_model');
    }

    public function index() {
        $data['product_category'] = $this->frontend_model->productCategory();
        $data['product_sub_category'] = $this->frontend_model->productSubCategory();
        $data['product_with_cat_sub_cat'] = $this->frontend_model->product_with_cat_sub_cat();
        $data['clientele'] = $this->frontend_model->get_clientele();
        $data['sectors'] = $this->frontend_model->get_sectors();
        $data['blog_categories'] = $this->frontend_model->get_blog_categories();
        $data['home_page_data'] = $this->frontend_model->home_page();
        $data['contact'] = $this->frontend_model->get_contact();
        $data['images'] = $this->frontend_model->gallery();


        
//        echo "<pre>";
//        print_r($data['product_category']);
//        print_r($data['product_with_cat_sub_cat']);
//        exit;
        $this->load->view('frontend/index', $data);
    }
    
    public function term_and_condition() {
        $data['product_category'] = $this->frontend_model->productCategory();
        $data['product_sub_category'] = $this->frontend_model->productSubCategory();
        $data['product_with_cat_sub_cat'] = $this->frontend_model->product_with_cat_sub_cat();
        $data['clientele'] = $this->frontend_model->get_clientele();
        $data['sectors'] = $this->frontend_model->get_sectors();
        $data['blog_categories'] = $this->frontend_model->get_blog_categories();
        $data['home_page_data'] = $this->frontend_model->home_page();
        $data['contact'] = $this->frontend_model->get_contact();
        $data['images'] = $this->frontend_model->gallery();


        
//        echo "<pre>";
//        print_r($data['product_category']);
//        print_r($data['product_with_cat_sub_cat']);
//        exit;
        $this->load->view('frontend/term_and_condition', $data);
    }
    
    public function privacy_and_policy() {
        $data['product_category'] = $this->frontend_model->productCategory();
        $data['product_sub_category'] = $this->frontend_model->productSubCategory();
        $data['product_with_cat_sub_cat'] = $this->frontend_model->product_with_cat_sub_cat();
        $data['clientele'] = $this->frontend_model->get_clientele();
        $data['sectors'] = $this->frontend_model->get_sectors();
        $data['blog_categories'] = $this->frontend_model->get_blog_categories();
        $data['home_page_data'] = $this->frontend_model->home_page();
        $data['contact'] = $this->frontend_model->get_contact();
        $data['images'] = $this->frontend_model->gallery();


        
//        echo "<pre>";
//        print_r($data['product_category']);
//        print_r($data['product_with_cat_sub_cat']);
//        exit;
        $this->load->view('frontend/privacy_and_policy', $data);
    }
}
?>