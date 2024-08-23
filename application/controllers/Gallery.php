<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Gallery extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // Load the Frontend_model
        $this->load->model('frontend_model');
        // $gallery = $this->frontend_model->gallery();
        // $data = array();
        // $data['images'] = $gallery;
        // // print_r($gallery);

        // $this->load->view('frontend/gallery', $data);

    }

    public function index()
    {
        //        $data['product_category'] = $this->frontend_model->productCategory();
        // $data['product_sub_category'] = $this->frontend_model->productSubCategory();
        // $data['product_with_cat_sub_cat'] = $this->frontend_model->product_with_cat_sub_cat();
        // $data['clientele'] = $this->frontend_model->get_clientele();
        //        echo "<pre>";
//        print_r($data);
//        exit;
        $this->load->model('frontend_model');
        $gallery = $this->frontend_model->gallery();
        $data = array();
        $data['images'] = $gallery;
        // print_r($gallery);

        $this->load->view('frontend/gallery', $data);


    }
}
