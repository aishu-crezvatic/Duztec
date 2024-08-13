<?php





defined('BASEPATH') or exit('No direct script access allowed');



class Blogcategory extends CI_Controller

{



    public function __construct()

    {

        parent::__construct();

        $this->load->model('admin/blog_model');

        $this->load->model('admin/blogcategory_model');

    }



    public function index()

    {

        $data['data'] = [

            'category' => $this->blog_model->fetchcategory()

        ];

        $this->load->view('admin/blog/category', $data);

    }



    public function create()

    {

        $banners = [];

        $error = false;

        for ($i = 0; $i < 2; $i++) {

            $config['upload_path']          = './uploads/';

            $config['allowed_types']        = 'gif|jpg|jpeg|png|webp';

            $config['max_size']             = 10000;

            // $config['max_width']            = 10240;

            // $config['max_height']           = 7680;

            // $config['file_name']            = md5(date('Y-m-d H:s:i'));



            $this->load->library('upload', $config);

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

                'image' => $images[0],

                'banner' => $images[1],

                'name' => $this->input->post('name'),

                'description' => $this->input->post('description'),

                'url_name' => $this->input->post('url_name')

            ];

            $this->blogcategory_model->create($data);

            $this->session->set_flashdata('success', 'category added');

        }

        redirect(base_url('admin/blogcategory'));

    }





    public function delete()

    {

        $id = $this->input->post('id');

        $this->blogcategory_model->delete($id);

        $this->session->set_flashdata('success', 'Category Deleted');

        redirect(base_url('admin/blogcategory'));

    }



    public function edit()

    {

        // if two image upload at once 

        if (($_FILES['image0']['size'] > 0) && ($_FILES['image1']['size'] > 0)) {

            $banners = [];

            $error = false;

            for ($i = 0; $i < 2; $i++) {

                $config['upload_path']          = './uploads/';

                $config['allowed_types']        = 'gif|jpg|jpeg|png|webp';

                $config['max_size']             = 1000;

                // $config['max_width']            = 10240;

                // $config['max_height']           = 7680;

                // $config['file_name']            = md5(date('Y-m-d H:s:i'));



                $this->load->library('upload', $config);

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

                    'id' => $this->input->post('id'),

                    'image' => $images[0],

                    'banner' => $images[1],

                    'name' => $this->input->post('name'),

                    'description' => $this->input->post('description'),

                    'url_name' => $this->input->post('url_name')

                ];

                $this->blogcategory_model->update($data);

                $this->session->set_flashdata('success', 'category updated');

            }

        }

        // if only image uploaded 

        elseif (($_FILES['image0']['size'] > 0) && ($_FILES['image1']['size'] == 0)) {



            $config['upload_path']          = './uploads/';

            $config['allowed_types']        = 'gif|jpg|jpeg|png|webp';

            $config['max_size']             = 1000;

            // $config['max_width']            = 10240;

            // $config['max_height']           = 7680;

            // $config['file_name']            = md5(date('Y-m-d H:s:i'));



            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('image0')) {

                $error = array('error' => $this->upload->display_errors());

                $this->session->set_flashdata('error', $error);

            } else {

                $image = $this->upload->data();

                $data = [

                    'id' => $this->input->post('id'),

                    'image' => $image['file_name'],

                    'name' => $this->input->post('name'),

                    'description' => $this->input->post('description'),

                    'url_name' => $this->input->post('url_name')

                ];

                $this->blogcategory_model->update($data);

                $this->session->set_flashdata('success', 'category updated');

            }

        }

        // if banner uploaded only 

        elseif (($_FILES['image0']['size'] == 0) && ($_FILES['image1']['size'] > 0)) {



            $config['upload_path']          = './uploads/';

            $config['allowed_types']        = 'gif|jpg|jpeg|png|webp';

            $config['max_size']             = 1000;

            // $config['max_width']            = 10240;

            // $config['max_height']           = 7680;

            // $config['file_name']            = md5(date('Y-m-d H:s:i'));



            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('image1')) {

                $error = array('error' => $this->upload->display_errors());

                $this->session->set_flashdata('error', $error);

            } else {

                $image = $this->upload->data();

                $data = [

                    'id' => $this->input->post('id'),

                    'banner' => $image['file_name'],

                    'name' => $this->input->post('name'),

                    'description' => $this->input->post('description'),

                    'url_name' => $this->input->post('url_name')

                ];

                $this->blogcategory_model->update($data);

                $this->session->set_flashdata('success', 'category updated');

            }

        }

        // no image is uploaded 

        else {

            $data = [

                'id' => $this->input->post('id'),

                'name' => $this->input->post('name'),

                'description' => $this->input->post('description'),

                'url_name' => $this->input->post('url_name')

            ];

            $this->blogcategory_model->update($data);

            $this->session->set_flashdata('success', 'category updated');

        }

        redirect(base_url('admin/blogcategory'));

    }

}



/* End of file Blogcategory.php */

