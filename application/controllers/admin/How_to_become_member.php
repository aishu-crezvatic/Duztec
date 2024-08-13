<?php

defined('BASEPATH') or exit('No direct script access allowed');
class How_to_become_member extends CI_Controller

{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/how_to_become_member_model');
    }

    public function index()
    {
        $data['data'] = $this->how_to_become_member_model->fetch();

        $this->load->view('admin/home/how_to_become_member', $data);
    }

    // Create
    public function create()
    {
        /* form Post values */
       $points =  $this->input->post('points'); 
        // exit;
        $error = false;

        if ($error == false) {    
            /* databae insert data */
            $data = [ 
                'points' => $points, 
            ];

            // echo "<pre>";
            // print_r($data);
            // exit;
            /* databae insert query */
            $this->how_to_become_member_model->create($data);
            $this->session->set_flashdata('success', 'Point Added');
            redirect(base_url('admin/how_to_become_member'));
        }
    }

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
            $this->how_to_become_member_model->edit($data);
            $this->session->set_flashdata('success', 'Point Updated Successfully');
            redirect(base_url('admin/how_to_become_member'));
        }
        public function delete()

        {
    
            $id = $this->input->post('id');
            // echo($id);
            // exit;
            $this->how_to_become_member_model->delete($id); 
            $this->session->set_flashdata('success', 'Point Deleted');
    
            redirect(base_url('admin/how_to_become_member'));
        }
    
    
    
        public function status($id)
        {
    
            $this->how_to_become_member_model->status($id);
        }
    }

?>