<?php
include("connection.php");
$con = connection();

$sql = "SELECT * FROM productos";
$query = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="CSS/style.css" rel="stylesheet">
    <title>CRUD productos</title>
</head>

<body>
    <div class="users-form">
        <h1>Crear producto</h1>
        <form action="insert_user.php" method="POST">
            <input type="text" name="id_producto" placeholder="id_producto">
            <input type="text" name="marca" placeholder="marca">
            <input type="text" name="password" placeholder="nombre">
            <input type="text" name="precio" placeholder="precio">

            <input type="submit" value="Registrar">
        </form>
    </div>

    <div class="users-table">
        <h2>Listado de productos</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre de producto</th>
                    <th>Marca</th>
                    <th>Precio</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_array($query)): ?>
                    <tr>
                        <th><?= $row['id_producto'] ?></th>
                        <th><?= $row['nombre'] ?></th>
                        <th><?= $row['marca'] ?></th>
                        <th><?= $row['precio'] ?></th>
                        <th><a href="update.php?id=<?= $row['id_usuario'] ?>" class="users-table--edit">Editar</a></th>
                        <th><a href="delete_user.php?id=<?= $row['id_usuario'] ?>" class="users-table--delete" >Eliminar</a></th>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>

</body>

</html>