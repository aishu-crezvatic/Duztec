<?php

defined('BASEPATH') or exit('No direct script access allowed');
class V_vichar_v_vikas extends CI_Controller

{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/v_vichar_v_vikas_model');
    }

    public function index()
    {
        $data['data'] = $this->v_vichar_v_vikas_model->fetch();

        $this->load->view('admin/home/v_vichar_v_vikas', $data);
    }

    // Create


    // Edit
    public function edit()
    {
        // /* form Post values */
        //  print_r($this->input->post());
        //  exit;
        $title =  $this->input->post('title');
        $video1 =  $this->input->post('video1');
        // $video2 =  $this->input->post('video2'); 
        $bb_title =  $this->input->post('bb_title'); 
        $bb_desc =  $this->input->post('bb_desc');



        $error = false;

        $config['upload_path']          = 'assets/images/v_vichar_v_vikas/';
        $config['allowed_types']        = '*';
        $config['max_size']             = 5000;

        if ($error == false) { 
            $data = [
                'id' =>  $this->input->post('id'), 
                'video_title' => $title,
                'hero_video_1' => $video1,
                // 'hero_video_2' => $video2,
                'bb_title' => $bb_title,
                'bb_desc' => $bb_desc
            ];
        } 

        // print_r( $data);
        // exit;
        $this->v_vichar_v_vikas_model->edit($data);
        $this->session->set_flashdata('success', 'content Updated Successfully');
        redirect(base_url('admin/v_vichar_v_vikas'));
    }
    public function delete()

    {

        $id = $this->input->post('id');
        // echo($id);
        // exit;
        $this->v_vichar_v_vikas_model->delete($id);
        $this->session->set_flashdata('success', 'Content Deleted');

        redirect(base_url('admin/v_vichar_v_vikas'));
    }



    public function status($id)
    {

        $this->v_vichar_v_vikas_model->status($id);
    }
}
