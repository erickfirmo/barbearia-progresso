<?php


if (!function_exists('app'))
{
	function app($key)
	{
		if(!isset($app))
			$app = include __DIR__.'/../config/app.php';

		if(isset($key))
			return array_key_exists($key, $app) ? $app[$key] : null;
	}
}

// functions

if (!function_exists('view'))
{
	function view($file)
	{
    	include __DIR__.'/../views/'.$file.'.php';
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
		header('Location: '.(isset($_SERVER['HTTPS']) ? 'https' : 'http').'://'.$_SERVER['HTTP_HOST'].app('base_url').($route == '/' ? '' : $route));
	    exit;
	}
}

if (!function_exists('asset'))
{
    function asset($path) 
    {
        echo app('base_url').app('assets_path').$path;
    }
}

if (!function_exists('url'))
{
    function url($url) 
    {
        echo app('base_url').($url == '/' ? '' : $url);
    }
}
