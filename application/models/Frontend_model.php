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
            // ->where('status = 1')
            ->order_by('c_id ', 'asc')
            ->get()
            ->result_array();
        // print_r($data);
        return $data;
    }

    public function home_page()
    {
        $data = $this->db->select('*')
            ->from('home_table')
            // ->where('status = 1')
            ->order_by('h_id ', 'asc')
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

    public function get_sectors()
    {
        $data = $this->db->select('*')
            ->from('sector_detail')
            ->where('status = 1')
            //            ->order_by('sc_id ', 'asc')
            ->get()
            ->result_array();
        // print_r($data);
        return $data;
    }

    public function get_blog_categories()
    {
        $data = $this->db->select('*')
            ->from('blog_category')
            ->where('status = 1')
            //            ->order_by('sc_id ', 'asc')
            ->get()
            ->result_array();
        // print_r($data);
        // exit;
        return $data;
    }

    public function blog_categories($bc_id)
    {
        $data = $this->db->select('*')
            ->from('blogs')
            ->where('status = 1')
            ->where("bc_id = $bc_id")
            //            ->order_by('sc_id ', 'asc')
            ->get()
            ->result_array();
        // print_r($data);
        return $data;
    }

    public function blog_detail()
    {
        $data = $this->db->select('*')
            ->from('blogs')
            ->where('status = 1')
            //            ->order_by('sc_id ', 'asc')
            ->get()
            ->result_array();
        // print_r($data);
        return $data;
    }


    public function get_clientele()
    {
        $data = $this->db->select('*')
            ->from('clientele')
            ->where('status = 1')
            //            ->order_by('sc_id ', 'asc')
            ->get()
            ->result_array();
        // print_r($data);
        return $data;
    }

    public function product_with_cat_sub_cat() //not used yet
    {
        //$this->db->select('product.*, category.name as cat_name,category.description as cat_description,category.category_image,  sub_category.name as sub_cat_name,sub_category.description as sub_cat_description');
        $this->db->select('product.*, category.name as cat_name, category.description as cat_description, category.category_image as cat_image, sub_category.name as sub_cat_name, sub_category.description as sub_cat_description');
        $this->db->from('product');
        $this->db->join('category', 'product.c_id = category.c_id', 'left');
        $this->db->join('sub_category', 'product.sc_id = sub_category.sc_id', 'left');
        $this->db->where(
            array(
                'product.status' => 1,
                'category.status' => 1
                //'sub_category.status' => 1
            )
        );
        //        $this->db->limit(24,  $start);
//        $this->db->order_by('dv_id', 'DESC');
        $this->db->distinct();

        $query = $this->db->get();
        // print_r($query);

        return $query->result_array();
    }

    public function product_with_cat_sub_cat2($c_id) //not used yet
    {
        //         $this->db->select('product.*, category.name as cat_name,category.description as cat_description,category.category_image,  sub_category.name as sub_cat_name,sub_category.description as sub_cat_description');
        $this->db->select('product.*, category.name as cat_name,category.description as cat_description,category.category_image as cat_image, sub_category.name as sub_cat_name,sub_category.description as sub_cat_description');
        $this->db->from('product');
        $this->db->join('category', 'product.c_id = category.c_id', 'left');
        $this->db->join('sub_category', 'product.sc_id = sub_category.sc_id', 'left');
        $this->db->where(
            array(
                'product.status' => 1,
                'category.status' => 1,
                'product.c_id' => $c_id
            )
        );
        //        $this->db->limit(24,  $start);
//        $this->db->order_by('dv_id', 'DESC');
        $query = $this->db->get();
        return $query->result_array();

        //        $data = $this->db->select('*')
//            ->from('sub_category')
//            ->where('status = 1')
//            ->order_by('sc_id ', 'asc')
//            ->get()
//            ->result_array();
        //    print_r($data);
//        return $data;
    }

    public function product_with_cat_sub_cat_search($query) //not used yet
    {
        //         $this->db->select('product.*, category.name as cat_name,category.description as cat_description,category.category_image,  sub_category.name as sub_cat_name,sub_category.description as sub_cat_description');
        $this->db->select('product.*, category.name as cat_name,category.description as cat_description,category.category_image as cat_image, sub_category.name as sub_cat_name,sub_category.description as sub_cat_description');
        $this->db->from('product');
        $this->db->join('category', 'product.c_id = category.c_id', 'left');
        $this->db->join('sub_category', 'product.sc_id = sub_category.sc_id', 'left');
        $this->db->like('product.name', $query);
        $this->db->where(
            array(
                'product.status' => 1,
                'category.status' => 1
                //                    'sub_category.status' => 1
            )
        );

        //        $this->db->limit(24,  $start);
//        $this->db->order_by('dv_id', 'DESC');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function product($p_id)
    {
        $data = $this->db->select('*')
            ->from('product')
            ->where('status = 1')
            ->where('p_id', $p_id)
            ->order_by('c_id ', 'asc')
            ->get()
            ->result_array();
        // print_r($data);
        return $data;
    }

    public function subcat($c_id, $sc_id, $exclude_product_name = null)
    {
        // Build the query
        $this->db->select('*');
        $this->db->from('product');
        $this->db->where('c_id', $c_id);
        $this->db->where('sc_id', $sc_id);

        if ($exclude_product_name) {
            $this->db->where('name !=', $exclude_product_name);
        }

        $query = $this->db->get();

        $data['results'] = $query->result_array();

        $data['sql_query'] = $this->db->last_query(); // Store the last executed SQL query

        // print_r($data);

        return $data['results'];
    }

    public function about_us()
    {
        $data = $this->db->select('*')
            ->from('about_us')
            ->where('status = 1')
            // ->where('id', id)
            // ->order_by('au_id ', 'asc')
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


    public function sector_detail()
    {
        $data = $this->db->select('*')
            ->from('sector_detail')
            ->where('status = 1')
            // ->where('b_id', $b_id)
            ->order_by('sd_id ', 'asc')
            ->get()
            ->result_array();
        // print_r($data);
        return $data;
    }
    public function gallery()
    {
        $data = $this->db->select('*')
            ->from('gallery')
            ->get()
            ->result_array();

        return $data;
    }

    public function get_contact()
    {
        $data = $this->db->select('*')
            ->from('contact_us')
            ->get()
            ->result_array();

        return $data;
    }


}
/* End of file Index_model.php */






//888888888888888888888888888888888888888 
