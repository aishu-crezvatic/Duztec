|<?php
    defined('BASEPATH') or exit('No direct script access allowed');
    class Event_model extends CI_Model
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
            $this->db->from('events');
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
        public function editFetch($id)
        {
            $this->db->select('*');
            $this->db->from('events');
            $this->db->where('id', $id);
            $query =  $this->db->get();
            if ($query->num_rows() > 0) {
                $data = $query->row_array();
            } else {
                $data = null;
            }
            return $data;
        }
        public function create($data)
        {
            $this->db->insert('events', $data);
        }
        public function delete($id)
        {
            $date = date('Y-m-d H:s:i');
            $data = [
                'deleted_at' => $date,
            ];
            $this->db->where('id', $id);
            $this->db->update('events', $data);
        }
        public function update($data)
        {
            $this->db->where('id', $data['id']);
            $this->db->update('events', $data);
        }
    }
/* End of file Event_model.php */
