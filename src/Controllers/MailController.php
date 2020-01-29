<?php

namespace System\Controllers;

use System\Controllers\Controller;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class MailController extends Controller {

    public $required_fields = [

    ];

    public function __construct(){

        
    }

    public function send() {

        if(isset($_POST['form_send_to']) && !empty($_POST['form_send_to'])) {

            $_POST['form_send_to'] = base64_decode($_POST['form_send_to']);

            if(strpos($_POST['form_send_to'], ",") !== false)
                $email_to = explode(",", $_POST['form_send_to']);
            else if(strpos($_POST['form_send_to'], ";") !== false)
                $email_to = explode(";", $_POST['form_send_to']);
            else
                $email_to = $_POST['form_send_to'];

        } else {
            $email_to = 'tests@erickfirmo.dev';
        }

        foreach ($_POST as $k => $v) {
                if($k == "email")
                    $email_reply = $v;

                if($k == "nome")
                    $nome = $v;
        }

        $writeHTML = '';
        $message_content = '';
        $message_content .= $writeHTML;
        $message_content .= '';
        $return = array();
        $message = "";

        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->SMTPDebug = SMTP_DEBUG;
        $mail->Host = SMTP_HOST;
        $mail->Port = SMTP_PORT;
        $mail->SMTPSecure = SMTP_SECURE;
        $mail->SMTPAuth = SMTP_AUTH;
        $mail->Username = SMTP_USER;
        $mail->Password = SMTP_PASS;
        $fromName = SMTP_NAME;
        $mail->SetFrom(SMTP_FROM, $fromName);

        $nome = !empty($nome) ? $nome : 'Usuário';

        if (isset($array->send_to))
            $mail->AddAddress("{$array->send_to}", "$fromName");
        else {
            if (is_array($email_to)) {
                foreach ($email_to as $emailt) $mail->AddAddress("$emailt", "$fromName");
            } else {
                $mail->AddAddress("$email_to", "$fromName");
            }
        }

        $mail->addReplyTo("$email_reply", "$nome");
        $mail->IsHTML(true);
        $mail->CharSet = 'utf-8';
        $mail->Subject  = "[".$tipo_form."] - Mensagem do Sr(a). ".$nome." ";
        $mail->Body = "$message";

        if (isset($_FILES) && array_key_exists("arquivo", $_FILES)) {
            $file = (isset($_FILES["arquivo"])) ? $_FILES["arquivo"] : FALSE;
            for ($x = 0; $x < count($_FILES['arquivo']['name']); $x++) {
                if (empty($file['name'][$x])) {
                    unset($file['name'][$x]);
                    unset($file['tmp_name'][$x]);
                } else {
                    if (is_array($_FILES['arquivo']['name']))
                        $mail->AddAttachment($file['tmp_name'][$x], $file['name'][$x]);
                    else {
                        $mail->AddAttachment($file['tmp_name'], $file['name']);
                    }
                }
            }
        }

        if (isset($_POST['attach']) && !empty($_POST['attach'])) {
            $attachs = json_decode(stripslashes($_POST['attach']));
            foreach ($attachs as $file) {
                $source_file = file_get_contents($file->url);
                if ($source_file !== false && !empty($source_file)) $mail->addStringAttachment($source_file, $file->name);
            }
        }
    }
}