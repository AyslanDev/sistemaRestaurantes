<?php

require '../vendor/autoload.php';
use \app\core\Router;
use app\support\RequestType;

session_start();

Router::run();