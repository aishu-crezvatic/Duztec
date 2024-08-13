<?php



defined('BASEPATH') or exit('No direct script access allowed');



class Audio extends CI_Controller

{

    public function __construct()

    {

        parent::__construct();

        $this->load->model('admin/audio_model');

    }



    public function index()

    {

        $data['data'] = [

            'category' => $this->audio_model->fetchCategory(),

            'audio' => $this->audio_model->fetchAudio()

        ];

        $this->load->view('admin/audio/audio', $data);

    }



    // for audio category 

    public function category()

    {

        $data['data'] = $this->audio_model->fetchCategory();

        $this->load->view('admin/audio/category', $data);

    }



    public function addcategory()

    {

        $config['upload_path']          = './uploads/';

        $config['allowed_types']        = 'gif|jpg|png';

        $config['max_size']             = 1000;

        $config['max_width']            = 1024;

        $config['max_height']           = 768;

        // $config['file_name']            = md5(date('Y-m-d H:s:i'));



        // $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if (!$this->upload->do_upload('image')) {

            $error = array('error' => $this->upload->display_errors());

            $this->session->set_flashdata('error', $error);

        } else {

            $image = $this->upload->data();

            $data = [

                'image' => $image['file_name'],

                'name' => $this->input->post('name'),

            ];

            $this->audio_model->addCategory($data);

            $this->session->set_flashdata('success', 'New Category Created');

            redirect(base_url('admin/audio/category'));

        }

    }



    public function deletecategory()

    {

        $id = $this->input->post('id');

        $this->audio_model->deleteCategory($id);

        $this->session->set_flashdata('success', 'Blog Deleted');

        redirect(base_url('admin/audio/category'));

    }



    public function editcategory()

    {

        if ($_FILES['image']['size'] > 0) {



            $config['upload_path']          = './uploads/';

            $config['allowed_types']        = 'gif|jpg|png';

            $config['max_size']             = 1000;

            $config['max_width']            = 1024;

            $config['max_height']           = 768;

            // $config['file_name']            = md5(date('Y-m-d H:s:i'));



            // $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if (!$this->upload->do_upload('image')) {

                $error = array('error' => $this->upload->display_errors());

                $this->session->set_flashdata('error', $error);

            } else {

                $image = $this->upload->data();

                $data = [

                    'id' => $this->input->post('id'),

                    'image' => $image['file_name'],

                    'name' => $this->input->post('name'),

                ];

            }

        } else {

            $data = [

                'id' => $this->input->post('id'),

                'name' => $this->input->post('name')

            ];

        }

        var_dump($data);

        $this->audio_model->updateCategory($data);

        $this->session->set_flashdata('success', 'Category Updated');

        redirect(base_url('admin/audio/category'));

    }

    // end 





    // for Audio story 

    public function addstory()

    {

        $files = [];

        $error = false;

        for ($i = 0; $i < 2; $i++) {

            $config['upload_path']          = './uploads/';

            // $config['file_name']            = md5(date('Y-m-d H:s:i'));

            $config['allowed_types']        = '*';

            $config['max_size']             = 20971520;

            // $config['max_width']            = 1024;

            // $config['max_height']           = 768;


            $this->upload->initialize($config);
            // $this->load->library('upload', $config);

            if (!$this->upload->do_upload('file' . $i)) {

                $error = array('error' => $this->upload->display_errors());

                var_dump($error);

                $this->session->set_flashdata('error', $error);

                $error = true;

                break;

            } else {

                array_push($files, $this->upload->data());

                $this->upload->initialize($config);

            }

        }

        if ($error == false) {

            $file = [];

            foreach ($files as $image) {

                array_push($file, $image['file_name']);

            }

            $data = [

                'image' => $file[0],

                'src' => $file[1],

                'title' => $this->input->post('name'),

                'category' => $this->input->post('category'),

                'description' => $this->input->post('description'),

            ];

            $this->audio_model->addAudio($data);

            $this->session->set_flashdata('success', 'New Audio Story Added');

            redirect(base_url('admin/audio'));

        }

    }



    public function editstory($id)

    {

        $data['data'] = [

            'category' => $this->audio_model->fetchCategory(),

            'audio' => $this->audio_model->fetchOneAudio($id)

        ];

        $this->load->view('admin/audio/editaudio', $data);

    }



    public function updatestory()

    {

        if (($_FILES['file0']['size'] > 0) && ($_FILES['file1']['size'] > 0)) {

            $files = [];

            $error = false;

            for ($i = 0; $i < 2; $i++) {

                $config['upload_path']          = './uploads/';

                $config['file_name']            = md5(date('Y-m-d H:s:i'));

                $config['allowed_types']        = '*';

                // $config['max_size']             = 20971520;

                // $config['file_name']            = md5(date('Y-m-d H:s:i'));

                // $config['max_width']            = 1024;

                // $config['max_height']           = 768;



                // $this->load->library('upload', $config);
                $this->upload->initialize($config);

                if (!$this->upload->do_upload('file' . $i)) {

                    $error = array('error' => $this->upload->display_errors());

                    var_dump($error);

                    $this->session->set_flashdata('error', $error);

                    $error = true;

                    break;

                } else {

                    array_push($files, $this->upload->data());

                    $this->upload->initialize($config);

                }

            }

            if ($error == false) {

                $file = [];

                foreach ($files as $image) {

                    array_push($file, $image['file_name']);

                }
                $data = [

                    'id' => $this->input->post('id'),

                    'image' => $file[0],

                    'src' => $file[1],

                    'title' => $this->input->post('name'),

                    'category' => $this->input->post('category'),

                    'description' => $this->input->post('description'),

                ];

            }

        } elseif ($_FILES['file0']['size'] > 0) {

            $config['upload_path']          = './uploads/';

            $config['allowed_types']        = '*';

            // $config['max_size']             = 20971520;

            // $config['file_name']            = md5(date('Y-m-d H:s:i'));

            // $config['max_width']            = 1024;

            // $config['max_height']           = 768;



            // $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if (!$this->upload->do_upload('file0')) {

                $error = array('error' => $this->upload->display_errors());

                $this->session->set_flashdata('error', $error);

            } else {

                $image = $this->upload->data();

                $data = [

                    'id' => $this->input->post('id'),

                    'image' => $image['file_name'],

                    'title' => $this->input->post('name'),

                    'category' => $this->input->post('category'),

                    'description' => $this->input->post('description'),

                ];

            }

        } elseif ($_FILES['file1']['size'] > 0) {

            $config['upload_path']          = './uploads/';

            $config['allowed_types']        = '*';

            // $config['max_size']             = 20971520;

            // $config['file_name']            = md5(date('Y-m-d H:s:i'));

            // $config['max_width']            = 1024;

            // $config['max_height']           = 768;



            // $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if (!$this->upload->do_upload('file1')) {

                $error = array('error' => $this->upload->display_errors());

                $this->session->set_flashdata('error', $error);

            } else {

                $image = $this->upload->data();

                $data = [

                    'id' => $this->input->post('id'),

                    'src' => $image['file_name'],

                    'title' => $this->input->post('name'),

                    'category' => $this->input->post('category'),

                    'description' => $this->input->post('description'),

                ];

            }

        } else {

            $data = [

                'id' => $this->input->post('id'),

                'title' => $this->input->post('name'),

                'category' => $this->input->post('category'),

                'description' => $this->input->post('description'),

            ];



        }

      

        $this->audio_model->updateAudio($data);

        $this->session->set_flashdata('success', 'Audio Story updated');

        redirect(base_url('admin/audio'));

    }



    public function deleteaudio()

    {

        $id = $this->input->post('id');

        $this->audio_model->deleteAudio($id);

        $this->session->set_flashdata('success', 'Audio story Deleted');

        redirect(base_url('admin/audio'));

    }

    // end 

}



/* End of file AUdio.php */

