<html>
    <head>
        <title>Registro</title>
        <meta charset="utf-8">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <link rel="stylesheet" href="scc/main.css"/>
       <link rel="stylesheet" href="scc/animate.css"/>
      <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css"/>
      <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
      
      
    </head>

<?php
if($_GET['accion']=="registrar") {

   /*Esto quiere decir que se está enviando el formulario y hay que registrar */

   $user=$_POST['user'];
   $pass1=$_POST['pass1'];
   $pass2=$_POST['pass2'];
   


   if($pass1==$pass2 && $user!= null ) {
       /*Si las passwords coindicen registramos:*/

       $conexion = mysql_connect("localhost", "root", "Xxxholic0");

       mysql_select_db("sk8boy", $conexion);
       $sql="INSERT INTO Users (userName, password) VALUES ('".$user."', '".md5($pass1)."')";

       echo"<div class='text-center lobster grande azul animated bounceInDown retraso1 espacio-abajo'>";
    mysql_query($sql, $conexion) or die ("Error al insertar datos ". mysql_error());
   

       
       

         echo ("Registro exitoso<br><a href=usuario.php><br>Rellenar datos personales</a><br>");
         echo '<img  src="img/verified6.png ">';
 echo '</div>';
   } else {
       
       echo"<div class=' quitar-float text-center error lobster grande animated bounceInDown retraso1 espacio-abajo'>";
       echo '<img class="img-rounded inline-block img-tamaño" src="img/404_10.jpg"><br>';
       die(" Error, las password no coinciden o falta nombre de usuario<br> <a href=registro.php> Intentelo de nuevo</a>");
       
?>
    <?php
       echo '';
        echo '</div>';
   }
} else { ?>

<body>
    
    <div class="text-center lobster grande azul animated bounceInDown retraso1 espacio-abajo">
Formulario de registro de usuarios
</div>
    <div class=" mediano text-center center-block col-md-12 ">
<form action="registro.php?accion=registrar " method="POST">
    Introduce usuario: <input type="text" name="user"><br>
Introduce password: <input type="password" name="pass1" class="espacio-arriba"><br>
Confirma password: <input class="espacio-arriba espacio-abajo" type="password" name="pass2"><br>


<input  class="espacio-derecha"type="submit" value="Registrar">
</form>
        </div>
</body>
 <?php include ('includes/footer.php');?>
</html>
<?php 
}
?>

