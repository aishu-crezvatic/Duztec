<?php

defined('BASEPATH') or exit('No direct script access allowed');
class Membership_faq extends CI_Controller

{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/membership_faq_model');
    }

    public function index()
    {
        $data['data'] = $this->membership_faq_model->fetch();

        $this->load->view('admin/home/membership_faq', $data);
    }

    // Create
    public function create()
    {
        /* form Post values */
       $question =  $this->input->post('question');
       $answer =  $this->input->post('answer');
        // exit;
        $error = false;

        if ($error == false) {    
            /* databae insert data */
            $data = [ 
                'question' => $question,
                'answer' => $answer
            ];

            // echo "<pre>";
            // print_r($data);
            // exit;
            /* databae insert query */
            $this->membership_faq_model->create($data);
            $this->session->set_flashdata('success', 'FAQ Added');
            redirect(base_url('admin/membership_faq'));
        }
    }

    // Edit
    public function edit()
    {
        /* form Post values */
        $question =  $this->input->post('question');
        $answer =  $this->input->post('answer');

        if ($error == false) {
            // $images_name = $image_data['file_name']; 
            $data = [
                'id' =>  $this->input->post('id'),
                'question' => $question,
                'answer' => $answer
            ];
            }
            
// print_r( $data);
// exit;
            $this->membership_faq_model->edit($data);
            $this->session->set_flashdata('success', ' Updated Successfully');
            redirect(base_url('admin/membership_faq'));
        }
        public function delete()

        {
    
            $id = $this->input->post('id');
            // echo($id);
            // exit;
            $this->membership_faq_model->delete($id); 
            $this->session->set_flashdata('success', 'FAQ Deleted');
    
            redirect(base_url('admin/membership_faq'));
        }
    
    
    
        public function status($id)
        {
    
            $this->membership_faq_model->status($id);
        }
    }

?>