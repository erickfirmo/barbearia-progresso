<?php

namespace System\Controllers;

use System\Controllers\Controller;
use System\Controllers\MailController;

class SiteController extends Controller {

    public function index() {
        return view('index');
    }

    public function agendar() {


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

        //data
        return (new MailController())->send([
            'nome' => $nome,
            'email' => $email_reply,
        ]);
    }

}