<?php
require_once "app/models/Pelicula.php";

class PeliculasController {

    public function index() {
        $busqueda = $_GET['buscar'] ?? null;
        $peliculas = Pelicula::listar($busqueda);
        require "app/views/peliculas/index.php";
    }

    public function crear() {
        if ($_POST) {
            Pelicula::crear([
                $_POST['titulo'],
                $_POST['director'],
                $_POST['anio'],
                $_POST['clasificacion']
            ]);
            header("Location: index.php");
        }
        require "app/views/peliculas/crear.php";
    }

    public function editar() {
        $pelicula = Pelicula::obtener($_GET['id']);

        if ($_POST) {
            Pelicula::actualizar([
                $_POST['titulo'],
                $_POST['director'],
                $_POST['anio'],
                $_POST['clasificacion'],
                $_GET['id']
            ]);
            header("Location: index.php");
        }
        require "app/views/peliculas/editar.php";
    }

    public function ver() {
        $pelicula = Pelicula::obtener($_GET['id']);
        require "app/views/peliculas/ver.php";
    }

    public function eliminar() {
        $pelicula = Pelicula::obtener($_GET['id']);

        if ($_POST) {
            Pelicula::eliminar($_GET['id']);
            header("Location: index.php");
        }
        require "app/views/peliculas/eliminar.php";
    }
}
