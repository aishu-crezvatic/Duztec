<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Gallery extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Load the CommonModel without assigning it to a variable
        $this->load->model('admin/CommonModel');
    }

    public function index() {
        // Fetch records from the CommonModel
        $data['data'] = $this->CommonModel->getRecords(DATABASE, 'gallery', array('status !=' => 0));

        // Load the view and pass the data
        $this->load->view('admin/gallery/gallery', $data);
    }


    public function create() {
        // Configuration for file upload
        $config['upload_path']   = './uploads/gallery'; // Ensure this path is correct and writable
        $config['allowed_types'] = '*'; // Allow all file types; adjust as needed
        $config['max_size']      = 2048; // Maximum file size in kilobytes (2MB in this case)
    
        // Load and initialize the upload library
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
    
        // Initialize $image variable
        $image = '';
    
        // Check if file was uploaded and process the upload
        if ($this->upload->do_upload('img_video')) {
            $upload_data = $this->upload->data();
            $image = $upload_data['file_name']; // Get the uploaded file name
        } else {
            // Handle errors if file upload fails
            $error = $this->upload->display_errors();
            $this->session->set_flashdata('error', $error);
            redirect(base_url('admin/gallery'));
            return;
        }
    
        // Retrieve other form data
        $is_video = $this->input->post('is_video');
        $status = $this->input->post('status');
    
        // Validate form data
        if ($is_video === NULL || $status === NULL) {
            $this->session->set_flashdata('error', 'Required fields are missing.');
            redirect(base_url('admin/gallery'));
            return;
        }
    
        // Prepare data for database insertion
        $data = [
            'img_video' => $image, // Store the file name in the database
            'is_video' => $is_video,
            'status' => $status,
            'created_date' => date('Y-m-d H:i:s') // Current date and time
        ];
    
        // Insert data into the database
        $this->CommonModel->add(DATABASE, 'gallery', $data);
    
        // Set success message and redirect
        $this->session->set_flashdata('success', 'Gallery Item Added Successfully');
        redirect(base_url('admin/gallery'));
    }
    
    
    public function edit($id) {
        // Fetch gallery data based on the ID
        $data['gallery'] = $this->CommonModel->getRow(DATABASE, 'gallery', array('g_id' => $id));
        
        // Load the edit view with the gallery data
        $this->load->view('admin/gallery/edit', $data);
    }
    public function update() {
        $id = $this->input->post('g_id');
    
        // Set up upload configuration
        $config['upload_path']   = './uploads/gallery'; // Ensure this path is correct and writable
        $config['allowed_types'] = 'jpg|jpeg|png|gif|mp4|webm'; // Allowed file types
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
    
        // Initialize file variable
        $image = $this->input->post('existing_img_video'); // Keep existing image/video if no new upload
    
        if (!empty($_FILES['img_video']['name'])) {
            // If a new file is uploaded
            if ($this->upload->do_upload('img_video')) {
                $uploadData = $this->upload->data();
                $image = $uploadData['file_name'];
            } else {
                $this->session->set_flashdata('error', $this->upload->display_errors());
                redirect('admin/gallery/edit/' . $id);
            }
        }
    
        $data = [
            'img_video' => $image,
            'is_video'  => $this->input->post('is_video'),
            'status'    => $this->input->post('status'),
        ];
    
        $this->CommonModel->edit(DATABASE, 'gallery', $data, array('g_id' => $id));
        $this->session->set_flashdata('success', 'Gallery item updated successfully!');
        redirect(base_url('admin/gallery'));
    }
    

    public function delete() {
        $id = $this->input->post('id'); // Get the ID from the POST request
    
        if ($id) {
            // Call the CommonModel to perform the delete operation
            $this->CommonModel->soft_delete(DATABASE, 'gallery', 'g_id', $id);
            $this->session->set_flashdata('success', 'Gallery item deleted successfully!');
        } else {
            $this->session->set_flashdata('error', 'No record ID provided!');
        }
    
        redirect(base_url('admin/gallery')); // Redirect back to the gallery page
    }
    
    

    public function status($id) {
        $this->CommonModel->status(DATABASE, 'gallery', 'g_id', $id);
    }
}


/* End of file Index.php */

