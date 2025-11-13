<?php
$controller = $_GET['controller'] ?? 'produto'; 
$action = $_GET['action'] ?? 'listar';

$controllerFile = "app/controllers/" . ucfirst($controller) . "Controller.php";

if (!file_exists($controllerFile)) {
    die("Controller não encontrado: " . $controllerFile);
}

require $controllerFile;

$controllerClass = ucfirst($controller) . "Controller";
$obj = new $controllerClass();

if (!method_exists($obj, $action)) {
    die("Ação não encontrada: " . $action);
}

$obj->$action();