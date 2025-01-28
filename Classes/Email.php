<?php
//Load Composer's autoloader
require $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


/**
 * Email class for handling all email operations
 */

class Email
{
    private $mail;
    private $email_to;
    public function __construct()
    {
        $this->mail = new PHPMailer(true);
    }
    public function sendEmail($subject, $body, $email)
    {   
        /**
         * load config file
         */
        $config_file = $_SERVER['DOCUMENT_ROOT'] . "/config.json";
        //! check file exists
        if (!file_exists($config_file)) {
            $code = 404;
            $msg = "Config file not found";
            echo $code . " " . $msg;
            exit;
        } else {
            $config = json_decode(file_get_contents($config_file));
            $to = $config->email->to;
            $host = $config->email->host;
            $username = $config->email->username;
            $password = $config->email->password;
            $from = $config->email->from;
            $fromname = $config->email->fromname;
        }
        try {
            //Server settings
            //$this->mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
            $this->mail->isSMTP();                                            // Send using SMTP
            $this->mail->Host       = $host;                     // Set the SMTP server to send through
            $this->mail->SMTPAuth   = true;                                   // Enable SMTP authentication
            $this->mail->Username   = $username;
            $this->mail->Password   = $password;
            $this->mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
            $this->mail->Port       = 465;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
            //recipient info
            $this->mail->AddAddress($email); //to email
            $this->mail->addBcc($to); //bcc email to admins of the site from config file
            $this->mail->setFrom($from, $fromname);
            //content
            $this->mail->IsHTML(true);
            $this->mail->Subject = $subject;
            $this->mail->Body = $body;
            $this->mail->Send();
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$this->mail->ErrorInfo}";
        }

    }
}
