<?php

use PHP94\Router;
use PHP94\Session;

require __DIR__ . '/../vendor/autoload.php';

if (version_compare(PHP_VERSION, '8.0.0', '<')) {
    header("Content-type: text/html; charset=utf-8");
    die('PHP >= 8.0');
}

error_reporting(E_ALL);

Session::set('admin_auth', 1);

$url = str_replace(pathinfo(__FILE__, PATHINFO_BASENAME), 'index.php', Router::build('/php94/admin/index'));
header('Location: ' . $url);
