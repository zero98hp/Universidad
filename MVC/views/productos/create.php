<h2>Crear producto</h2>

<?php foreach ($errores as $e): ?>
<p style="color:red"><?= $e ?></p>
<?php endforeach; ?>

<form method="POST" action="index.php?controller=producto&action=store">
Nombre: <input name="nombre"><br>
Descripción: <textarea name="descripcion"></textarea><br>
Precio: <input type="number" step="0.01" name="precio"><br>
Stock: <input type="number" name="stock"><br>
<button>Guardar</button>
</form>