<?php

defined('BASEPATH') or exit('No direct script access allowed');
class bb_spardha_hero extends CI_Controller

{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/bb_spardha_hero_model');
    }

    public function index()
    {
        $data['data'] = $this->bb_spardha_hero_model->fetch();

        $this->load->view('admin/home/bb_spardha_hero', $data);
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
        $video2 =  $this->input->post('video2'); 
        $bb_title =  $this->input->post('bb_title'); 
        $bb_desc =  $this->input->post('bb_desc');



        $error = false;

        $config['upload_path']          = 'assets/images/bb_spardha_hero/';
        $config['allowed_types']        = '*';
        $config['max_size']             = 5000;

        if ($error == false) { 
            $data = [
                'id' =>  $this->input->post('id'), 
                'video_title' => $title,
                'hero_video_1' => $video1,
                'hero_video_2' => $video2,
                'bb_title' => $bb_title,
                'bb_desc' => $bb_desc
            ];
        } 

        // print_r( $data);
        // exit;
        $this->bb_spardha_hero_model->edit($data);
        $this->session->set_flashdata('success', 'bb spardha hero content Updated Successfully');
        redirect(base_url('admin/bb_spardha_hero'));
    }
    public function delete()

    {

        $id = $this->input->post('id');
        // echo($id);
        // exit;
        $this->bb_spardha_hero_model->delete($id);
        $this->session->set_flashdata('success', 'Banner Deleted');

        redirect(base_url('admin/bb_spardha_hero'));
    }



    public function status($id)
    {

        $this->bb_spardha_hero_model->status($id);
    }
}
