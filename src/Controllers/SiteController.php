<?php

namespace System\Controllers;

use System\Controllers\Controller;
use System\Controllers\MailController;

class SiteController extends Controller {

    public function index() {
        return view('index');
    }

    public function agendar() {

        $email_to = 'tests@erickfirmo.dev';

        $name = isset($_POST['name']) ? $_POST['name'] : null;
        $phone = isset($_POST['phone']) ? $_POST['phone'] : null;
        $email_reply = isset($_POST['email']) ? $_POST['email'] : null;
        $service = isset($_POST['service']) ? $_POST['service'] : null;
        $message = isset($_POST['message']) ? $_POST['message'] : null;

        //data
        return (new MailController())->send([
            'email_replay' => $email_reply,
            'email_to' => $email_to
        ]);
    }

}