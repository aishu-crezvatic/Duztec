<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EmailController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('PhpMailer_lib');
        $this->load->library('form_validation');
    }

    public function send_email() {
        // Set validation rules
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('product', 'Product', 'required');
        $this->form_validation->set_rules('phone', 'Phone', 'required|numeric');
        $this->form_validation->set_rules('comment', 'Comment', 'required');

        if ($this->form_validation->run() == FALSE) {
            $errors = validation_errors();
            echo json_encode(['status' => 'error', 'message' => $errors]);
        } else {
            $name = $this->input->post('name');
            $email = $this->input->post('email');
            $product = $this->input->post('product');
            $phone = $this->input->post('phone');
            $comment = $this->input->post('comment');
            // $name = 'siddhesh';
            // $email = 'dhamalesiddhesh07@gmail.com';
            // $product = 'testing product';
            // $phone = 989009698;
            // $comment = 'no coment';

            $subject = 'Request a Quote';
            $body = "Name: $name<br>Email: $email<br>Product: $product<br>Phone: $phone<br>Comment: $comment";
            echo "Email Body:<br>";
            echo nl2br(htmlspecialchars($body)); 
            if($this->phpmailer_lib->sendMail($email, $subject, $body)) {
            
                $response = ['status' => 'success', 'message' => 'Email sent successfully!'];
                // $this->phpmailer_lib->sendMail($email, 'Thank You', 'Thank you for your request. We will get back to you soon.');
            } else {
                $response = ['status' => 'error', 'message' => 'Failed to send emailll.'];

            }

            echo json_encode($response);
        }
    }
}
