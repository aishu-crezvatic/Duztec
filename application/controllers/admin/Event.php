<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Event extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/event_model');
    }
    public function index()
    {
        $data['data'] = $this->event_model->fetch();
        $this->load->view('admin/event/event', $data);
    }
    public function create()
    {
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = '*';
        $this->upload->initialize($config);

        if (!$this->upload->do_upload('image')) {
            $error = array('error' => $this->upload->display_errors());
            $this->session->set_flashdata('error', $error);
        } else {
            $image = $this->upload->data();
            $data = [
                'image' => $image['file_name'],
                'url_title' => $this->input->post('url_title'),
                'title' => $this->input->post('title'),
                'description' => $this->input->post('description'),
                'meta_title' => $this->input->post('meta_title'),
                'meta_description' => $this->input->post('meta_description'),
                'meta_keyword' => $this->input->post('meta_keyword'),
                'event_date' => $this->input->post('event_date'),
            ];
            $this->event_model->create($data);
            $this->session->set_flashdata('success', 'Event added');
            redirect(base_url('admin/event'));
        }
    }
    public function edit($id)
    {
        $data['data'] = $this->event_model->editFetch($id);
        // var_dump($data['data']);exit;
        $this->load->view('admin/event/edit', $data);
    }
    public function update()
    {
        $id = $this->input->post('id');
        if ($_FILES['image']['size'] > 0) {
            $config['upload_path']          = './uploads/';
            $config['allowed_types']        = '*';
            $this->upload->initialize($config);
            if (!$this->upload->do_upload('image')) {
                $error = array('error' => $this->upload->display_errors());
                $this->session->set_flashdata('error', $error);
            } else {
                $image = $this->upload->data();
                $data = [
                    'id' => $id,
                    'image' => $image['file_name'],
                    'url_title' => $this->input->post('url_title'),
                    'title' => $this->input->post('title'),
                    'description' => $this->input->post('description'),
                    'meta_title' => $this->input->post('meta_title'),
                    'meta_description' => $this->input->post('meta_description'),
                    'meta_keyword' => $this->input->post('meta_keyword'),
                    'event_date' => $this->input->post('event_date'),
                ];
            }
        } else {
            $data = [
                'id' => $id,
                'url_title' => $this->input->post('url_title'),
                'title' => $this->input->post('title'),
                'description' => $this->input->post('description'),
                'meta_title' => $this->input->post('meta_title'),
                'meta_description' => $this->input->post('meta_description'),
                'meta_keyword' => $this->input->post('meta_keyword'),
                'event_date' => $this->input->post('event_date'),
            ];
        }
        $this->event_model->update($data);
        $this->session->set_flashdata('success', 'Event Updated');
        redirect(base_url('admin/event'));
    }
    public function delete()
    {
        $id = $this->input->post('id');
        $this->event_model->delete($id);
        $this->session->set_flashdata('success', 'Blog Deleted');
        redirect(base_url('admin/event'));
    }
}
/* End of file Event.php */
