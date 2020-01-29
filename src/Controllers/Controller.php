<?php

namespace System\Controllers;

class Controller {
    public function __construct() {
        include '../src/functions.php';

    }

    public function view($file) {
        include '../views/'.$file.'.php';
    }
}