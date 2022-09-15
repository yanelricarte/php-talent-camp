<?php
$nombre_form = $_POST['nombre'];
$apellido_form = $_POST['apellido'];
$correo_form = $_POST['correo'];
$mensaje_form = $_POST['mensaje'];


$cuerpo_mail = "Nombre: ".$nombre_form. "\r\n" . "Apellido: ". $apellido_form . "\r\n" . "Correo electrónico: " . $correo_form. "\r\n" . "Mensaje: " .$mensaje_form;


mail("naranjaspintadas@gmail.com", "Mensaje enviado de misitio.com", $cuerpo_mail);

header("Location: contacto.php?e=ok");
