<?php

defined('BASEPATH') or exit('No direct script access allowed');
class Wayam_inauguration_video extends CI_Controller

{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/wayam_inauguration_video_model');
    }

    public function index()
    {
        $data['data'] = $this->wayam_inauguration_video_model->fetch();

        $this->load->view('admin/home/wayam_inauguration_video', $data);
    }

    // Create
   

    // Edit
    public function edit()
    {
        /* form Post values */
        $points =  $this->input->post('points'); 

        if ($error == false) {
            // $images_name = $image_data['file_name']; 
            $data = [
                'id' =>  $this->input->post('id'),
                'points' => $points, 
            ];
            }
            
// print_r( $data);
// exit;
            $this->wayam_inauguration_video_model->edit($data);
            $this->session->set_flashdata('success', 'Point Updated Successfully');
            redirect(base_url('admin/wayam_inauguration_video'));
        }
        public function delete()

        {
    
            $id = $this->input->post('id');
            // echo($id);
            // exit;
            $this->wayam_inauguration_video_model->delete($id); 
            $this->session->set_flashdata('success', 'Point Deleted');
    
            redirect(base_url('admin/wayam_inauguration_video'));
        }
    
    
    
        public function status($id)
        {
    
            $this->wayam_inauguration_video_model->status($id);
        }
    }

?>