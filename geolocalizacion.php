<!DOCTYPE HTML>
<html>
	<head>
		<title> Geolocalizaci&oacute;n  </title>
		
		<!-- Script para mostrar las coordenadas-->
		<script type="text/javascript">
			if (navigator.geolocation) { //Validar si hay acceso web a la ubicación
				navigator.geolocation.getCurrentPosition(mostrarUbicacion); //Obtiene la posición
				} else {
				alert("¡Error! Este navegador no soporta la Geolocalización.");
			}
			
			//Funcion para obtener latitud y longitud
			function mostrarUbicacion(position) {
				var latitud = position.coords.latitude; //Obtener latitud
				var longitud = position.coords.longitude; //Obtener longitud
				var div = document.getElementById("coordenadas");
				div.innerHTML = "<br>Latitud: " + latitud + "<br>Longitud: " + longitud; //Imprime latitud y longitud
			}		
		</script>
		
	</head>
	<body>

         <button onclik="findMe()"> mostrar ubicacion </button>
         <div id="mapa"></div>







		
		<!-- División o secciona para mostrar coordenadas -->
		<div id='coordenadas'></div> 
		
	</body>
</html>
