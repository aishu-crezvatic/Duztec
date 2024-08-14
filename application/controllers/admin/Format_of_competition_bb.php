<?php

defined('BASEPATH') or exit('No direct script access allowed');
class Format_of_competition_bb extends CI_Controller

{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/format_of_competition_bb_model');
    }

    public function index()
    {
        $data['data'] = $this->format_of_competition_bb_model->fetch();

        $this->load->view('admin/home/format_of_competition_bb', $data);
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
            $this->format_of_competition_bb_model->create($data);
            $this->session->set_flashdata('success', 'Point Added');
            redirect(base_url('admin/format_of_competition_bb'));
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
            $this->format_of_competition_bb_model->edit($data);
            $this->session->set_flashdata('success', 'Point Updated Successfully');
            redirect(base_url('admin/format_of_competition_bb'));
        }
        public function delete()

        {
    
            $id = $this->input->post('id');
            // echo($id);
            // exit;
            $this->format_of_competition_bb_model->delete($id); 
            $this->session->set_flashdata('success', 'Point Deleted');
    
            redirect(base_url('admin/format_of_competition_bb'));
        }
    
    
    
        public function status($id)
        {
    
            $this->format_of_competition_bb_model->status($id);
        }
    }

?>