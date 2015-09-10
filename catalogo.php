<?php session_start(); ?>

    <?php
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
?>
         <!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Playeras</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css"/>
      <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
      <link rel="stylesheet" href="scc/main.css" type="text/css"/>
      <link rel="stylesheet" href="scc/animate.css"/>

    </head>
    <body>
        
        <nav class="se-gris padding-largo text-center">
            <!--ul indica una lista en html i <li> se coloca el lemento de la lista-->
            <ul class="no-lista">
                <li class="col-md-3 inline-block lobster verde"><a href="index.php">   Sk8-Boy</a></li>
                <li class="col-md-3 inline-block lobster verde"><a href="catalogo.php">   Catalogo</a></li>
                <li class="col-md-3 inline-block lobster verde"><a href="contacto.php">Contacto</a> </li>
                <li class="col-md-3 inline-block lobster verde"><?php echo $_SESSION["nombre"]; ?></a> </li>
            </ul> 
        </nav>
            <section>
             <div class="text-center">
                <h1 class="lobster grande verde">Playeras</h1>
                <p> Todos nuestro diseños estan inspirados en la vida 2.0
                que pasa dia a día en nuestro entorno, 
                <br>
                van desde los memes
                hasta los personajes mas divertidos del internet.</p>
                
                
                <?php 
                $margen = 0;
                $vuelta1 =1;
                $vuelta2 =2;
                $vuelta3 =3;
                while($catalogo = mysql_fetch_array($resultado)) {
                    
                    if($catalogo["idProducto"] == $vuelta1){   
                      $margen = 3; 
                      $vuelta1+=3; 
                       }
                        
                    if($catalogo["idProducto"] == $vuelta2){
                        $margen = 6;
                     $vuelta2+=3;
                     }
                    if($catalogo["idProducto"] == $vuelta3){
                        $margen = 3;
                    $vuelta3 += 3;
                        
                    }
            echo "<div class='col-md-". $margen ." col-sm-4 inline-block'> Producto ".$catalogo["idProducto"]."";
            echo "<article class='animated fadeIn retraso2'>";
             echo "<h2 class='lobter azul'>".$catalogo["descripcionProducto"]."</h2>";
              echo "<img src='imagen_mostrar.php?idProducto=".$catalogo["idProducto"]."' class='col-sx-4'>";
                      echo  "<p>";
                      echo "<strong>Tipo de Tela :".$catalogo["tela"]." <br>";
                      echo "Talla Americana: ".$catalogo["tallaAmericana"]." <br>";
                      echo "Talla Europea: ".$catalogo["tallaEuropea"]." <br>";
                      echo  "Precio: $".$catalogo["precio"]."pesos-MxN</strong><br>";
                     echo "</p>";
                 echo   "</article>";
                 echo"</div>";
                 }
                ?>
                <!--col-md-3 es para responder para desktop::col-sm-4 para responder ante tabletas::col-sx-3 es para respoder
                ante celulares-->
                <div class="col-md-3 col-sm-4 inline-block">Producto 1
                    <article class="animated fadeIn retraso2">
                        <h2 class="lobter azul">Wolverine</h2>
                        <img   src="img/11120.png" class="col-sx-4">
                        <p>
                            <strong>Talla Americana: </strong><br>
                            <strong>Europea: </strong><br>
                        <strong>Precio: $150 pesos-MxN</strong><br>
                        </p>
                    </article> Modelo
                    <!--Otro articulo-->
                    <article class="animated fadeIn retraso2">
                        <h2 class="lobter azul">Boba Fett</h2>
                        <img  class="col-sx-4" src="img/10939.png">
                        <p>
                        <strong>Talla Americana: </strong><br>
                            <strong>Europea: </strong><br>
                        <strong>Precio: $150 pesos-MxN</strong><br>
                        </p>
                    </article> 
                    
                </div>
                <div class="col-md-6 col-sm-4 inline-block vete-arriba">Producto 2 
                <article class="animated fadeIn retraso2">
                        <h2 class="lobter azul">Goku</h2>
                        <img   src="img/10476.png" class="col-sx-4">
                        <p>
                        <strong>Talla Americana: </strong><br>
                            <strong>Europea: </strong><br>
                        <strong>Precio: $150 pesos-MxN</strong><br>
                        </p>
                    </article> 
                    <!--Otro articulo-->
                    <article class="animated fadeIn retraso2">
                        <h2 class="lobter azul">Instagram</h2>
                        <img  src="img/10154.png" class="col-sx-4">
                        <p>
                        <strong>Talla Americana: </strong><br>
                            <strong>Europea: </strong><br>
                        <strong>Precio: $150 pesos-MxN</strong><br>
                        </p>
                    </article> 
                    
                </div>        
                <div class="col-md-3 col-sm-4 inline-block vete-arriba">Producto 3 
                <article class="animated fadeIn retraso2">
                        <h2 class="lobter azul">Bat Man Zombie</h2>
                        <img   src="img/10961.png" class="col-sx-4" >
                        <p>
                        <strong>Talla Americana: </strong><br>
                            <strong>Europea: </strong><br>
                        <strong>Precio: $150 pesos-MxN</strong><br>
                        </p>
                    </article>
                    <!--Otro articulo-->
                    <article class="animated fadeIn retraso2">
                        <h2 class="lobter azul">Perico</h2>
                        <img  src="img/10871.png" class="col-sx-4">
                        <p>
                        <strong>Talla Americana: </strong><br>
                            <strong>Europea: </strong><br>
                        <strong>Precio: $150 pesos-MxN</strong><br>
                        </p>
                    </article> 
                    
                </div>
             </div>
            </section>
            
         <?php include ('includes/footer.php');?>
    </body>
    
</html>
