<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Audio_model extends CI_Model
{

    public function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->load->database();
    }
    // for story category
    public function fetchCategory()
    {
        $this->db->select('*');
        $this->db->from('audio_category');
        $this->db->where('deleted_at is null');
        $this->db->order_by('id', 'desc');

        $query =  $this->db->get();
        if ($query->num_rows() > 0) {
            $data = $query->result_array();
        } else {
            $data = null;
        }
        return $data;
    }

    public function addCategory($data)
    {
        $this->db->insert('audio_category', $data);
    }

    public function deleteCategory($id)
    {
        $date = date('Y-m-d H:s:i');
        $data = [
            'deleted_at' => $date,
        ];
        $this->db->where('id', $id);
        $this->db->update('audio_category', $data);
    }

    public function updateCategory($data)
    {
        $this->db->where('id', $data['id']);
        $this->db->update('audio_category', $data);
    }

    // for story
    public function fetchAudio()
    {
        $this->db->select('*');
        $this->db->from('audio');
        $this->db->where('deleted_at is null');
        $this->db->order_by('id', 'desc');

        $query =  $this->db->get();
        if ($query->num_rows() > 0) {
            $data = $query->result_array();
        } else {
            $data = null;
        }
        return $data;
    }

    public function fetchOneAudio($id)
    {
        $this->db->select('*');
        $this->db->from('audio');
        $this->db->where('id', $id);

        $query =  $this->db->get();
        if ($query->num_rows() > 0) {
            $data = $query->row_array();
        } else {
            $data = null;
        }
        return $data;
    }

    public function addAudio($data)
    {
        $this->db->insert('audio', $data);
    }

    public function updateAudio($data)
    {
        $this->db->where('id', $data['id']);
        $this->db->update('audio', $data);
    }

    public function deleteAudio($id)
    {
        $date = date('Y-m-d H:s:i');
        $data = [
            'deleted_at' => $date,
        ];
        $this->db->where('id', $id);
        $this->db->update('audio', $data);
    }
}

/* End of file Audio_model.php */
