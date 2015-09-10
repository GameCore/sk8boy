<?php
########## imagen_mostrar.php ##########
# debe recibir el id de la imagen a mostrar
# http://www.lawebdelprogramador.com

# Conectamos con MySQL
$mysqli=new mysqli("localhost","root","Xxxholic0","sk8boy");
if (mysqli_connect_errno()) {
    die("Error al conectar: ".mysqli_connect_error());
}

# Buscamos la imagen a mostrar
$result=$mysqli->query("SELECT * FROM CatalogoDeProducto WHERE idProducto=".$_GET["idProducto"]);
$row=$result->fetch_array(MYSQLI_ASSOC);

# Mostramos la imagen
header("Content-type:".$row["tipo"]);
echo $row["imagen"];
?>
