<?php
include("connection.php");
$con = connection();

$id_producto = $_POST['id_producto'];
$marca = $_POST['marca'];
$nombre = $_POST['nombre'];
$precio = $_POST['precio'];


$sql="UPDATE productos SET id_producto='$id', marca='$marca', nombre='$nombre', precio='$precio' WHERE id_producto=$id";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index.php");
}else{

}

?>

