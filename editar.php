<?php include("conexion.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <title>CRUD Inventario</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="prueba.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bagel+Fat+One&family=Chewy&family=DynaPuff:wght@400..700&family=Jersey+10&display=swap" rel="stylesheet">
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
        <a class="nav-link jersey-10-regular" href="listar.php">Ver lista</a>
        <a class="nav-link final jersey-10-regular" href="logout.php">Cerrar sesion</a>
      </div>
    </div>
  </div>
</nav>

<h2>Editar Producto</h2>

<form method="POST">
ID del producto: <input type="number" name="id" required><br><br>
Nuevo nombre: <input type="text" name="nombre"><br><br>
Nuevo precio: <input type="number" step="0.01" name="precio"><br><br>
Nuevo stock: <input type="number" name="stock"><br><br>

<input type="submit" name="actualizar" value="Actualizar" class="button">
</form>

<?php
if(isset($_POST['actualizar'])){
    $id=$_POST['id'];
    $nombre=$_POST['nombre'];
    $precio=$_POST['precio'];
    $stock=$_POST['stock'];

    $conexion->query("UPDATE productos 
                      SET nombre_producto='$nombre',
                          precio='$precio',
                          cantidad_stock='$stock'
                      WHERE id_producto=$id");
    echo "Producto actualizado";
}
?>