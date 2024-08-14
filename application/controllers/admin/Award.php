<?php

defined('BASEPATH') or exit('No direct script access allowed');
class Award extends CI_Controller

{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/award_model');
    }

    public function index()
    {
        $data['data'] = $this->award_model->fetch();

        $this->load->view('admin/home/award', $data);
    }

    // Create
    public function create()
    {
        /* form Post values */
       $title =  $this->input->post('title');
       $description =  $this->input->post('description');
        // exit;
        $error = false;
            /* Upload image start */
            $config['upload_path']          = 'assets/images/awards/';
            $config['allowed_types']        = '*';
            $config['max_size']             = 5000;
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('image')) {
                print_r($_FILES['image']);
                $error = array('error' => $this->upload->display_errors());
                var_dump($error);
                $this->session->set_flashdata('error', $error);
                $error = true;
                exit;
            } else {
                $image_data = $this->upload->data();
            }
            /* Upload image end */

        if ($error == false) {
            $image_name =  $image_data['file_name'];
    
            /* databae insert data */
            $data = [
                'image' => $image_name,
                'title' => $title,
                'description' => $description
            ];

            // echo "<pre>";
            // print_r($data);
            // exit;
            /* databae insert query */
            $this->award_model->create($data);
            $this->session->set_flashdata('success', 'New section Added');
            redirect(base_url('admin/award'));
        }
    }

    // Edit
    public function edit()
    {
        /* form Post values */
       $title =  $this->input->post('title');
       $description =  $this->input->post('description');
        $error = false; 

            $config['upload_path']          = 'assets/images/awards/';
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
                'image' => $images_name,
                'title' => $title,
                'description' => $description
            ];
            }else{
                $data = [
                    'id' =>  $this->input->post('id'),
                    'title' => $title,
                    'description' => $description
                ];
            }
            
// print_r( $data);
// exit;
            $this->award_model->edit($data);
            $this->session->set_flashdata('success', 'award Updated Successfully');
            redirect(base_url('admin/award'));
        }
        public function delete()

        {
    
            $id = $this->input->post('id');
            // echo($id);
            // exit;
            $this->award_model->delete($id); 
            $this->session->set_flashdata('success', 'award details Deleted');
    
            redirect(base_url('admin/award'));
        }
    
        public function status($id)
        {
    
            $this->award_model->status($id);
        }
    }

?>