<?php

defined('BASEPATH') or exit('No direct script access allowed');
class salagar_mandal extends CI_Controller

{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/salagar_mandal_model');
    }

    public function index()
    {
        $data['data'] = $this->salagar_mandal_model->fetch();

        $this->load->view('admin/home/salagar_mandal', $data);
    }

    // Create
    public function create()
    {
        /* form Post values */
       $title =  $this->input->post('title');
       $description =  $this->input->post('desc');
        // exit;
        $error = false;
            /* Upload image start */
            $config['upload_path']          = 'assets/images/advisor/';
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
                'salagar_image' => $image_name,
                'salagar_title' => $title,
                'salagar_desc' => $description
            ];

            // echo "<pre>";
            // print_r($data);
            // exit;
            /* databae insert query */
            $this->salagar_mandal_model->create($data);
            $this->session->set_flashdata('success', 'New section Added');
            redirect(base_url('admin/salagar_mandal'));
        }
    }

    // Edit
    public function edit()
    {
        /* form Post values */
       $title =  $this->input->post('title');
       $description =  $this->input->post('desc');
        $error = false; 

            $config['upload_path']          = 'assets/images/advisor/';
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
                'salagar_image' => $images_name,
                'salagar_title' => $title,
                'salagar_desc' => $description
            ];
            }else{
                $data = [
                    'id' =>  $this->input->post('id'),
                    'salagar_title' => $title,
                    'salagar_desc' => $description
                ];
            }
            
// print_r( $data);
// exit;
            $this->salagar_mandal_model->edit($data);
            $this->session->set_flashdata('success', 'Wayammadhe ky wachal Updated Successfully');
            redirect(base_url('admin/salagar_mandal'));
        }
        public function delete()

        {
    
            $id = $this->input->post('id');
            // echo($id);
            // exit;
            $this->salagar_mandal_model->delete($id); 
            $this->session->set_flashdata('success', 'Salagar details Deleted');
    
            redirect(base_url('admin/salagar_mandal'));
        }
    
    
    
        public function status($id)
        {
    
            $this->salagar_mandal_model->status($id);
        }
    }

?>