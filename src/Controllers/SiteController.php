<?php

namespace System\Controllers;

use System\Controllers\Controller;
use System\Controllers\MailController;

class SiteController extends Controller {

    public function index() {
        return view('index');
    }

    public function agendar() {

        $name = isset($_POST['name']) ? $_POST['name'] : null;
        $phone = isset($_POST['phone']) ? $_POST['phone'] : null;
        $email = isset($_POST['email']) ? $_POST['email'] : null;
        $service = isset($_POST['service']) ? $_POST['service'] : null;
        $message = isset($_POST['message']) ? $_POST['message'] : null;

        $recaptcha_response = $_POST['g-recaptcha-response'];
        $recaptcha_secret_key = '<secret_key>';

        //if(isset($recaptcha_response) && !empty($recaptcha_response)){
            //$answer = json_decode(file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret_key.'&response='.$recaptcha_response));
            //if($answer->success) {

                $_SESSION['mail_response'] = MailController::send([
                    'name' => $name,
                    'email' => $email,
                    'phone' => $phone,
                    'service' => $service,
                    'message' => $message,
                    'tipo_form' => 'Agendamento',
                    'status_success' => '200',
                    'status_error' => '500',
                ]);

                //return json
                return redirect('/');
            //}
        //}

    }

}