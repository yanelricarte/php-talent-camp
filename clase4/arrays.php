<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clase 4</title>
</head>

<body>
    <h1> Estructuras de datos</h1>
    <h2> Definir un vector</h2>

    <h3> Arrays Indexados</h3>

    <?php /* 
    $familia[0]="Padre";
    $familia[1]="Madre";
    $familia[2]="Hijo";

    echo $familia[0];
    echo "<br>";
    echo $familia[1];


    $pais = array("Argentina", "Chile", "Colombia");
    $familia = array ("Padre", "Madre", "HIjo");
    echo "<hr>";
    echo "<br>";
    
    echo $familia[0];
    echo "<br>";

    echo $pais[1];


    $pais[] ="Argentina";
    $pais[] ="Chile";
    $pais[] ="Colombia";
    $pais[] ="Venezuela";

    echo "<hr>";
    echo "<br>";
    
    echo $pais[0];
    */

    $cars = array("Volvo", "BMW", "Toyota");
    $arrlength = count($cars);

    for ($x = 0; $x < $arrlength; $x++) {
        echo $cars[$x];
        echo "<br>";
    }



    ?>





    <h3> Arrays Asociativos</h3>
    <?php
    // $frutas = array( "23" => "Manzana", "56" => "Naranja", "12" => "Pera", "2" => "Anana");
    // echo $frutas[12];


    $frutas = array(0 => "Manzana", 1 => "Naranja", 2 => "Pera", 3 => "Ananá");

    // $length_frutas = count($frutas);

    echo  count($frutas);

        echo "<hr>";
        echo "<br>";

    $edad = array("Peter" => "35", "Ben" => "37", "Joe" => "43");

    foreach ($edad as $x => $x_value) {
        echo "Clave=" . $x . ", Valor=" . $x_value;
        echo "<br>";
    }


    // Ejemplo con días de la semana

    //Inicialización del vector

    $dia[0] = "domingo";
    $dia[1] = "lunes";
    $dia[2] = "martes";
    $dia[3] = "miércoles";
    $dia[4] = "jueves";
    $dia[5] = "viernes";
    $dia[6] = "sábado";

    //Imprimimos utilizando for

    echo "<hr>";
    echo "<br>";
    
    for ($i = 0; $i < 7; $i++){
        echo ($dia[$i] . "<br>");
    }


// Ejemplo COUNT

echo "<hr>";
echo "<br>";

$articulos = array("lápiz", "goma", "hoja", "tinta");

// Impresión del vector

$cantidad = count($articulos);

echo "La cantidad de artículos es; " . $cantidad;


    ?>
</body>

</html>