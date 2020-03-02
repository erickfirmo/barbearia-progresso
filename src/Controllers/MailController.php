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
        $return = [];
        $message = "";
        $tipo_form = $data['tipo_form'];

        $configs = include __DIR__.'/../../config/mail.php';

        $fromName = !empty($data['name']) ? $data['name'] : 'Usuário';
        $phone = !empty($data['phone']) ? $data['phone'] : null;
        $fromEmail = !empty($data['email']) ? $data['email'] : null;
        $service = !empty($data['service']) ? $data['service'] : null;
        $message = !empty($data['message']) ? $data['message'] : null;

        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->SMTPDebug = $configs['SMTP_DEBUG'];
        $mail->Host = $configs['SMTP_HOST'];
        $mail->Port = $configs['SMTP_PORT'];
        $mail->SMTPSecure = $configs['SMTP_SECURE'];
        $mail->SMTPAuth = $configs['SMTP_AUTH'];
        $mail->Username = $configs['SMTP_USER'];
        $mail->Password = $configs['SMTP_PASS'];
        $mail->SetFrom($fromEmail, $fromName);

        $email_to = $configs['SMTP_USER'];
        $email_reply = $configs['SMTP_USER'];

        if (isset($email_to))
            $mail->AddAddress("$email_to");

        $mail->addReplyTo("$email_reply", "Barbearia Progresso");
        $mail->IsHTML(true);
        $mail->CharSet = 'utf-8';
        $mail->Subject  = "[".$tipo_form."] - Agendado por. ".$fromName." ";
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
            $return['content'] = $data['status_success'];
        } else {
            $return['success'] = false;
            $return['content'] = $data['status_error'];
        }

        if (SMTP_DEBUG)
            echo "Informações do erro: " . $mail->ErrorInfo;
        else
            return $return;
    }
}