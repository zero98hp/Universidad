<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

$controller = $_GET['controller'] ?? 'producto';
$action = $_GET['action'] ?? 'index';

require_once __DIR__ . '/../controllers/ProductoController.php';

$controllerName = ucfirst($controller) . 'Controller';
$controllerObj = new $controllerName();
$controllerObj->$action();