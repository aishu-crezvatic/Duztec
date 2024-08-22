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
            $this->mail->SMTPSecure = 'tls';                       
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
        try {
            $this->mail->clearAddresses();
            $this->mail->addAddress($to);
            $this->mail->isHTML($isHTML);
            $this->mail->Subject = $subject;
            $this->mail->Body    = $body;

            $this->mail->send();
            return true;
        } catch (Exception $e) {
            log_message('error', 'PHPMailer Error: ' . $this->mail->ErrorInfo);
            return false;
        }
    }
}
