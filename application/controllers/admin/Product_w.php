<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Product extends CI_Controller

{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/product_model');
    }
    public function index()
    {
        $data['data'] = $this->product_model->fetch();
        $this->load->view('admin/product/product', $data);
    }
    public function create()
    {
        $images = [];
        $count = count($_FILES['image']['name']);
        for ($i = 0; $i < $count; $i++) {
            if (!empty($_FILES['image']['name'][$i])) {
                $_FILES['file']['name'] = $_FILES['image']['name'][$i];
                $_FILES['file']['type'] = $_FILES['image']['type'][$i];
                $_FILES['file']['tmp_name'] = $_FILES['image']['tmp_name'][$i];
                $_FILES['file']['error'] = $_FILES['image']['error'][$i];
                $_FILES['file']['size'] = $_FILES['image']['size'][$i];
                $config['upload_path'] = 'uploads/';
                $config['allowed_types'] = '*';
                $config['max_size'] = '50000';
                // $config['file_name'] = md5(date('Y-m-d H:s:i'));
                // $this->load->library('upload', $config);
                $this->upload->initialize($config); 
                if ($this->upload->do_upload('file')) {
                    $uploadData = $this->upload->data();
                    $filename = $uploadData['file_name'];
                    $images[] = $filename;
                }
            }

        }

        $images = implode(",", $images);

        $name = $this->input->post('name');

        $price = $this->input->post('price');

        $discount = $this->input->post('discount');

        $description = $this->input->post('description');

        $data = [

            'image' => $images,

            'title' => $name,

            'description' => $description,

            'price' => $price,

            'discount' => $discount

        ];

        $this->product_model->create($data);

        $this->session->set_flashdata('success', 'Product Created');

        redirect(base_url('admin/product'));

    }



    public function edit($id)

    {

        $data['data'] = $this->product_model->edit($id);

        $this->load->view('admin/product/edit', $data);

    }



    public function update()

    {

        $images = [];

        if ($_FILES['image']['name'][0] != null) {

            $count = count($_FILES['image']['name']);

            for ($i = 0; $i < $count; $i++) {

                if (!empty($_FILES['image']['name'][$i])) {



                    $_FILES['file']['name'] = $_FILES['image']['name'][$i];

                    $_FILES['file']['type'] = $_FILES['image']['type'][$i];

                    $_FILES['file']['tmp_name'] = $_FILES['image']['tmp_name'][$i];

                    $_FILES['file']['error'] = $_FILES['image']['error'][$i];

                    $_FILES['file']['size'] = $_FILES['image']['size'][$i];



                    $config['upload_path'] = 'uploads/';

                    $config['allowed_types'] = '*';

                    $config['max_size'] = '5000';

                    // $config['file_name'] = md5(date('Y-m-d H:s:i'));



                    // $this->load->library('upload', $config);
                    $this->upload->initialize($config); 


                    // var_dump($_FILES['image']['name']);exit;
                    if ($this->upload->do_upload('file')) {

                        $uploadData = $this->upload->data();

                        $filename = $uploadData['file_name'];

                        $images[] = $filename;

                    }

                }

            }

            $images = implode(",", $images);

            $data = [

                'id' => $this->input->post('id'),

                'image' => $images,

                'title' => $this->input->post('name'),

                'description' => $this->input->post('description'),

                'price' => $this->input->post('price'),

                'discount' => $this->input->post('discount'),

            ];

        } else {

            $data = [

                'id' => $this->input->post('id'),

                'title' => $this->input->post('name'),

                'description' => $this->input->post('description'),

                'price' => $this->input->post('price'),

                'discount' => $this->input->post('discount'),

            ];

        }

        $this->product_model->update($data);

        $this->session->set_flashdata('success', 'Product Updated');

        redirect(base_url('admin/product'));

    }



    public function delete(){

        $id = $this->input->post('id');

        $this->product_model->delete($id);

        $this->session->set_flashdata('success', 'Product Deleted');

        redirect(base_url('admin/product'));

    }



    public function status($id){

        $this->product_model->status($id);

    }

}



/* End of file Index.php */

