<?php
require_once __DIR__ . '/../models/Producto.php';

class ProductoController {

    public function index() {
        $productos = Producto::all();
        require __DIR__ . '/../views/productos/index.php';
    }

    public function create() {
        $errores = [];
        require __DIR__ . '/../views/productos/create.php';
    }

    public function store() {
        $errores = $this->validar($_POST);

        if (!empty($errores)) {
            require __DIR__ . '/../views/productos/create.php';
            return;
        }

        Producto::create($_POST);
        header("Location: index.php?controller=producto&action=index");
    }

    public function edit() {
        $producto = Producto::find($_GET['id']);
        $errores = [];
        require __DIR__ . '/../views/productos/edit.php';
    }

    public function update() {
        $errores = $this->validar($_POST);

        if (!empty($errores)) {
            $producto = $_POST;
            require __DIR__ . '/../views/productos/edit.php';
            return;
        }

        Producto::update($_GET['id'], $_POST);
        header("Location: index.php?controller=producto&action=index");
    }

    public function delete() {
        $producto = Producto::find($_GET['id']);
        require __DIR__ . '/../views/productos/delete.php';
    }

    public function destroy() {
        Producto::delete($_GET['id']);
        header("Location: index.php?controller=producto&action=index");
    }

    private function validar($data) {
        $errores = [];

        if (strlen($data['nombre']) < 3)
            $errores[] = "El nombre debe tener al menos 3 caracteres";

        if ($data['precio'] <= 0)
            $errores[] = "El precio debe ser mayor que 0";

        if (!is_numeric($data['stock']) || $data['stock'] < 0)
            $errores[] = "El stock debe ser un número no negativo";

        return $errores;
    }
}