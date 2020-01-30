<?php

// functions
function view($file) {
    include '../views/'.$file.'.php';
}

function jsonResponse($arr) {
    echo json_encode($arr);
}

function redirect($route)
{
    header('Location: '.(isset($_SERVER['HTTPS']) ? 'https' : 'http').'://'.$_SERVER['HTTP_HOST'].$route);
    exit();
}
