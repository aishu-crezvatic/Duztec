<?php

defined('BASEPATH') or exit('No direct script access allowed');

class wayam_sahitik_model extends CI_Model
{

    public function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->load->database();
    }

    public function create($data)
    {
        $this->db->insert('sahitik_table', $data);
    }

    public function fetch()
    {
        $this->db->select('*');
        $this->db->from('sahitik_table');
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
    public function edit($data)
    {
        $this->db->where('id', $data['id']);
        $this->db->update('sahitik_table', $data);
    }
    public function delete($id)
    {
        $this->db->where('id', $id);
        $data = [
            'deleted_at' => date('Y-m-d H:s:i')
        ];
        $this->db->update('sahitik_table', $data);
    }

    public function status($id)
    {
        $this->db->select('*');
        $this->db->from('sahitik_table');
        $this->db->where('id', $id);
        $query =  $this->db->get();
        if ($query->num_rows() > 0) {
            $data = $query->row_array();
            // var_dump($data);

            if ($data['status'] == 1) {
                $row = [
                    'status' => 0
                ];
                $this->db->where('id', $id);
                $this->db->update('sahitik_table', $row);
            } else {
                $row = [
                    'status' => 1
                ];
                $this->db->where('id', $id);
                $this->db->update('sahitik_table', $row);
            }
        }
    }
}
?>