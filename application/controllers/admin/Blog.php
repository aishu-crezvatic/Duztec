<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Blog extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/blog_model');
    }
    public function index()
    {
        $data['data'] = [
            'blog' => $this->blog_model->fetch(),
            'category' => $this->blog_model->fetchcategory()
        ];
        $this->load->view('admin/blog/blog', $data);
    }
    public function create()
    {
        $banners = [];
        $error = false;
        for ($i = 0; $i < 2; $i++) {
            $config['upload_path']          = './uploads/';
            $config['allowed_types']        = '*';
            $config['max_size']             = 10000;
            // $config['max_width']            = 1024;
            // $config['max_height']           = 768;
            // $config['file_name']            = md5(date('Y-m-d H:s:i'));
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
                'image' => $images[0],
                'banner' => $images[1],
                'title' => $this->input->post('title'),
                'meta-title' => $this->input->post('meta-title'),
                'meta-description' => $this->input->post('meta-description'),
                'url_title' => $this->input->post('url_title'),
                'description' =>  $this->input->post('description'),
                'short-description' =>  $this->input->post('short-description'),
                'keywords' => $this->input->post('keyword'),
                'category' => implode(",", $this->input->post('category')),
            ];
            $this->blog_model->create($data);
            $this->session->set_flashdata('success', 'Blog added');
            redirect(base_url('admin/blog'));
        }
    }
    public function get()
    {
        $id = $this->input->post('data');
        $data = $this->blog_model->get($id);
        var_dump($data);
    }
    public function edit($id)
    {
        $data['data'] = [
            'blog' => $this->blog_model->get($id),
            'category' => $this->blog_model->fetchcategory()
        ];
        $this->load->view('admin/blog/edit', $data);
    }
    public function update()
    {
        if (($_FILES['image0']['size'] > 0) && ($_FILES['image1']['size'] > 0)) {
            // echo "both";
            $banners = [];
            $error = false;
            for ($i = 0; $i < 2; $i++) {
                $config['upload_path']          = './uploads/';
                $config['allowed_types']        = '*';
                $config['max_size']             = 1000;
                // $config['file_name']            = md5(date('Y-m-d H:s:i'));
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
                    'id' => $this->input->post('id'),
                    'image' => $images[0],
                    'banner' => $images[1],
                    'title' => $this->input->post('title'),
                    'meta-title' => $this->input->post('meta-title'),
                    'meta-description' => $this->input->post('meta-description'),
                    'url_title' => $this->input->post('url_title'),
                    'description' => $this->input->post('description'),
                    'short-description' => $this->input->post('short-description'),
                    'keywords' => $this->input->post('keyword'),
                    'category' => implode(",", $this->input->post('category')),
                ];
            }
        } elseif ($_FILES['image0']['size'] > 0) {
            // echo '1';
            $config['upload_path']          = './uploads/';
            $config['allowed_types']        = '*';
            $config['max_size']             = 1000;
            // $config['max_width']            = 1024;
            // $config['max_height']           = 768;
            // $config['file_name']            = md5(date('Y-m-d H:s:i'));
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('image0')) {
                $error = array('error' => $this->upload->display_errors());
                $this->session->set_flashdata('error', $error);
            } else {
                $image = $this->upload->data();
                $data = [
                    'id' => $this->input->post('id'),
                    'image' => $image['file_name'],
                    'title' => $this->input->post('title'),
                    'url_title' => $this->input->post('url_title'),
                    'meta-title' => $this->input->post('meta-title'),
                    'meta-description' => $this->input->post('meta-description'),
                    'short-description' => $this->input->post('short-description'),
                    'description' => $this->input->post('description'),
                    'keywords' => $this->input->post('keyword'),
                    'category' => implode(",", $this->input->post('category')),
                ];
            }
        } elseif ($_FILES['image1']['size'] > 0) {
            // echo '2';
            $config['upload_path']          = './uploads/';
            $config['allowed_types']        = '*';
            $config['max_size']             = 1000;
            // $config['max_width']            = 1024;
            // $config['max_height']           = 768;
            // $config['file_name']            = md5(date('Y-m-d H:s:i'));
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('image1')) {
                $error = array('error' => $this->upload->display_errors());
                $this->session->set_flashdata('error', $error);
            } else {
                $image = $this->upload->data();
                $data = [
                    'id' => $this->input->post('id'),
                    'banner' => $image['file_name'],
                    'title' => $this->input->post('title'),
                    'url_title' => $this->input->post('url_title'),
                    'meta-title' => $this->input->post('meta-title'),
                    'meta-description' => $this->input->post('meta-description'),
                    'short-description' => $this->input->post('short-description'),
                    'description' => $this->input->post('description'),
                    'keywords' => $this->input->post('keyword'),
                    'category' => implode(",", $this->input->post('category')),
                ];
            }
        } else {
            // echo '0';
            $data = [
                'id' => $this->input->post('id'),
                'title' => $this->input->post('title'),
                'url_title' => $this->input->post('url_title'),
                'meta-title' => $this->input->post('meta-title'),
                'meta-description' => $this->input->post('meta-description'),
                'short-description' => $this->input->post('short-description'),
                'description' => $this->input->post('description'),
                'keywords' => $this->input->post('keyword'),
                'category' => implode(",", $this->input->post('category')),
            ];
        }
        // print_r($data);exit;
        $this->blog_model->update($data);
        $this->session->set_flashdata('success', 'Blog Updated');
        redirect(base_url('admin/blog'));
    }
    public function delete()
    {
        $id = $this->input->post('id');
        $this->blog_model->delete($id);
        $this->session->set_flashdata('success', 'Blog Deleted');
        redirect(base_url('admin/blog'));
    }
    public function status($id)
    {
        $this->blog_model->status($id);
    }
}
/* End of file Blog.php */
