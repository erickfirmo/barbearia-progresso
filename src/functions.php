<?php

// functions
function view($file) {
    include '../views/'.$file.'.php';
}

function jsonResponse($arr) {
    echo json_encode($arr);
}
