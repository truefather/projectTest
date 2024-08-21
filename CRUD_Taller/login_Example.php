<?php
// Iniciar la sesión
session_start();

// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "usuarios_CRUD";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error en la conexión: " . $conn->connect_error);
}

// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Consulta SQL para verificar las credenciales
    $sql = "SELECT * FROM usuarios_CRUD WHERE usuario='$username' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Inicio de sesión exitoso
        $_SESSION["loggedin"] = true;
        $_SESSION["username"] = $username;
        header("Location: index.php"); // Redirigir a la página principal
    } else {
        // Credenciales incorrectas
        $error = "Usuario o contraseña incorrectos";
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h2>Iniciar sesión</h2>
    <?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Usuario: <input type="text" name="username" required><br>
        Contraseña: <input type="text" name="password" required><br>
        <input type="submit" value="Iniciar sesión">
    </form>
</body>
</html>