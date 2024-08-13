<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Anka extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Anka_model');
    }
    public function index()
    {
        $this->view();
    }
    public function create()
    {
        $config['upload_path']          = './uploads/pdf';
        $config['allowed_types']        = '*';
        $this->upload->initialize($config);
        if (!$this->upload->do_upload('upload_pdf')) {
            $error = array('error' => $this->upload->display_errors());
            $this->session->set_flashdata('error', $error);
        } else {
            $pdf = $this->upload->data();
        }
        if (!$this->upload->do_upload('upload_pdf_image')) {
            $error = array('error' => $this->upload->display_errors());
            $this->session->set_flashdata('error', $error);
        } else {
            $image = $this->upload->data();
        }
        $data = [
            'anka-pdf' => $pdf['file_name'],
            'anka-image' => $image['file_name'],
            'anka-name' => $this->input->post('anka-name'),
            'anka-alt-name' => $this->input->post('anka-alt-name')
        ];
        // var_dump($data);exit();
        $this->Anka_model->add($data);
        $this->session->set_flashdata('success', 'Event added');
        redirect(base_url('admin/Anka'));
    }
    public function view()
    {
        $data["result"] = $this->Anka_model->get();
        $this->load->view('admin/anka/view', $data);
    }
    public function edit()
    {
        $id = $this->uri->segment(4);
        $data["anka"] = $this->Anka_model->get_anka_data($id);
        $this->load->view('admin/anka/edit-anka', $data);
    }
    public function update()
    {
        $id = $this->input->post("anka-id");
        $config['upload_path']          = './uploads/pdf';
        $config['allowed_types']        = '*';
        $this->upload->initialize($config);

        // If pdf and image are present 
        if (($_FILES['upload_pdf']['size'] > 0) && ($_FILES['upload_pdf_image']['size'] > 0)) {
            if (!$this->upload->do_upload('upload_pdf')) {
                $error = array('error' => $this->upload->display_errors());
                $this->session->set_flashdata('error', $error);
            } else {
                $pdf = $this->upload->data();
            }
            if (!$this->upload->do_upload('upload_pdf_image')) {
                $error = array('error' => $this->upload->display_errors());
                $this->session->set_flashdata('error', $error);
            } else {
                $image = $this->upload->data();
            }
            $data = [
                'anka-pdf' => $pdf['file_name'],
                'anka-image' => $image['file_name'],
                'anka-name' => $this->input->post('anka-name'),
                'anka-alt-name' => $this->input->post('anka-alt-name')
            ];
        }

        // only pdf update 
        elseif (($_FILES['upload_pdf']['size'] > 0)) {
            if (!$this->upload->do_upload('upload_pdf')) {
                $error = array('error' => $this->upload->display_errors());
                $this->session->set_flashdata('error', $error);
            } else {
                $pdf = $this->upload->data();
            }
            $data = [
                'anka-pdf' => $pdf['file_name'],
                'anka-name' => $this->input->post('anka-name'),
                'anka-alt-name' => $this->input->post('anka-alt-name')
            ];
        }

        // only image update 
        elseif (($_FILES['upload_pdf_image']['size'] > 0)) {
            if (!$this->upload->do_upload('upload_pdf_image')) {
                $error = array('error' => $this->upload->display_errors());
                $this->session->set_flashdata('error', $error);
            } else {
                $image = $this->upload->data();
            }
            $data = [
                'anka-image' => $image['file_name'],
                'anka-name' => $this->input->post('anka-name'),
                'anka-alt-name' => $this->input->post('anka-alt-name')
            ];
        }

        // if both not need to update 
        elseif (($_FILES['upload_pdf']['size'] == 0) && ($_FILES['upload_pdf_image']['size'] == 0)) {
            $data = [
                'anka-name' => $this->input->post('anka-name'),
                'anka-alt-name' => $this->input->post('anka-alt-name')
            ];
        }

        $this->Anka_model->update_anka($data, $id);
        $this->session->set_flashdata('success', 'Event added');
        redirect(base_url('admin/Anka'));
    }
    public function delete()
    {
        $id = $this->uri->segment(4);
        $this->Anka_model->delete_data($id);
        redirect(base_url('admin/Anka'));
    }
    public function status($id)
    {
        $this->Anka_model->status($id);
    }
}
