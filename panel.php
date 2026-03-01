<?php
session_start();

if(!isset($_SESSION['usuario'])){
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bagel+Fat+One&family=Chewy&family=DynaPuff:wght@400..700&family=Jersey+10&display=swap" rel="stylesheet">
</head>

<body>

<h1 style="text-align:center;font-size:4vw;" class="jersey-10-regular">
Bienvenido <?php echo $_SESSION['usuario']; ?>
</h1>

<div id="centrar">
<div class="grid" id="menu">

<a href="agregar.php">
<div class="div1 celda">
<img src="producto.png">
<h2 class="jersey-10-regular">Añadir producto</h2>
</div>
</a>

<a href="listar.php">
<div class="div2 celda">
<img src="visiones.png">
<h2 class="jersey-10-regular">Ver inventario</h2>
</div>
</a>

<a href="editar.php">
<div class="div3 celda">
<img src="lapiz.png">
<h2 class="jersey-10-regular">Editar inventario</h2>
</div>
</a>

<a href="eliminar.php">
<div class="div4 celda">
<img src="eliminar.png">
<h2 class="jersey-10-regular">Eliminar</h2>
</div>
</a>

<a href="logout.php">
<div class="div5 celda">
<img src="cerrar-sesion.png" alt="">
<h2 class="jersey-10-regular">Cerrar Sesion</h2>
</div>
</a>

</div>
</div>

</body>
</html>