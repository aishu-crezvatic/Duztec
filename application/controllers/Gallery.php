<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller {
	public function index()
	{
		// $this->load->view('component/gallery');
		$this->load->view('frontend/gallery');
	}
}
