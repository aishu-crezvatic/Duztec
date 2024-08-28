

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mail extends CI_Controller{
   
    public function  __construct(){
        parent::__construct();
    }
   
    public function index(){
        // Load PHPMailer library
        $this->load->library('phpmailer_lib');
       
        // PHPMailer object
        $mail = $this->phpmailer_lib->load();
       
        // SMTP configuration
        $mail->isSMTP();
        $mail->Host     = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'aishwarya@crezvatic.com'; // Your Gmail address
        $mail->Password = 'vpcq bljp hxsj iple'; // App Password or your Gmail password
        $mail->SMTPSecure = 'tls';  // Use 'tls' instead of 'ssl'
        $mail->Port     = 587; // TLS port for Gmail
        // $mail->Port     = 465;
        
        $mail->setFrom('aishwarya@crezvatic.com', 'Sender Aishwarya');
        $mail->addReplyTo('aishwarya@crezvatic.com', 'CodexWorld');
       
        // Add a recipient
        $mail->addAddress('aishwaryapbhoir@gmail.com');
       
        // Email subject
        $mail->Subject = 'New Quote Request Submission';
       
        // Collect form data from POST request
        $formData = $this->input->post();
       
        // Prepare the email body with form data
        $mailContent = "<h1>New Quote Request Details</h1>";
        $mailContent .= "<p>Here are the details submitted through the quote request form:</p>";
        $mailContent .= "<ul>";
        $mailContent .= "<li><strong>Name:</strong> " . htmlspecialchars($formData['name']) . "</li>";
        $mailContent .= "<li><strong>Email:</strong> " . htmlspecialchars($formData['email']) . "</li>";
        $mailContent .= "<li><strong>Product:</strong> " . htmlspecialchars($formData['product']) . "</li>";
        $mailContent .= "<li><strong>Phone:</strong> " . htmlspecialchars($formData['phone']) . "</li>";
        $mailContent .= "<li><strong>Comment:</strong> " . htmlspecialchars($formData['comment']) . "</li>";
        $mailContent .= "<li><strong>Captcha:</strong> " . htmlspecialchars($formData['captcha']) . "</li>";
        $mailContent .= "</ul>";
       
        // Set email format to HTML
        $mail->isHTML(true);
        $mail->Body = $mailContent;
       
        // Send email
        if(!$mail->send()){
            echo 'Mail could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            echo 'Mail has been sent';
        }
    }
   
}