<h2>Eliminar Película</h2>

<p>¿Está seguro de eliminar la película:</p>
<p><strong><?= htmlspecialchars($pelicula['titulo']) ?></strong>?</p>

<form method="post" action="index.php?action=eliminar&id=<?= $pelicula['pelicula_id'] ?>">
    <button type="submit">Confirmar Eliminación</button>
</form>

<a href="index.php">Cancelar</a>
