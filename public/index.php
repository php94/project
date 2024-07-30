<?php

use PHP94\Facade\Framework;

require __DIR__ . '/../vendor/autoload.php';

if (version_compare(PHP_VERSION, '8.0.0', '<')) {
    header("Content-type: text/html; charset=utf-8");
    die('PHP >= 8.0');
}

Framework::run();
