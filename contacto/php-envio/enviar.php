<?php

 //llamados los campos 
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];

//datos para el correo
$destinatario = "wildochambiapaz@gmail.com";
$asunto = "Contacto de nuestra web calzados";
$carta = "De: $nombre \n";
$carta .="Correo: $correo \n";
$carta .="Telefono: $telefono \n";
$carta .="Mensaje: $mensaje";

//enviando correo
mail($destinatario, $asunto, $carta);
header('Location:../contacto.html')
?>