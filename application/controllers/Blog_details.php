<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog_details extends CI_Controller {

	
	public function __construct()
    {
        parent::__construct();
        // Load the Frontend_model
        $this->load->model('frontend_model');
        
    }
	public function index($b_id)
	{
		$data['blog_derail'] = $this->frontend_model->blog($b_id);
		$this->load->view('frontend/blog_details', $data);
	}
}
