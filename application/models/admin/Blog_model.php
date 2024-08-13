<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Blog_model extends CI_Model
{
    public function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->load->database();
    }
    public function fetch()
    {
        $this->db->select('*');
        $this->db->from('blogs');
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
    public function fetchcategory()
    {
        $this->db->select('*');
        $this->db->from('category');
        $this->db->where('deleted_at is null');
        $this->db->order_by('id', 'asc');
        $query =  $this->db->get();
        if ($query->num_rows() > 0) {
            $data = $query->result_array();
        } else {
            $data = null;
        }
        return $data;
    }
    public function create($data)
    {   
        $this->db->insert('blogs', $data);
    }
    public function get($id)
    {
        $this->db->select('*');
        $this->db->from('blogs');
        $this->db->where('id', $id);
        $query =  $this->db->get();
        if ($query->num_rows() > 0) {
            $data = $query->row_array();
        }
        return $data;
    }
    public function update($data)
    {   
        $this->db->where('id', $data['id']);
        $this->db->update('blogs', $data);
    }
    public function delete($id)
    {
        $date = date('Y-m-d H:s:i');
        $data = [
            'deleted_at' => $date,
        ];
        $this->db->where('id', $id);
        $this->db->update('blogs', $data);
    }

    public function status($id)
    {
        $this->db->select('*');
        $this->db->from('blogs');
        $this->db->where('id', $id);
        $query =  $this->db->get();
        if ($query->num_rows() > 0) {
            $data = $query->row_array();
            if ($data['status'] == 1) {
                $row = [
                    'status' => 0
                ];
                $this->db->where('id', $id);
                $this->db->update('blogs', $row);
            } else {
                $row = [
                    'status' => 1
                ];
                $this->db->where('id', $id);
                $this->db->update('blogs', $row);
            }
        }
    }
}
/* End of file Blog_model.php */
