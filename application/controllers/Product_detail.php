<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Product_detail extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // Load the Frontend_model
        $this->load->model('frontend_model');
    }

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/userguide3/general/urls.html
     */
    public function index($p_id)
    {
        //        $data['product_category'] = $this->frontend_model->productCategory();
        $data['product_sub_category'] = $this->frontend_model->productSubCategory();
        $data['product_with_cat_sub_cat'] = $this->frontend_model->product_with_cat_sub_cat();
        $data['clientele'] = $this->frontend_model->get_clientele();
        $data['sectors'] = $this->frontend_model->get_sectors();
        $data['blog_categories'] = $this->frontend_model->get_blog_categories();
        $data['contact'] = $this->frontend_model->get_contact();


        $data['product_detail_data'] = $this->frontend_model->product($p_id);

        $c_id = $data['product_detail_data'][0]['c_id'];
        $sc_id = $data['product_detail_data'][0]['sc_id'];
        $current_product_name = $data['product_detail_data'][0]['name']; // Assuming the product name is stored in 'name'

        // Debugging output
        // print_r($data['product_detail_data'][0]['c_id']);

        // Pass the current product name to the subcat method
        $data['sub_category'] = $this->frontend_model->subcat($c_id, $sc_id, $current_product_name);

        // $data['sub_category'] = $this->frontend_model->subcat($sc_id);

        $this->load->view('frontend/product_detail', $data);
    }
}
