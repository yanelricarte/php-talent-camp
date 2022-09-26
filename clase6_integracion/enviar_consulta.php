<?php
$nombre_form = $_POST['nombre'];
$apellido_form = $_POST['apellido'];
$correo_form = $_POST['correo'];
$mensaje_form = $_POST['mensaje'];


$cuerpo_mail = "Nombre: ".$nombre_form. "\r\n" . "Apellido: ". $apellido_form . "\r\n" . "Correo electrónico: " . $correo_form. "\r\n" . "Mensaje: " .$mensaje_form;


mail("naranjaspintadas@gmail.com", "Mensaje enviado de misitio.com", $cuerpo_mail);


//Conexión a BASE DE DATOS

// $conexion = mysqli_connect("localhost", "root", "", "php_inicial_tc") or exit ("No se pudo conectar a base de datos");

$conexion = mysqli_connect("localhost", "id17341654_naranjas", "{y0hL6_SqJoN4x5x", "id17341654_php_inicial_tc") or exit ("No se pudo conectar a base de datos");




mysqli_query($conexion, "INSERT INTO contacto VALUES (DEFAULT, '$nombre_form', '$apellido_form', '$correo_form', '$mensaje_form')");

mysqli_close($conexion);



header("Location: contacto.php?e=ok");
