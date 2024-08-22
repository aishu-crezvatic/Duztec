<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Sectors extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Load the Frontend_model
        $this->load->model('frontend_model');
    }

    public function index($sd_id = NULL) {

       $data['sector_detail'] = $this->frontend_model->sector_detail();
        // $data['product_sub_category'] = $this->frontend_model->productSubCategory();
         $data['product_with_cat_sub_cat'] = $this->frontend_model->product_with_cat_sub_cat();
    //    echo "<pre>";
    //    print_r($data);
    //    exit;

    $data['selected_sector_index'] = 0;
        if(!empty($sd_id) && $sd_id != null && $sd_id != 0){
            $data['selected_sector_index'] = ($sd_id-1);
        }
        $data['clientele'] = $this->frontend_model->get_clientele();
        $data['sectors'] = $this->frontend_model->get_sectors();
        //access data from array
        // $sector_details[$selected_sector_index]['name'];
        $this->load->view('frontend/sectors', $data);
    }
}
