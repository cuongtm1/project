<?php 
session_start();
require_once './commons/utils.php';
require_once './commons/helpers.php';
require_once 'vendor/autoload.php';
$url = isset($_GET['url']) ? $_GET['url'] : '/';
require_once './bootstrap.php';
use Routes\CustomRoute;
CustomRoute::init($url);
 ?>