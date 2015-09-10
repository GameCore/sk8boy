<?php session_start(); 
session_cache_limiter('private');
$cache_limiter = session_cache_limiter();

echo "The cache limiter is now set to $cache_limiter<br />";?>

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
                <li class="col-md-3 inline-block lobster verde"><a href="index.php">  Sk8-Boy</li></a> 
                <li class="col-md-3 inline-block lobster verde"><a href="catalogo.php">  Catalogo</li></a> 
                <li class="col-md-3 inline-block lobster verde"><a href="contacto.php">Contacto</li></a> 
                <li class="col-md-3 inline-block lobster verde"><?php echo $_SESSION["nombre"]; ?></a> </li>
            </ul> 
        </nav>
        <section>
            <div class="mediano text-center ">
                <h1 class="lobster grande verde animated lightSpeedIn">Contacto</h1>
                <p class="animated lightSpeedIn retraso2">
                    Universidad Politécnica del Valle de México
                    Av. Mexiquense s/n, esquina Av. Universidad Politécnica
                    Villa Esmeralda
                    54910 Tultitlán de Mariano Escobedo, MEX, Mexico
                </p>
                <p>
                    
                    Escribenos a <a class="animated lightSpeedIn retraso1"href="mailto:siempretengolarazon@outlook.com"> siempretengolarazon@outlook.com</a>
                </p>
                <iframe class="animated retraso2" src="https://www.google.com/maps/embed?pb=!1m20!1m8!1m3!1d3757.657173809356!2d-99.12588927116396!3d19.641949104542576!3m2!1i1024!2i768!4f13.1!4m9!1i0!3e6!4m0!4m5!1s0x85d1f43e59c00a9f%3A0xe3c992b6aa422e2c!2sUniversidad+Polit%C3%A9cnica+del+Valle+de+M%C3%A9xico%2C+Av.+Mexiquense+s%2Fn%2C+esquina+Av.+Universidad+Polit%C3%A9cnica%2C+Villa+Esmeralda%2C+54910+Tultitl%C3%A1n+de+Mariano+Escobedo%2C+MEX!3m2!1d19.641939!2d-99.1259!5e0!3m2!1sen!2smx!4v1422952624638" width="600" height="450" frameborder="0" style="border:0"></iframe> 

            </div>
        </section>
            
         <?php include ('includes/footer.php');?>
    </body>
    
</html>
