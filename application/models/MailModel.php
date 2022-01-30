<?php

defined('BASEPATH') or exit('No direct script access allowed');

class MailModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function sendMail($to, $subject, $body)
    {
        try {
            require_once __DIR__.'/mailer/class.phpmailer.php';
            require_once __DIR__.'/mailer/PHPMailerAutoload.php';

            $mail = new PHPMailer();
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->Port = 587;
            $mail->SMTPSecure = 'tls';
            $mail->SMTPAuth = 'true';
            $mail->Username = 'abc@gmail.com';
            $mail->Password = 'abc@Tech';
            $mail->FromName = 'karmyogi.com';
            $mail->addAddress($to);
            $mail->Subject = $subject;
            $mail->msgHTML($body);
            $result = 'sent';
            if (!$mail->send()) {
                $result = 'failed '.$mail->ErrorInfo;
            }

            return $result;
        } catch (Exception $ex) {
            return 'exception';
        }
    }
}
