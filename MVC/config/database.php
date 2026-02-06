<?php

class Database {
    public static function connect() {
        return new PDO(
            "mysql:host=localhost;port=3307;dbname=tienda;charset=utf8",
            "tienda",
            "Supv0408comp",
            [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ]
        );
    }
}