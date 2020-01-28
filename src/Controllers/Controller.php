<?php

namespace System\Controllers;

class Controller {
    public function __construct() {

    }

    public function view($file) {
        include '../views/'.$file.'.php';
    }
}