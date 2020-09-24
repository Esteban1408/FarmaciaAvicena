<?php
if(isset($_POST["Enviar"])){
		$destino= "esrebanmisael@gmail.com";
		$nombre=$_POST["Nombre"];
		$correo=$_POST["Correo"];
		$telefono=$_POST["Telefono"];
 		$edad=$_POST["Edad"];
 		$sexo=$_POST["Sexo"];
 		$hora=$_POST["fechayhora"];
 		$asunto=$_POST["Asunto"]
		$contenido = "Nombre: ". $nombre . "\nCorreo: ". $correo ."\nTeléfono: ".$telefono."\nEdad: ".$edad."\nAsunto: ".$asunto. "\nSexo: ".$sexo. "\nDia y Hora: ".$hora;
		mail($destino,"Consulta Médica",$contenido);
		header("Location:Gracias.html");
        }





if(isset($_POST["Diez"])){
		$destino= "esrebanmisael@gmail.com";
		$nombre=$_POST["Nombre"];
		$correo=$_POST["Correo"];
 		$edad=$_POST["Edad"];
		$contenido = "Nombre: ". $nombre . "\nCorreo: ". $correo ."\nEdad: ".$edad. "\nHora: 10pm";
		mail($destino,"Consulta Médica",$contenido);
		header("Location:Gracias.html");
		
}

?>