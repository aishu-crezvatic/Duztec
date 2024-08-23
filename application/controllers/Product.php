<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Load the Frontend_model
        $this->load->model('frontend_model');
    }

    public function index() {
//        get search parameter
        parse_str($_SERVER['QUERY_STRING'], $_GET); 
//        echo "<pre>";
//       print_r($_GET);
//       exit;
//         
//        echo " query_parameter = ".$_GET['query'];
        $query_string = $_GET['query'];
//        exit;
        //        $data['product_category'] = $this->frontend_model->productCategory();
        $data['product_sub_category'] = $this->frontend_model->productSubCategory();
        $data['product_with_cat_sub_cat'] = $this->frontend_model->product_with_cat_sub_cat();
        $data['product_with_cat_sub_cat_search'] = $this->frontend_model->product_with_cat_sub_cat_search($query_string);
        $data['clientele'] = $this->frontend_model->get_clientele();
        $data['sectors'] = $this->frontend_model->get_sectors();
        $data['blog_categories'] = $this->frontend_model->get_blog_categories();
//        echo "<pre>";
//        print_r($data['product_with_cat_sub_cat_search']);
//        exit;
        $this->load->view('frontend/product', $data);
    }
}
