<?php session_start();

$conexion = mysql_connect("localhost", "root", "Xxxholic0");
mysql_select_db("sk8boy", $conexion);
       
   $sql = "SELECT MAX(iduser) FROM Users";    
   $result = mysql_query( $sql );

 $row = mysql_fetch_array($result);



 
 
    
         
         $resultado = mysql_query("select idProducto, descripcionProducto, precio, tipo, nombre ,tela, tallaAmericana , tallaEuropea
from CatalogoDeProducto inner join TallasAmericanas on CatalogoDeProducto.id_tallasAmericanas = TallasAmericanas.idTallasAmericana
inner join telas on CatalogoDeProducto.tela_idtlas = telas.idtelas
inner join TallasEuropea on CatalogoDeProducto.id_tallasEuropeas = TallasEuropea.idTallasEuropea
order by idProducto",$conexion);
         
         while($catalogo = mysql_fetch_array($resultado)) {
            
             
             echo "<img src='imagen_mostrar.php?idProducto=".$catalogo["idProducto"]."'>"; 
             echo $catalogo["idProducto"]."<br>";
             echo $catalogo["descripcionProducto"]."<br>";
             echo $catalogo["precio"]."<br>";
             echo $catalogo["tela"]."<br>";
              echo $catalogo["tallaAmericana"]."<br>";
              echo $catalogo["tallaEuropea"]."<br>";
              echo "<br>";             
             
            
        }
         
 
 

?>

<html>
    <head>
        <title>title</title>
    </head>
    <body>

   <?php
   ?>
        
        
    </body>
</html>

