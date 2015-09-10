<?php session_start();?>
<html>
    <head>
        <title>Usuario</title>
        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <link rel="stylesheet" href="scc/main.css"/>
       <link rel="stylesheet" href="scc/animate.css"/>
      <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css"/>
      <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
      
    </head>
    <body class="fondo"> 
        
        
        <nav class="se-gris padding-largo text-center">
            <!--ul indica una lista en html i <li> se coloca el lemento de la lista-->
            
            Logeado como :
            <?php
            echo $_SESSION["nombre"].'';
            ?>
           
            
        </nav>
<?php  

if($_GET['accion']=="registrar") {
        $nombre=$_POST['nombre'];
   $edad=$_POST['edad'];
   $email=$_POST['email'];
   $telefono=$_POST['telefono'];
   $direccion=$_POST['direccion'];
   $rfc=$_POST['rfc'];
   $sexo=$_POST['group1'];
   
        if($nombre!=NULL && $edad != NULL && $email!=NULL && $telefono != NULL && $direccion!=NULL && $rfc != NULL) {
        $conexion = mysql_connect("localhost", "root", "Xxxholic0");

       mysql_select_db("sk8boy", $conexion);
       
       $sql = "SELECT MAX(iduser) FROM Users";    
   $result = mysql_query( $sql );
   $row = mysql_fetch_array($result);

       
        $sql2="INSERT INTO Clientes (nombre, edad, email, telefono, direccion, rfc, User_idUser ,Sexos_idSexo) VALUES "
               . "('".$nombre."', '".$edad."', '".$email."', '".$telefono."', '".$direccion."', '".$rfc."',$row[0], $sexo )";
        
mysql_query($sql2, $conexion) or die ("Error, al insertar datos ". mysql_error());

echo"<div class='text-center lobster grande azul animated bounceInDown retraso1 espacio-abajo'>";
       echo ("Registro exitoso<br><a href=index.php>"
        . "Hacer login</a><br><br>");
       echo '<img  src="img/verified6.png ">';
       echo '</div>';
        
        
    }else {
        echo"<div class=' lobster grande azul animated bounceInDown retraso1 text-center'>";
        echo '<img class=" center-block img-rounded vete-arriba img-tamaño" src="img/404_10.jpg">'; 
       die("Error faltan datos <br><a class='error' href=usuario.php>Vuelve a intentarlo</a>");
       echo '</div>';
       ?>
       <script type="text/javascript">
function redireccionar(){
  window.locationf="http://localhost/Sk8Boy/index.php";
} 
setTimeout ("redireccionar()", 5000); //tiempo expresado en milisegundos
</script>';
<?php
   }
} else  ?>
<h1 class="lobster grande azul animated bounceInDown retraso1 text-center">Datos personales</h1>
  <div class="col-md-12 center-block quitar-float text-center mediano espacio-arriba">
        <form action="usuario.php?accion=registrar" method="POST">
Nombre*: <input class="espacio-abajo" type="text" name="nombre"><br>
Edad*: <input class="espacio-abajo" type="text" name="edad"><br>

e-mail*: <input class="espacio-abajo" type="text" name="email"><br>
telefono*: <input class="espacio-abajo" type="text" name="telefono"><br>
direccion*: <input class="espacio-abajo" type="text" name="direccion"><br>
rfc*: <input class="espacio-abajo" type="text" name="rfc"><br>
Sexo: 
<input class="espacio-abajo" type="radio" name="group1" value= '1' checked> Hombre 
<input class="espacio-abajo" type="radio" name="group1" value= '2' > Mujer<br>
<input class="espacio-abajo" type="submit" value="Registrar"><br>

Los campos un simbolo * son informacion necesaria.
</form>
  </div>
 <?php include ('includes/footer.php');?>
    </body>
</html>

