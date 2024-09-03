<?php

defined('BASEPATH') or exit('No direct script access allowed');

class BlogController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/CommonModel');
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->library('upload');
    }

    // Display all blogs and categories
    public function index()
    {
        // Join blogs with categories to get category names
        $this->db->select('blogs.*, blog_category.name as category_name');
        $this->db->from('blogs');
        $this->db->join('blog_category', 'blogs.bc_id = blog_category.bc_id', 'left');
        $data['blogs'] = $this->db->get()->result_array();
    
        $data['categories'] = $this->CommonModel->getRecords(DATABASE, 'blog_category');
        $data['edit_mode'] = false;
    
        $this->load->view('admin/blog/blog', $data);
    }
    
    // Show form to create a new blog or category
    public function create()
    {
        $data['categories'] = $this->CommonModel->get_categories();
        $data['edit_mode'] = false;
        $this->load->view('admin/blog/create_view', $data);
    }

    // Show form to edit an existing blog
    public function edit_blog($b_id)
    {
        $data['current_blog'] = $this->CommonModel->getRow(DATABASE, 'blogs', ['b_id' => $b_id]);
        
        $data['categories'] = $this->CommonModel->getRecords(DATABASE, 'blog_category');
    
        if (empty($data['current_blog'])) {
            show_404(); 
        }
    
        $data['edit_mode'] = true;
            $this->load->view('admin/blog/blog', $data);  // Use the same view as create, but with pre-filled data
    }
    
    // Show form to edit an existing category
    public function edit_category($bc_id)
    {
        $data['category'] = $this->CommonModel->get_row('blog_categories', ['bc_id' => $bc_id]);

        if (empty($data['category'])) {
            show_404();
        }

        $data['edit_mode'] = true;
        $this->load->view('admin/category/edit_category', $data);
    }

    // Store a new blog or category
    public function store()
    {
        $type ='blog';
    
        if ($type == 'blog') {
            $this->_handle_blog_upload('create');
        } elseif ($type == 'category') {
            $this->_store_category();
        } else {
            show_404();
        }
    }

    // Update an existing blog
    public function update_blog()
    {
        $this->_handle_blog_upload('update');
    }

    // Update an existing category
    public function update_category()
    {
        $bc_id = $this->input->post('bc_id');
        $data = [
            'name' => $this->input->post('name'),
            'description' => $this->input->post('description'),
            'status' => $this->input->post('status')
        ];

        $updateResult = $this->CommonModel->edit('blog_categories', $data, ['bc_id' => $bc_id]);
        $message = $updateResult ? 'Category updated successfully!' : 'Failed to update category.';
        $this->session->set_flashdata($updateResult ? 'success' : 'error', $message);
        redirect('admin/blog');
    }

    // Handle blog image upload
private function _handle_blog_upload($action)
{
    // Load the library for file uploads
    $this->load->library('upload');
    
    $b_image = NULL; // Initialize to NULL
    
    if (!empty($_FILES['b_image']['name'])) {
        $config['upload_path']   = './uploads/';
        $config['allowed_types'] = '*';
        $config['max_size']      = 2048; // 2MB
    
        $this->upload->initialize($config);
    
        if ($this->upload->do_upload('b_image')) {
            $upload_data = $this->upload->data();
            $b_image = $upload_data['file_name'];
        } else {
            $this->session->set_flashdata('error', $this->upload->display_errors());
            redirect('admin/blog');
        }
    }
    
    // Prepare the data for insertion/update
    $data = array(
        'bc_id'       => $this->input->post('bc_id'),
        'title'       => $this->input->post('title'),
        'description' => $this->input->post('description'),
        'content'     => $this->input->post('content'),
        'status'      => $this->input->post('status'),
    );
    
    if ($b_image) {
        $data['b_image'] = $b_image;
    }
    
    // Insert or update the blog record
    if ($action == 'create') {
        $this->CommonModel->add(DATABASE, 'blogs', $data);
    } elseif ($action == 'update') {
        $b_id = $this->input->post('b_id');
        $this->CommonModel->edit(DATABASE, 'blogs', $data, array('b_id' => $b_id));
    }
    
    $this->session->set_flashdata('success', 'Blog saved successfully.');
    redirect('admin/blogcontroller');
}

    // Delete a blog
    public function delete_blog($b_id)
    {
        if (empty($b_id)) {
            show_404();
        }

        $deleteResult = $this->CommonModel->delete(DATABASE, 'blogs', ['b_id' => $b_id]);
        $message = $deleteResult ? 'Blog deleted successfully!' : 'Failed to delete blog.';
        $this->session->set_flashdata($deleteResult ? 'success' : 'error', $message);
        redirect('admin/blogcontroller');
    }

    // Delete a category
    public function delete_category($bc_id)
    {
        if (empty($bc_id)) {
            show_404();
        }

        $deleteResult = $this->CommonModel->delete('blog_categories', ['bc_id' => $bc_id]);
        $message = $deleteResult ? 'Category deleted successfully!' : 'Failed to delete category.';
        $this->session->set_flashdata($deleteResult ? 'success' : 'error', $message);
        redirect('admin/blogcontroller');
    }
}
