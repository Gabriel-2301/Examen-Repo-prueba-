<?php
class Database {
    public static function connect() {
        return new PDO(
            "mysql:host=localhost;dbname=examen_peliculas",
            "root",
            ""
        );
    }
}
