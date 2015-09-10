<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
      $titulo = $_POST["titulo"];
      $precio =  $_POST["precio"];
      $archivo = $_FILES["imagen"]["tmp_name"]; 
      $tamanio = $_FILES["imagen"]["size"];
      $tipo    = $_FILES["imagen"]["type"];
      $nombre  = $_FILES["imagen"]["name"];
      $tela = $_POST["tela"];
      $tallaAmericana =  $_POST["tallaAmericana"];
      $tallaEuropea =  $_POST["tallaEuropea"];
      
      $conexion = mysql_connect('localhost', 'root','Xxxholic0') or die('No hay conexon a la base de datos');
      $db = mysql_select_db('sk8boy',$conexion)or die('no existe la base de datos');
      if($_FILES["imagen"]["type"]=="image/jpeg" || $_FILES["imagen"]["type"]=="image/pjpeg" || $_FILES["imagen"]["type"]=="image/gif" || $_FILES["imagen"]["type"]=="image/bmp" || $_FILES["imagen"]["type"]=="image/png")
      {
      if ( $archivo != "none" )
      
 {
    $contenido = addslashes(file_get_contents($archivo)); 
    
    $qry = "INSERT INTO CatalogoDeProducto  VALUES 
            ('','$titulo','$precio','$contenido','$tipo','$nombre','$tela',$tallaAmericana,$tallaEuropea)";

    $sql = mysql_query($qry);

    if( $sql )
       print "Se ha guardado el archivo en la base de datos.";
    else
       print "NO se ha podido guardar el registro en la base de datos.";
 }
 else
 {  
    print "No se ha podido subir el archivo al servidor <br>";
 
mysql_error();
 }
 
  }
  else
      print "Error: El formato de archivo tiene que ser JPG, GIF, BMP o PNG <br>";

      
        ?>
        
<form enctype="multipart/form-data" action="NuevoProducto.php?accion=registrar" method="post">
 
Descripción Del producto <input type="text" name="titulo" size="30"><br>
Precio <input  type="text" name="precio"><br>
Ubicación <input type="file" name="imagen"><br>
Tipo de Tela <input type="text" name="tela"><br>
Talla Americana <input type="" name="tallaAmericana"><br>
Talla Europea <input type="" name="tallaEuropea"><br>
<br>
<input type="submit" value="Enviar archivo">
</form>
        <!--enctype="multipart/form-data" encriptara la informacion que enviemos
        a travez de internet-->
    </body>
</html>
