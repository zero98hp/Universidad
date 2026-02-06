<h2>Editar producto</h2>

<?php foreach ($errores as $e): ?>
<p style="color:red"><?= $e ?></p>
<?php endforeach; ?>

<form method="POST" action="index.php?controller=producto&action=update&id=<?= $producto['id'] ?>">
Nombre: <input name="nombre" value="<?= $producto['nombre'] ?>"><br>
Descripción: <textarea name="descripcion"><?= $producto['descripcion'] ?></textarea><br>
Precio: <input type="number" step="0.01" name="precio" value="<?= $producto['precio'] ?>"><br>
Stock: <input type="number" name="stock" value="<?= $producto['stock'] ?>"><br>
<button>Actualizar</button>
</form>