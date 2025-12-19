<?php
require_once "../app/controllers/PeliculasController.php";

$controller = new PeliculasController();
$controller->mostrarPeliculas();

$action = $_GET['action'] ?? 'index';
$controller->$action();
