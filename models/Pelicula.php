<?php
require_once "../app/config/database.php";

class Pelicula {

    public static function listar($busqueda = null) {
        $db = Database::connect();

        if ($busqueda) {
            $stmt = $db->prepare("SELECT * FROM peliculas WHERE titulo LIKE ?");
            $stmt->execute(["%$busqueda%"]);
            return $stmt->fetchAll();
        }

        return $db->query("SELECT * FROM peliculas")->fetchAll();
    }

    public static function obtener($id) {
        $db = Database::connect();
        $stmt = $db->prepare("SELECT * FROM peliculas WHERE pelicula_id=?");
        $stmt->execute([$id]);
        return $stmt->fetch();
    }

    public static function crear($data) {
        $db = Database::connect();
        $stmt = $db->prepare(
            "INSERT INTO peliculas(titulo,director,anio,clasificacion) VALUES (?,?,?,?)"
        );
        return $stmt->execute($data);
    }

    public static function actualizar($data) {
        $db = Database::connect();
        $stmt = $db->prepare(
            "UPDATE peliculas SET titulo=?, director=?, anio=?, clasificacion=? WHERE pelicula_id=?"
        );
        return $stmt->execute($data);
    }

    public static function eliminar($id) {
        $db = Database::connect();
        $stmt = $db->prepare("DELETE FROM peliculas WHERE pelicula_id=?");
        return $stmt->execute([$id]);
    }
}
