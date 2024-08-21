<?php

function connection(){
    $host = "localhost";
    $user = "root";
    $pass = "1234567890";

    $bd = "usuarios-taller-de-base-de-datos";

    $connect=mysqli_connect($host, $user, $pass);

    mysqli_select_db($connect, $bd);

    return $connect;

}


?>
