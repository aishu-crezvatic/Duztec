<?php

defined('BASEPATH') or exit('No direct script access allowed');
class about_wayam extends CI_Controller

{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/about_wayam_model');
    }

    public function index()
    {
        $data['data'] = $this->about_wayam_model->fetch();

        $this->load->view('admin/home/about_wayam', $data);
    }

    // Create
    

    // Edit
    public function edit()
    {
        /* form Post values */
        //  print_r($this->input->post());
        //  exit;
       $title =  $this->input->post('title');
       $description =  $this->input->post('description');
        $error = false; 

            $config['upload_path']          = 'assets/images/about_us/';
            $config['allowed_types']        = '*';
            $config['max_size']             = 5000;

            // $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('image')) {
                // print_r($_FILES['image0']);
                // $error = array('error' => $this->upload->display_errors());
                // $this->session->set_flashdata('error', $error);
                $error = true;
                // exit;
            } else {
                $image_data = $this->upload->data();
                // $this->upload->initialize($config);
            } 

        if ($error == false) {
            $images_name = $image_data['file_name']; 
            $data = [
                'id' =>  $this->input->post('id'),
                'about_wayam_image' => $images_name,
                'about_wayam_title' => $title,
                'about_wayam_description' => $description
            ];
            }else{
                $data = [
                    'id' =>  $this->input->post('id'),
                    'about_wayam_title' => $title,
                    'about_wayam_description' => $description
                ];
            }
            
// print_r( $data);
// exit;
            $this->about_wayam_model->edit($data);
            $this->session->set_flashdata('success', 'Wayammadhe ky wachal Updated Successfully');
            redirect(base_url('admin/about_wayam'));
        }
        public function delete()

        {
    
            $id = $this->input->post('id');
            // echo($id);
            // exit;
            $this->about_wayam_model->delete($id); 
            $this->session->set_flashdata('success', 'Banner Deleted');
    
            redirect(base_url('admin/about_wayam'));
        }
    
    
    
        public function status($id)
        {
    
            $this->about_wayam_model->status($id);
        }
    }

?>