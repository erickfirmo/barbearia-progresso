<?php

namespace System\Controllers;

use System\Controllers\Controller;

class SiteController extends Controller {
    public function index() {
        return view('index');
    }
}