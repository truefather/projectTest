<?php
include("connection.php");
$con = connection();

$id_producto = $_POST['id_producto'];
$nombre = $_POST['nombre'];
$marca = $_POST['marca'];
$precio = $_POST['precio'];


$sql = "INSERT INTO productos VALUES('$id_producto','$nombre','$marca','$precio')";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index.php");
}else{

}

?>