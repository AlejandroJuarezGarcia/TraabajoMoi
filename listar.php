<?php include("conexion.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <title>CRUD Inventario</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="prueba.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" style="padding: 0;">
  <div class="container-fluid bg-danger">
    <a class="navbar-brand" href="panel.php">
    <img src="Poké_Ball_icon.svg" alt="Logo" class="Bootstrap" width="" height="24">
    </a>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link jersey-10-regular" href="agregar.php">Agregar</a>
        <a class="nav-link jersey-10-regular" href="eliminar.php">Eliminar</a>
        <a class="nav-link jersey-10-regular" href="editar.php">Editar</a>
        <a class="nav-link final jersey-10-regular" href="logout.php">Cerrar sesion</a>
      </div>
    </div>
  </div>
</nav>

<h2>Lista de Productos</h2>

<div id="centrar" style="display: flex; justify-content:center;">
<table>
<tr class="jersey-10-regular" style="border: 1px solid black;">
<th class="jersey-10-regular" style="border: 1px solid black; padding: 1rem;">ID</th>
<th class="jersey-10-regular" style="border: 1px solid black; padding: 1rem;">Nombre</th>
<th class="jersey-10-regular" style="border: 1px solid black; padding: 1rem;">Precio</th>
<th class="jersey-10-regular" style="border: 1px solid black; padding: 1rem;">Stock</th>
</tr>


<?php
$resultado=$conexion->query("SELECT * FROM productos");

while($row=$resultado->fetch_assoc()){
    echo "<tr>
    <td>".$row['id_producto']."</td>
    <td>".$row['nombre_producto']."</td>
    <td>".$row['precio']."</td>
    <td>".$row['cantidad_stock']."</td>
    </tr>";
}
?>
</table>
</div>