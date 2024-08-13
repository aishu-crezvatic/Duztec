<?php

defined('BASEPATH') or exit('No direct script access allowed');
class contact_us extends CI_Controller

{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/contact_us_model');
    }

    public function index()
    {
        $data['data'] = $this->contact_us_model->fetch();
// print_r($data['data']);
// exit;
        $this->load->view('admin/home/contact_us', $data);
    }


    // Edit
    public function edit()
    {
        /* form Post values */
       $email =  $this->input->post('email');
       $phone =  $this->input->post('phone');
       $address =  $this->input->post('address');
       $phone2 =  $this->input->post('phone2');
        $error = false; 


        if ($error == false) {
            // $images_name = $image_data['file_name']; 
            $data = [
                'id' =>  $this->input->post('id'), 
                'email_id' => $email,
                'phone_no' => $phone,
                'phone_no2' => $phone2,
                'address' => $address
            ];
            }else{
                $data = [
                    'id' =>  $this->input->post('id'), 
                ];
            }
            
// print_r( $data);
// exit;
            $this->contact_us_model->edit($data);
            $this->session->set_flashdata('success', 'contact details Updated Successfully');
            redirect(base_url('admin/contact_us'));
        }
        public function delete()

        {
    
            $id = $this->input->post('id');
            // echo($id);
            // exit;
            $this->contact_us_model->delete($id); 
            $this->session->set_flashdata('success', 'contact details  Deleted');
    
            redirect(base_url('admin/contact_us'));
        }
    
    
    
        public function status($id)
        {
    
            $this->contact_us_model->status($id);
        }
    }

?>