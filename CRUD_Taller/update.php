<?php 
    include("connection.php");
    $con=connection();

    $id=$_GET['id'];

    $sql="SELECT * FROM productos WHERE id_producto='$id'";
    $query=mysqli_query($con, $sql);

    $row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Editar productos</title>
        
    </head>
    <body>
        <div class="users-form">
            <form action="edit_user.php" method="POST">
                <input type="hidden" name="id del producto" value="<?= $row['id_producto']?>">
                <input type="text" name="marca" placeholder="marca" value="<?= $row['marca']?>">
                <input type="text" name="nombre" placeholder="nombre" value="<?= $row['nombre']?>">
                <input type="text" name="precio" placeholder="precio" value="<?= $row['precio']?>">
                <input type="submit" value="Actualizar">
            </form>
        </div>
    </body>
</html>