<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * CodeIgniter DomPDF Library
 *
 * Generate PDF's from HTML in CodeIgniter
 *
 * @packge        CodeIgniter
 * @subpackage        Libraries
 * @category        Libraries
 * @author        Ardianta Pargo
 * @license        MIT License
 * @link        https://github.com/ardianta/codeigniter-dompdf
 */
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class Mailer {
    /**
     * PDF filename
     * @var String
     */
    function send($name, $mail_address, $subject, $content){
        $CI =   &get_instance();
        $users = $CI->db->get_where('users',['level'=>'admin'])->row();
        $smtp_setting = $CI->db->get_where('smtp_setting')->row();
        $mail = new PHPMailer(true);
        try {
            //Server settings
            $mail->SMTPDebug = false; SMTP::DEBUG_SERVER;                      // Enable verbose debug output
            $mail->isSMTP();                                            // Send using SMTP
            $mail->Host       = $smtp_setting->smtp_host;                    // Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
            $mail->Username   = $smtp_setting->smtp_username;                     // SMTP username
            $mail->Password   = $smtp_setting->smtp_password;                               // SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
            $mail->Port       = 465;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

            //Recipients
            $mail->setFrom('noreply@ppdb.baitunnaim.com', 'PPDB Baitun Naim');
            $mail->addAddress($mail_address, $name);     // Add a recipient
            $mail->addAddress($users->email);

            // Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = $subject;
            $mail->Body    = $content;

            $mail->send();
            return true;
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            return false;
        }
    }
}