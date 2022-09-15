<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1> Funciones/ métodos de arrays en PHP</h1>
    <h2> Array_slice </h2>
    <?php
    $colores = array("rosa", "verde", "colorado", "amarillo", "violeta");
    print_r(array_slice($colores, 3));
    echo "<hr>";


    $entrada = array("Miguel", "Pepe", "Julia", "Micaela", "Fernando");

    // mofifico el tamaño
    $salida = array_slice(
        $entrada, 0,3);

    // mostramos el array

    foreach ($salida as $actual)
        echo $actual . "<br>";

        //modificamos otra vez
    $salida = array_slice($salida,1);
    //mostramos el array

    foreach ($salida as $actual) 
    echo $actual . "<hr>";


    ?>


<h2> Array_push </h2>


<?php 
$animales = array("Lagartija", "Araña", "Perro", "Gato", "Raton");
//aumentamos el tamaño del array

array_push($animales, "Gorrión", "Paloma", "Oso");

print_r($animales);

// foreach($animales as $actual)
// echo $actual . "<br>"


?>



<h2> Array_merge </h2>


<?php 
$animales = array("Lagartija", "Araña", "Perro", "Gato", "Raton");

$edades = array("12", "25", "45", "52", "12");

$arboles = array("Sauce", "Pino", "Naranjo");

//Aumentar el tamaño del array

$resultado = array_merge($animales, $edades, $arboles);

foreach($resultado as $actual)
echo $actual . "<br>";

?>


</body>

</html>