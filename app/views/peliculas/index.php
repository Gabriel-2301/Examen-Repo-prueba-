<h2>Listado de Películas</h2>

<form method="get">
    <input type="text" name="buscar" placeholder="Buscar por título">
    <button>Buscar</button>
</form>

<a href="index.php?action=crear">Nueva Película</a>

<table border="1">
<tr>
    <th>ID</th>
    <th>Título</th>
    <th>Director</th>
    <th>Año</th>
    <th>Clasificación</th>
    <th>Acciones</th>
</tr>

<?php foreach ($peliculas as $p) { ?>
<tr>
    <td><?= $p['pelicula_id'] ?></td>
    <td><?= $p['titulo'] ?></td>
    <td><?= $p['director'] ?></td>
    <td><?= $p['anio'] ?></td>
    <td><?= $p['clasificacion'] ?></td>
    <td>
        <a href="index.php?action=ver&id=<?= $p['pelicula_id'] ?>">Ver</a>
        <a href="index.php?action=editar&id=<?= $p['pelicula_id'] ?>">Editar</a>
        <a href="index.php?action=eliminar&id=<?= $p['pelicula_id'] ?>">Eliminar</a>
    </td>
</tr>
<?php } ?>
</table>
