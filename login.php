<?php
session_start();
$conexion = mysql_connect("localhost", "root", "Xxxholic0");

mysql_select_db("sk8boy", $conexion);
 

//Obtengo la IP Local del servidor
echo $IP = $_SERVER['SERVER_ADDR'];
$Var11 = "<META HTTP-EQUIV=REFRESH CONTENT=5;URL=http://$IP/Sk8Boy/index.php>";
echo ($Var11);
?>


<html>
    <head>
        <title>Login</title>
        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php
        echo $Var11;
        ?>
        
       <link rel="stylesheet" href="scc/main.css"/>
       <link rel="stylesheet" href="scc/animate.css"/>
      <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css"/>
      <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
    </head>
    <body>
        
        
        
         <nav class="se-gris padding-largo text-center">
            <!--ul indica una lista en html i <li> se coloca el lemento de la lista-->
            
            ¿No estás registrado? <a href="registro.php">Regístrate</a>.
        </nav>
        
        <div class="  lobster mediano nimated bounceInDown retraso1 col-md-12 center-block text-center">
<?php


if($_POST['user_name'] && $_POST['password']) {

     $sql="SELECT * FROM Users WHERE userName='".$_POST['user_name']."' AND password='".$_POST['password']."'";

     $resultado=mysql_query($sql, $conexion) or die ("Error");

     $numRegistros=mysql_num_rows($resultado);

     if($numRegistros==0) {
         echo '<img class="img-rounded vete-arriba img-tamaño" src="img/404_10.jpg"><br>'; 
?>
        <a class="lobster mediano error" href=index.php> Error, no existen registros que coincidan con tu usuario o password <br> Intentalo de nuevo</a>
<?php
    

     } else {
         //$usuarioSesion = ;
         $nombreUsuario = (String)$_POST['user_name'];
         
        echo 'Bienvenido : ' . $_SESSION["nombre"] =  $nombreUsuario;
        echo " <br> <br>Login exitoso <br>";
        echo '<img  src="img/verified6.png ">';

     }
} else {
echo'<div class="  lobster  error mediano nimated bounceInDown retraso1 col-md-12 center-block text-center">';
   echo "Introduce user y password para loguearte <br>";
   echo '<img class="img-rounded vete-arriba img-tamaño" src="img/404_10.jpg"><br>';
   echo'</div>'; 
}

?>
 </div>
         <?php
            include ('includes/footer.php');
        ?>
    </body>
</html>

