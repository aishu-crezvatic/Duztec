<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Frontend extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // Load the Frontend_model
        $this->load->model('frontend_model');
        
    }

    public function index()
    {
        // Retrieve all data from the productCategory method
       
    }
}

/* End of file Frontend.php */