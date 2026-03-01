<?php
session_start();
include("conexion.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bagel+Fat+One&family=Chewy&family=DynaPuff:wght@400..700&family=Jersey+10&display=swap" rel="stylesheet">
</head>

<body>
<div id="centrar">
    <img src="Poké_Ball_icon.svg" class="imagen">
</div>

<form method="POST">

<div class="contenedor">
    
    <label class="jersey-10-regular" style="font-size: 2vw;">Nombre de usuario</label>
    <input type="text" placeholder="Ingresa tu usuario" name="username" required class="jersey-10-regular" style="font-size: 2vw;">

    <label class="jersey-10-regular" style="font-size: 2vw;">Contraseña</label>
    <input type="password" placeholder="Ingresa tu contraseña" name="password" required class="jersey-10-regular" style="font-size: 2vw;">

    <button type="submit" name="login" class="jersey-10-regular" style="font-size: 2vw;">Iniciar sesion</button>

</div>

</form>

<?php
if(isset($_POST['login'])){
    $usuario=$_POST['username'];
    $password=$_POST['password'];

    $resultado=$conexion->query("SELECT * FROM Usuarios WHERE usuario='$usuario'");

    if($resultado->num_rows>0){
        $fila=$resultado->fetch_assoc();

        if($password == $fila['password']){
            $_SESSION['usuario']=$fila['usuario'];
            header("Location: panel.php");
            exit();
        }else{
            echo "<p>Password incorrecto</p>";
        }
    }else{
        echo "<p>Usuario no existe</p>";
    }
}
?>
</body>
</html>