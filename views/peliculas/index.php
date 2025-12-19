<h2>Listado de Películas</h2>

<form method="get" action="index.php">
    <input type="text" name="buscar" placeholder="Buscar por título" value="<?= $_GET['buscar'] ?? '' ?>">
    <button type="submit">Buscar</button>
</form>

<p><a href="index.php?action=crear">Nueva Película</a></p>


<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Título</th>
            <th>Director</th>
            <th>Año</th>
            <th>Clasificación</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php if (!empty($peliculas)): ?>
            <?php foreach ($peliculas as $p): ?>
                <tr>
                    <td><?= $p['pelicula_id'] ?></td>
                    <td><?= $p['titulo'] ?></td>
                    <td><?= $p['director'] ?></td>
                    <td><?= $p['anio'] ?></td>
                    <td><?= $p['clasificacion'] ?></td>
                    <td>
                        <a href="index.php?action=ver&id=<?= $p['pelicula_id'] ?>">Ver</a> |
                        <a href="index.php?action=editar&id=<?= $p['pelicula_id'] ?>">Editar</a> |
                        <a href="index.php?action=eliminar&id=<?= $p['pelicula_id'] ?>">Eliminar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="6">No hay películas registradas.</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>

