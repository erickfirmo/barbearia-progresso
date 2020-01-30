<?php

namespace System\Controllers;

use System\Controllers\Controller;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class MailController extends Controller {

    static public function send(array $data) {

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

        $name = !empty($data['name']) ? $data['name'] : 'Usuário';
        $phone = !empty($data['phone']) ? $data['phone'] : null;
        $email_reply = !empty($data['email_reply']) ? $data['email_reply'] : null;
        $service = !empty($data['service']) ? $data['service'] : null;
        $message = !empty($data['message']) ? $data['message'] : null;
        $email_to = !empty($data['email_to']) ? $data['email_to'] : null;


        if (isset($array->send_to))
            $mail->AddAddress("{$array->send_to}", "$fromName");
        else {
            if (is_array($email_to)) {
                foreach ($email_to as $emailt) $mail->AddAddress("$emailt", "$fromName");
            } else {
                $mail->AddAddress("$email_to", "$fromName");
            }
        }

        $mail->addReplyTo("$email_reply", "$name");
        $mail->IsHTML(true);
        $mail->CharSet = 'utf-8';
        $mail->Subject  = "[".$tipo_form."] - Mensagem do Sr(a). ".$name." ";
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
   
        $enviado = $mail->Send();
        $mail->ClearAllRecipients();
        $mail->ClearAttachments();

        if ($enviado) {
            unset($tipo_form);
            $return['success'] = true;
            $return['content'] = "$msg_sucesso_formulario";
        } else {
            $return['success'] = false;
            $return['content'] = "Oops! Ocorreu um erro.";
        }

        if (SMTP_DEBUG)
            echo "Informações do erro: " . $mail->ErrorInfo;
        else
            return $return;
    }
}