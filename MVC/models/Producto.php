<?php
require_once __DIR__ . '/../config/database.php';

class Producto {

    public static function all() {
        $db = Database::connect();
        return $db->query("SELECT * FROM productos")->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function find($id) {
        $db = Database::connect();
        $stmt = $db->prepare("SELECT * FROM productos WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public static function create($data) {
        $db = Database::connect();
        $stmt = $db->prepare(
            "INSERT INTO productos (nombre, descripcion, precio, stock) VALUES (?,?,?,?)"
        );
        return $stmt->execute([
            $data['nombre'],
            $data['descripcion'],
            $data['precio'],
            $data['stock']
        ]);
    }

    public static function update($id, $data) {
        $db = Database::connect();
        $stmt = $db->prepare(
            "UPDATE productos SET nombre=?, descripcion=?, precio=?, stock=? WHERE id=?"
        );
        return $stmt->execute([
            $data['nombre'],
            $data['descripcion'],
            $data['precio'],
            $data['stock'],
            $id
        ]);
    }

    public static function delete($id) {
        $db = Database::connect();
        $stmt = $db->prepare("DELETE FROM productos WHERE id = ?");
        return $stmt->execute([$id]);
    }
}