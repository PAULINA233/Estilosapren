<?php  

// Llamando a los campos
$nombre = $_POST['nombre'];
$¿Qué tipo de examen realizas con mayor facilidad? = $_POST['¿Qué tipo de examen realizas con mayor facilidad?'];
$¿De qué manera te resulta más fácil aprender algo? = $_POST['¿De qué manera te resulta más fácil aprender algo?'];
$¿A qué tipo de evento preferirías asistir? = $_POST['¿A qué tipo de evento preferirías asistir?'];

// Datos para el correo
$destinatario = "Docentes";
$asunto = "Contacto desde nuestra web";

$carta = "De: $nombre \n";
$carta .= "¿Qué tipo de examen realizas con mayor facilidad?: $¿Qué tipo de examen realizas con mayor facilidad?\n";
$carta .= "¿De qué manera te resulta más fácil aprender algo?: $¿De qué manera te resulta más fácil aprender algo? \n";
$carta .= "¿A qué tipo de evento preferirías asistir?: $¿A qué tipo de evento preferirías asistir?";

// Enviando Encuesta
mail($destinatario, $asunto, $carta);
header('Location:encuesta-de-envio.html');

?>