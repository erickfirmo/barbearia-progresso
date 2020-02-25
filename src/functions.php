<?php

// functions

if (!function_exists('view'))
{
	function view($file)
	{
    	include '../views/'.$file.'.php';
	}
}

if (!function_exists('jsonResponse'))
{
	function jsonResponse($arr)
	{
    	echo json_encode($arr);
	}
}

if (!function_exists('redirect'))
{
	function redirect($file)
	{
    	header('Location: '.(isset($_SERVER['HTTPS']) ? 'https' : 'http').'://'.$_SERVER['HTTP_HOST'].$route);
	    exit();
	}
}

if (!function_exists('asset'))
{
    function asset($path, $root = '/projetos/barbearia-progresso/public/') 
    {
        echo $root.'assets/'.$path;
    }
}
