<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Orders_model extends CI_Model
{
    public function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->load->database();
    }
    public function fetch()
    {
        $data = $this->db->select('*')->from('users as u')->join('orders as o', 'u.user_id = o.user_id', 'RIGHT')->order_by('o.created_at','desc')->get()->result_array();
        return $data;
    }
}
/* End of file Slider_model.php */
