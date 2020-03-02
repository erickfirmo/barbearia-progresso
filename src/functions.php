<?php

$app = include __DIR__.'/../config/app.php';

if (!function_exists('app'))
{
	function app($key)
	{
		if(isset($key))
			return array_key_exists($key, $app) ? $app[$key] : null;
	}
}

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
	function redirect($route)
	{
		header('Location: '.(isset($_SERVER['HTTPS']) ? 'https' : 'http').'://'.$_SERVER['HTTP_HOST'].$route);
	    exit;
	}
}

if (!function_exists('asset'))
{
    function asset($path) 
    {
        echo $app['base_url'].'assets/'.$path;
    }
}
