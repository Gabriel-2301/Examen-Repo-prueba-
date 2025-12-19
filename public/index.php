<?php
require_once "../app/controllers/PeliculasController.php";
$controller = new PeliculasController();

$action = $_GET['action'] ?? 'index';

if(method_exists($controller, $action)) {
    $controller->$action();   
} else {
    $controller->index();
}
