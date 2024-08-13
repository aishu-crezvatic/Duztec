<?php

defined('BASEPATH') or exit('No direct script access allowed');
class Gift_for_kids extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/gift_for_kids_model');
    }

    public function index()
    {
        $data['data'] = $this->gift_for_kids_model->fetch();

        $this->load->view('admin/home/gift_for_kids', $data);
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
            $this->gift_for_kids_model->edit($data);
            $this->session->set_flashdata('success', 'Point Updated Successfully');
            redirect(base_url('admin/gift_for_kids'));
        }
        public function delete()

        {
    
            $id = $this->input->post('id');
            // echo($id);
            // exit;
            $this->gift_for_kids_model->delete($id); 
            $this->session->set_flashdata('success', 'Point Deleted');
    
            redirect(base_url('admin/gift_for_kids'));
        }
    
        public function status($id)
        {
    
            $this->gift_for_kids_model->status($id);
        }
    }

?>