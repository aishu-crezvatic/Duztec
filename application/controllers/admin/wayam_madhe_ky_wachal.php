<?php

defined('BASEPATH') or exit('No direct script access allowed');
class wayam_madhe_ky_wachal extends CI_Controller

{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/wayam_madhe_ky_wachal_model');
    }

    public function index()
    {
        $data['data'] = $this->wayam_madhe_ky_wachal_model->fetch();

        $this->load->view('admin/home/wayam_madhe_ky_wachal', $data);
    }

    // Create
    public function create()
    {
        /* form Post values */
       $title =  $this->input->post('title');
        // exit;
        $error = false;
            /* Upload image start */
            $config['upload_path']          = 'assets/images/logo/';
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
                'kywachal_image' => $image_name,
                'kywachal_title' => $title
            ];

            // echo "<pre>";
            // print_r($data);
            // exit;
            /* databae insert query */
            $this->wayam_madhe_ky_wachal_model->create($data);
            $this->session->set_flashdata('success', 'New section Added');
            redirect(base_url('admin/wayam_madhe_ky_wachal'));
        }
    }

    // Edit
    public function edit()
    {
        /* form Post values */
       $title =  $this->input->post('title');
        $error = false; 

            $config['upload_path']          = 'assets/images/logo/';
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
                'kywachal_image' => $images_name,
                'kywachal_title' => $title
            ];
            }else{
                $data = [
                    'id' =>  $this->input->post('id'),
                    'kywachal_title' => $title
                ];
            }
            
// print_r( $data);
// exit;
            $this->wayam_madhe_ky_wachal_model->edit($data);
            $this->session->set_flashdata('success', 'Wayammadhe ky wachal Updated Successfully');
            redirect(base_url('admin/wayam_madhe_ky_wachal'));
        }
        public function delete()

        {
    
            $id = $this->input->post('id');
            // echo($id);
            // exit;
            $this->wayam_madhe_ky_wachal_model->delete($id); 
            $this->session->set_flashdata('success', 'Banner Deleted');
    
            redirect(base_url('admin/wayam_madhe_ky_wachal'));
        }
    
    
    
        public function status($id)
        {
    
            $this->wayam_madhe_ky_wachal_model->status($id);
        }
    }

?>