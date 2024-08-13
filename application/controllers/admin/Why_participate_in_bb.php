<?php

defined('BASEPATH') or exit('No direct script access allowed');
class Why_participate_in_bb extends CI_Controller

{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/why_participate_in_bb_model');
    }

    public function index()
    {
        $data['data'] = $this->why_participate_in_bb_model->fetch();

        $this->load->view('admin/home/why_participate_in_bb', $data);
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
            $this->why_participate_in_bb_model->create($data);
            $this->session->set_flashdata('success', 'Point Added');
            redirect(base_url('admin/why_participate_in_bb'));
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
            $this->why_participate_in_bb_model->edit($data);
            $this->session->set_flashdata('success', 'Point Updated Successfully');
            redirect(base_url('admin/why_participate_in_bb'));
        }
        public function delete()

        {
    
            $id = $this->input->post('id');
            // echo($id);
            // exit;
            $this->why_participate_in_bb_model->delete($id); 
            $this->session->set_flashdata('success', 'Point Deleted');
    
            redirect(base_url('admin/why_participate_in_bb'));
        }
    
    
    
        public function status($id)
        {
    
            $this->why_participate_in_bb_model->status($id);
        }
    }

?>