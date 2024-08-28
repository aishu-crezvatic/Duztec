<?php

defined('BASEPATH') or exit('No direct script access allowed');

class About_us extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/CommonModel');
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->library('upload');
    }

    public function index()
    {
        $data['data'] = $this->CommonModel->getRecords(DATABASE, 'about_us');
        $data['edit_mode'] = false; // Default to view mode
        $this->load->view('admin/about_us/about_us', $data);
    }

    public function edit($id = 1) // Default ID is 1
    {
        $data['about_us'] = $this->CommonModel->getRow(DATABASE, 'about_us', array('au_id' => $id));
        $this->load->view('admin/about_us/edit', $data);
    }

    public function update()
    {
        $id = 1; // Hardcoded ID

        // Set up upload configuration for images
        $config['upload_path'] = './uploads/'; // Ensure this path is correct and writable
        $config['allowed_types'] = 'jpg|jpeg|png|gif'; // Allowed file types
        $config['max_size'] = 20048; // Max file size in kilobytes
        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        // Initialize file variables
        $heroBannerImg = $this->input->post('existing_hero_banner_image');
        $aboutImg = $this->input->post('existing_about_image');

        // Initialize upload library

        // Handle hero banner image upload
        if (!empty($_FILES['hero_banner_image']['name'])) {
            if ($this->upload->do_upload('hero_banner_image')) {
                $uploadData = $this->upload->data();
                $heroBannerImg = $uploadData['file_name'];
            } else {
                $this->session->set_flashdata('error', $this->upload->display_errors());
                redirect('admin/about_us');

                // redirect('admin/about_us/edit/' . $id);
            }
        }

        // Handle about image upload
        if (!empty($_FILES['about_image']['name'])) {
            if ($this->upload->do_upload('about_image')) {
                $uploadData = $this->upload->data();
                $aboutImg = $uploadData['file_name'];
            } else {
                $this->session->set_flashdata('error', $this->upload->display_errors());
                redirect('admin/about_us');
                // redirect('admin/about_us/edit/' . $id);
            }
        }

        // Prepare data for updating
        $data = [
            'hero_banner_image' => $heroBannerImg,
            'hero_banner_text' => $this->input->post('hero_banner_text'),
            'about_image' => $aboutImg,
            'about_title' => $this->input->post('about_title'),
            'about_desc' => $this->input->post('about_desc'),
            'vision' => $this->input->post('vision'),
            'mission' => $this->input->post('mission')
        ];

        // Update data in the database
        $updateResult = $this->CommonModel->edit(DATABASE, 'about_us', $data, array('au_id' => $id));

        if ($updateResult) {
            $this->session->set_flashdata('success', 'About Us information updated successfully!');
            redirect('admin/about_us');
        } else {
            $this->session->set_flashdata('error', 'Failed to update About Us information.');
            redirect('admin/about_us');
        }
    }
}
