<?php include("conexion.php"); ?>

<!DOCTYPE html>
<html>
<head>
        <link rel="stylesheet" href="prueba.css">
            <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bagel+Fat+One&family=Chewy&family=DynaPuff:wght@400..700&family=Jersey+10&display=swap" rel="stylesheet">
    <title>CRUD Inventario</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">

</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" style="padding: 0;">
  <div class="container-fluid bg-danger">
    <a class="navbar-brand" href="panel.php">
    <img src="Poké_Ball_icon.svg" alt="Logo" class="Bootstrap" width="" height="24">
    </a>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link jersey-10-regular" href="editar.php" style=".jersey-10-regular {font-family: "Jersey 10" , sans-serif;  font-weight: 400;  font-style: normal;}">Editar</a>
        <a class="nav-link jersey-10-regular" href="eliminar.php" style=".jersey-10-regular {font-family: "Jersey 10" , sans-serif;  font-weight: 400;  font-style: normal;}">Eliminar</a>
        <a class="nav-link jersey-10-regular" href="listar.php" style=".jersey-10-regular {font-family: "Jersey 10" , sans-serif;  font-weight: 400;  font-style: normal;}">Ver lista</a>
        <a class="nav-link final jersey-10-regular" href="logout.php" style=".jersey-10-regular {font-family: "Jersey 10" , sans-serif;  font-weight: 400;  font-style: normal;}">Cerrar sesion</a>
      </div>
    </div>
  </div>
</nav>

<h1 class="jersey-10-regular">Agregar Datos</h1>

<hr>
<h2>Agregar Categoria</h2>

<form method="POST">
Nombre Categoria:
<input type="text" name="nombre_categoria" required>
<input type="submit" name="guardar_categoria" value="Guardar Categoria" class="button">
</form>

<?php
if(isset($_POST['guardar_categoria'])){
    $nombre_categoria=$_POST['nombre_categoria'];
    $conexion->query("INSERT INTO Categoria(nombre_categoria)
                      VALUES('$nombre_categoria')");
    echo "Categoria agregada<br>";
}
?>

<hr>
<h2>Agregar Proveedor</h2>

<form method="POST">
Nombre Proveedor:
<input type="text" name="nombre_proveedor" required><br><br>
Telefono:
<input type="text" name="telefono"><br><br>

<input type="submit" name="guardar_proveedor" value="Guardar Proveedor" class="button">
</form>

<?php
if(isset($_POST['guardar_proveedor'])){
    $nombre=$_POST['nombre_proveedor'];
    $telefono=$_POST['telefono'];

    $conexion->query("INSERT INTO Proveedores(nombre_proveedor,telefono)
                      VALUES('$nombre','$telefono')");
    echo "Proveedor agregado<br>";
}
?>

<hr>
<h2>Agregar Producto</h2>

<form method="POST">
Nombre:
<input type="text" name="nombre" required><br><br>

Precio:
<input type="number" step="0.01" name="precio" required><br><br>

Stock:
<input type="number" name="stock" required><br><br>

Categoria:
<select name="categoria" required>
<?php
$categorias=$conexion->query("SELECT * FROM Categoria");
while($cat=$categorias->fetch_assoc()){
    echo "<option value='".$cat['id_categoria']."'>".$cat['nombre_categoria']."</option>";
}
?>
</select><br><br>

Proveedor:
<select name="proveedor" required>
<?php
$proveedores=$conexion->query("SELECT * FROM Proveedores");
while($prov=$proveedores->fetch_assoc()){
    echo "<option value='".$prov['id_proveedor']."'>".$prov['nombre_proveedor']."</option>";
}
?>
</select><br><br>

<input type="submit" name="guardar_producto" value="Guardar Producto" class="button">
</form>

<?php
if(isset($_POST['guardar_producto'])){
    $nombre=$_POST['nombre'];
    $precio=$_POST['precio'];
    $stock=$_POST['stock'];
    $categoria=$_POST['categoria'];
    $proveedor=$_POST['proveedor'];

    $conexion->query("INSERT INTO productos(nombre_producto,precio,cantidad_stock,id_categoria,id_proveedor)
                      VALUES('$nombre','$precio','$stock','$categoria','$proveedor')");
    echo "Producto agregado<br>";
}
?>