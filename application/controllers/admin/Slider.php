<?php



defined('BASEPATH') or exit('No direct script access allowed');



class Slider extends CI_Controller

{
    public function __construct()

    {

        parent::__construct();

        $this->load->model('admin/slider_model');
    }



    public function index()

    {

        $data['data'] = $this->slider_model->fetch();

        $this->load->view('admin/home/slider', $data);
    }



    public function create()

    {
        $banners = [];
        $error = false;
        for ($i = 0; $i < 3; $i++) {
            $config['upload_path']          = 'uploads/';
            $config['allowed_types']        = '*';

            $config['max_size']             = 5000;

            $this->upload->initialize($config);

            if (!$this->upload->do_upload('image' . $i)) {
                print_r($_FILES['image0']);

                $error = array('error' => $this->upload->display_errors());
                var_dump($error);
                $this->session->set_flashdata('error', $error);
                $error = true;
                break;
            } else {

                array_push($banners, $this->upload->data());

                $this->upload->initialize($config);
            }
        }

        if ($error == false) {

            $images = [];

            foreach ($banners as $image) {

                array_push($images, $image['file_name']);
            }

            $data = [

                'lp_banner' => $images[0],

                'tb_banner' => $images[1],

                'mb_banner' => $images[2]

            ];

            $this->slider_model->create($data);

            $this->session->set_flashdata('success', 'New Banner Added');

            redirect(base_url('admin/slider'));
        }
    }



    public function edit()

    {

        $banners = [];

        $error = false;

        for ($i = 0; $i < 3; $i++) {

            $config['upload_path']          = 'uploads/';

            $config['allowed_types']        = '*';

            $config['max_size']             = 5000;

            // $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if (!$this->upload->do_upload('image' . $i)) {

                $error = array('error' => $this->upload->display_errors());

                $this->session->set_flashdata('error', $error);

                $error = true;

                break;
            } else {

                array_push($banners, $this->upload->data());

                $this->upload->initialize($config);
            }
        }

        if ($error == false) {

            $images = [];

            foreach ($banners as $image) {

                array_push($images, $image['file_name']);
            }

            $data = [

                'id' =>  $this->input->post('id'),

                'lp_banner' => $images[0],

                'tb_banner' => $images[1],

                'mb_banner' => $images[2]

            ];

            $this->slider_model->edit($data);

            $this->session->set_flashdata('success', 'Banner Updated Successfully');

            redirect(base_url('admin/slider'));
        }
    }



    public function delete()

    {

        $id = $this->input->post('id');

        $this->slider_model->delete($id);

        $this->session->set_flashdata('success', 'Banner Deleted');

        redirect(base_url('admin/slider'));
    }



    public function status($id)
    {

        $this->slider_model->status($id);
    }
}



/* End of file Slider.php */
