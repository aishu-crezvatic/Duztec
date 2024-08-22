<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once APPPATH . 'third_party/mailer/src/Exception.php';
require_once APPPATH . 'third_party/mailer/src/PHPMailer.php';
require_once APPPATH . 'third_party/mailer/src/SMTP.php';

class PhpMailer_lib {

    private $mail;

    public function __construct() {
        $this->mail = new PHPMailer(true);

        try {
            // Server settings
            $this->mail->isSMTP();                                 
            $this->mail->Host       = 'smtp.gmail.com';         
            $this->mail->SMTPAuth   = true;                        
            $this->mail->Username   = 'aishwarya@gmail.com';   
            $this->mail->Password   = 'vpcq bljp hxsj iple';             
            $this->mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;                       
            $this->mail->Port       = 587;                         

            // Recipients
            $this->mail->setFrom('webdeveloper.crezvatic', 'Your Company');
            $this->mail->addReplyTo('dhamalesiddesh07@gmail.com', 'Your Company');

            // Enable verbose debug output
            $this->mail->SMTPDebug = 2;  // Set this to 0 to disable debugging output

        } catch (Exception $e) {
            log_message('error', 'PHPMailer Error: ' . $this->mail->ErrorInfo);
        }
    }

    public function sendMail($to, $subject, $body, $isHTML = true) {
        echo "<h3>Debugging Email Sending</h3>";
        echo "<strong>To:</strong> " . htmlspecialchars($to) . "<br>";
        echo "<strong>Subject:</strong> " . htmlspecialchars($subject) . "<br>";
        echo "<strong>Body:</strong><br>" . nl2br(htmlspecialchars($body)) . "<br>";
        echo "<strong>Is HTML:</strong> " . ($isHTML ? 'Yes' : 'No') . "<br>";
    
        try {
            // Clear previous recipients and set new ones
            $this->mail->clearAddresses();
            $this->mail->addAddress($to);
            
            // Set email format and content
            $this->mail->isHTML($isHTML); // Set email format to HTML or plain text
            $this->mail->Subject = $subject;
            $this->mail->Body    = $body;
            $this->mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
            
            // Enable debug output for troubleshooting
            $this->mail->SMTPDebug = 2; // 2 = client messages (you can set to 3 for more verbose output)
    
            // Attempt to send the email
            echo 'Message not yet sent<br>';
            $this->mail->send();
            echo 'Message has been sent<br>';
    
            return true;
        } catch (Exception $e) {
            // Log error message and display it
            $errorMessage = 'PHPMailer Error: ' . $this->mail->ErrorInfo;
            log_message('error', $errorMessage);
            echo '<p style="color: red;">' . htmlspecialchars($errorMessage) . '</p>';
            return false;
        }
    }
}