<?php session_start(); ?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Bienvenidos a Sk8-Boy</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <link rel="stylesheet" href="scc/main.css"/>
       <link rel="stylesheet" href="scc/animate.css"/>
      <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css"/>
      <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
    </head >
    <body background="img/fondo.jpg">
       
        
        
       
        <nav class="se-gris padding-largo text-center">
            <!--ul indica una lista en html i <li> se coloca el lemento de la lista-->
            <form action="login.php" method="post">
            Usuario: <input class="espacio-derecha "   type="text" name="user_name" vale="">
            Contraseña: <input class="espacio-derecha "  type="password" name="password" value="">
            <input  type="submit" value="Iniciar sesión">
            Logeado como :
            <?php
            echo $_SESSION["nombre"];
            ?>
            </form>
            ¿No estás registrado? <a href="registro.php">Regístrate</a>.
        </nav>
        
        <div class="col-md-12 center-block quitar-float text-center espacio-arriba">
        <img src="img/logo.png" class="animated fadeInLeftBig retraso2">
        <h1 class="lobster grande verde animated bounceInDown retraso1">Sk8-Boy</h1>
        <h2 class="animated bounceInDown retraso2">La moda, a lo que te acomoda </h2>
        <h4 class="animated bounceInDown retraso2">Fashion in your Web</h3>
  
        
        <nav>
            <a href="menu.php" class="espacio-derecha animated bounceInDown retraso1">Menú</a>
            <a href="contacto.php" class="espacio-derecha animated bounceInDown retraso1">Contacto</a>
            <a href="catalogo.php" class="animated bounceInDown retraso1">Catalogo</a>
            
        </nav>
         <p class=" col-md-12  pequeño animated fadeIn retraso2">
       Esta no solo sera una paguina donde compraras y venderas ropa si no a su vez
            obtendras una experiencia unica donde comprar tus playeras a la ultima moda 2.0
            seras la envidia de todos tus amigos, donde la moda en la redes sociales las llevaras
            puestas contigo todos los dias.
            </p>
        </div>
        <?php
            include ('includes/footer.php');
        ?>
        
    
        
    </body>
</html>