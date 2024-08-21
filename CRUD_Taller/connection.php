<?php

function connection(){
    $host = "localhost";
    $user = "root";
    $pass = "none";

    $bd = "usuarios-taller-de-base-de-datos";

    $connect=mysqli_connect($host, $user, $pass);

    mysqli_select_db($connect, $bd);

    return $connect;

}


?>
