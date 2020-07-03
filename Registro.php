<?php
include("conexion.php");
?>






<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registro</title>

<style>
    body{background-color:green;padding: 150px;font-family:Arial;}


    #menu{
    	background-color:#222;
    }
    #menu ul{
    	list-style:none;
    	margin:0;
    	padding:0;
    }
    #menu ul li{
    	display:inline-block;
    }

    #menu ul li a{
    	color:green;
    	display:block;
    	padding:20px 20px;
    	text-decoration:none;
    }

    #menu ul li a:hover{
    	background-color:yellow;
    }

    </style>
</head>

    <body>
    	<div id="menu">
    		<ul>
    			

              >
                
                <li><a href="inicio.php">inicio</a></li>
                <li><a href="#">Registro y Asignacion</a></li>
                <li><a href="paginas/localizacion.php">localizacion</a></li>
                <li><a href="paginas/mama.php">Galeria</a></li>
                <li><a href="paginas/contacto.php">contacto</a></li>









             </ul>
       </div>








  <section id="contenedor"><br/>

           <img src="img/lojano.jpe" alt="">
                    



            <h3>Registro de Personas y Asignacion de Productos</h3>


      
                        



<form action="" method="post">
    Id_funcionalidad:<input required name="id_funcionalidad"><br />
    Nombre:<input name="nombre"><br />
    Apellido:<input name="apellido"><br />
    Cedula:<input name="cedula"><br />
    Edad:<input name="edad"><br />
    Direccion:<input name="direccion"><br />
    Correo:<input name="correo"><br />
    Telefono:<input name="telefono"><br />


 <h3>Productos</h3>

    Arroz:<br/>
    Si<input checked value="s" type="radio" name="arroz" />
    No<input  value="n" type="radio" name="arroz" />

    <br />

    Azucar:<br/>
    Si<input checked value="s" type="radio" name="azucar" />
    No<input  value="n" type="radio" name="azucar" />

    <br />

    Agua:<br/>
    Si<input checked value="s" type="radio" name="agua" />
    No<input  value="n" type="radio" name="agua" />

    <br />

    Sal:<br/>
    Si<input checked value="s" type="radio" name="sal" />
    No<input  value="n" type="radio" name="sal" />

    <br />

    Aceite:<br/>
    Si<input checked value="s" type="radio" name="aceite" />
    No<input  value="n" type="radio" name="aceite" />

    <br />






















    Latitud:<input name="latitud"><br />
    Longitud:<input name="longitud"><br />
   
    
    
    <input type="submit" name="submit" value="Guardar"/>
</form>


</section> 




































<body>
	

	<section class="contenido">
		<p>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima aut magnam eum, aspernatur officia amet quibusdam nam. Nostrum quo dolores vel, enim eos quis excepturi possimus, dolore ipsum perferendis, porro.
		</p>
	</section>
	
</body>
</html>





<?php
if($_POST){
    $i=$_POST['id_funcionalidad'];
    $n=$_POST['nombre'];
    $a=$_POST['apellido'];
    $c=$_POST['cedula'];
    $e=$_POST['edad'];
    $d=$_POST['direccion'];
    $l=$_POST['correo'];
    $t=$_POST['telefono'];
    $g=$_POST['arroz'];
    $x=$_POST['azucar'];
    $y=$_POST['agua'];
    $z=$_POST['sal'];
    $v=$_POST['aceite'];




    $p=$_POST['latitud'];
    $q=$_POST['longitud'];





    
    
    mysql_query("insert into persona(id_funcionalidad,nombre,apellido,cedula,edad,direccion,correo,telefono,arroz,azucar,agua,sal,aceite,latitud,longitud)values('$i','$n','$a','$c','$e','$d','$l','$t','$g','$x','$y','$z','$v','$p','$q')") or die(mysql_error());
    echo "<h2>Dato Guardado</h2>";
   }
?>

