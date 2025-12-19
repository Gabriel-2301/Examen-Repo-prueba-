<h2>Actualizar Película</h2>

<form method="post" action="index.php?action=editar&id=<?= $pelicula['pelicula_id'] ?>">
    <input name="titulo" value="<?= htmlspecialchars($pelicula['titulo']) ?>" placeholder="Título" required><br>
    <input name="director" value="<?= htmlspecialchars($pelicula['director']) ?>" placeholder="Director" required><br>
    <input type="number" name="anio" value="<?= $pelicula['anio'] ?>" placeholder="Año" required><br>
    <input name="clasificacion" value="<?= htmlspecialchars($pelicula['clasificacion']) ?>" placeholder="Clasificación" required><br>
    <button type="submit">Actualizar</button>
</form>
