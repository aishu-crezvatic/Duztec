<?php

defined('BASEPATH') or exit('No direct script access allowed');
class bapat_sir_intro_about_us extends CI_Controller

{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/bapat_sir_intro_about_us_model');
    }

    public function index()
    {
        $data['data'] = $this->bapat_sir_intro_about_us_model->fetch();

        $this->load->view('admin/home/bapat_sir_intro_about_us', $data);
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

            $config['upload_path']          = 'assets/images/others/';
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
                'bapat_sir_image' => $images_name,
                'bapat_sir_name' => $title,
                'about_bapat_sir' => $description
            ];
            }else{
                $data = [
                    'id' =>  $this->input->post('id'),
                    'bapat_sir_name' => $title,
                    'about_bapat_sir' => $description
                ];
            }
            
// print_r( $data);
// exit;
            $this->bapat_sir_intro_about_us_model->edit($data);
            $this->session->set_flashdata('success', 'Details Updated Successfully');
            redirect(base_url('admin/bapat_sir_intro_about_us'));
        }
        public function delete()

        {
    
            $id = $this->input->post('id');
            // echo($id);
            // exit;
            $this->bapat_sir_intro_about_us_model->delete($id); 
            $this->session->set_flashdata('success', 'Details Deleted');
    
            redirect(base_url('admin/bapat_sir_intro_about_us'));
        }
    
    
    
        public function status($id)
        {
    
            $this->bapat_sir_intro_about_us_model->status($id);
        }
    }

?>