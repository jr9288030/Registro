
<?php
include("conexion.php");
?>


<?php
$site_name="Roles";
$url_site="http://127.0.0.1/loga/";



$servidor="localhost";
$usuario="root";
$clave="";
$base="loga";
mysql_connect($servidor,$usuario,$clave);
mysql_select_db($base);
?>







<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <title>barra de navegacion</title>
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
	<h1></h1>
	<ul>


                 <li><a href="inicio.php">inicio</a></li>
    	        <li><a href="../jorge.php">Registro y Asignacion</a></li>
                <li><a href="#">localizacion</a></li>
                <li><a href="mama.php">Galeria</a></li>
                <li><a href="contacto.php">contacto</a></li>
    </ul>
    </div>
    


     <section id="contenedor"><br/>


<form action="" method="post">
    
    Latitud:<input required name="latitud"><br />
    Longitud:<input name="longitud"><br />
    Cedula:<input name="cedula"><br />


    <input type="submit" name="submit" value="Guardar"/>
</form>


</section> 












<button onclik="findMe()"> mostrar ubicacion </button>
         <div id="mapa"></div>







        
        <!-- División o secciona para mostrar coordenadas -->
        <div id='coordenadas'></div> 











      <div id="map"></div>
    

<form action="">
  <h3> latitud</h3>  
  <input name="lat" id="lat">
 <h3> longitud</h3>

    <input name="lng" id="lng">
</form> 



   <p>Por favor ingrese la latitud y su longitud en los cuadros asignados</p>   
    


    



    
    <script>
      // Note: This example requires that you consent to location sharing when
      // prompted by your browser. If you see the error "The Geolocation service
      // failed.", it means you probably did not give permission for the browser to
      // locate you.

      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -34.397, lng: 150.644},
          zoom: 6
        });
        var infoWindow = new google.maps.InfoWindow({map: map});

        // Try HTML5 geolocation.
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude 
          };
			  
            infoWindow.setPosition(pos);
            infoWindow.setContent('Location found.');
            document.getElementById("lat").value = pos['lat'];
            document.getElementById("lng").value = pos['lng'];
            map.setCenter(pos);
          }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
          });
        } else {
          // Browser doesn't support Geolocation
          handleLocationError(false, infoWindow, map.getCenter());
        }
      }

      function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
                              'Error: The Geolocation service failed.' :
                              'Error: Your browser doesn\'t support geolocation.');
      }
	  

	  
	  
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyADEJ4CefBZr2HbNZjDuLuVxg6xDFk5sxs&callback=initMap">
    </script>

        


   








</body>




</html>








<?php
if($_POST){
    
    $m=$_POST['latitud'];
    $t=$_POST['longitud'];
    $e=$_POST['cedula'];

 mysql_query("insert into cordenadas(latitud,longitud,cedula)values('$m','$t','$e')") or die(mysql_error());
    echo "<h2>Dato Guardado</h2>";
   }
?>