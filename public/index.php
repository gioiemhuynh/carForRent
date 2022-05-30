<?php

session_start();

use Tlait\CarForRent\Application\Application;
use Tlait\CarForRent\Http\Request;

ini_set('display_errors', '1');
require __DIR__ . '/../vendor/autoload.php';

$application = new Application(new Request());
$application->start();
