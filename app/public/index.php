<?php
require_once "../app/controllers/PeliculasController.php";

$controller = new PeliculasController();

$action = $_GET['action'] ?? 'index';
$controller->$action();
