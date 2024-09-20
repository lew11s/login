<?php  
session_start();
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];

    
    $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND contraseña = '$contraseña'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        
        $_SESSION['usuario'] = $usuario;
        echo "inicio exitoso. ¡Bienvenido $usuario!";
        echo "<br><img src='bienvenido.jpg' alt='Bienvenido' style='width:200px;height:auto;'>";
    } else {
        echo "Usuario o contraseña incorrectos.";
    }
}
?>
