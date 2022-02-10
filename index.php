<?php


$url = strtolower(strip_tags($_SERVER['REQUEST_URI']));

if($url == '' || $url == '/')
{
    header('Location: view/index.php');
}else
{
    header('Location: /view/notfound.php');
}