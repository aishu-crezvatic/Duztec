<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Orders extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/orders_model');
    }
    public function index()
    {
        $data['data'] = $this->orders_model->fetch();
        $this->load->view('admin/orders/orders', $data);
    }
}
/* End of file Index.php */
