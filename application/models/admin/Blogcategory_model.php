<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Blogcategory_model extends CI_Model
{

    public function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->load->database();
    }

    public function create($data)
    {
        $this->db->insert('category', $data);
    }

    public function update($data)
    {
        $this->db->where('id', $data['id']);
        $this->db->update('category', $data);
    }

    public function delete($id)
    {

        $date = date('Y-m-d H:s:i');
        $data = [
            'deleted_at' => $date
        ];
        $this->db->where('id', $id);
        $this->db->update('category', $data);
    }
}

/* End of file Blogcategory_model.php */
