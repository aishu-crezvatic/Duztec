<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Frontend_model extends CI_Model
{
    public function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->load->database();
    }
    public function productCategory()
    {
        $data = $this->db->select('*')
            ->from('category')
            ->where('status = 1')
            ->order_by('c_id ', 'asc')
            ->get()
            ->result_array();
        // print_r($data);
        return $data;
    }
    
    public function productSubCategory()
    {
        $data = $this->db->select('*')
            ->from('sub_category')
            ->where('status = 1')
            ->order_by('sc_id ', 'asc')
            ->get()
            ->result_array();
        // print_r($data);
        return $data;
    }
    
    public function product_with_cat_sub_cat()
    {
        $data = $this->db->select('*')
            ->from('sub_category')
            ->where('status = 1')
            ->order_by('sc_id ', 'asc')
            ->get()
            ->result_array();
        // print_r($data);
        return $data;
    }

    public function product($c_id)
    {
        $data = $this->db->select('*')
            ->from('product')
            ->where('status = 1')
            ->where('c_id', $c_id)
            ->order_by('c_id ', 'asc')
            ->get()
            ->result_array();
        // print_r($data);
        return $data;
    }
    // Blog
    public function blog($b_id)
    {
        $data = $this->db->select('*')
            ->from('blogs')
            ->where('status = 1')
            ->where('b_id', $b_id)
            ->order_by('b_id ', 'asc')
            ->get()
            ->result_array();
        // print_r($data);
        return $data;
    }
    // Blog_category
    public function blog_caegory($b_id)
    {
        $data = $this->db->select('*')
            ->from('blogs')
            ->where('status = 1')
            ->where('b_id', $b_id)
            ->order_by('b_id ', 'asc')
            ->get()
            ->result_array();
        // print_r($data);
        return $data;
    }

}
/* End of file Index_model.php */
