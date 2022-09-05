<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clase 2</title>
</head>

<body>
    <h1> Clase 2: Estructuras de control</h1>

    <h2> If </h2>

    <?php

    // if con Else

    /*
$numero = 35;

    if($numero > 20){
        echo "Es mayor a 20";
    } else{
        echo "NO es mayor a 20";
    }
    
*/
    // Elseif

    /*Por ejemplo, el siguiente código deberá mostrar:
“a es mayor que b”
“a es igual que b”
“a es menor que b”


    $a = 50;
    $b = 50;

    if ($a > $b) {
        echo "a es mayor que b";
    } elseif ($a == $b) {
        echo "a es igual que b";
    } else {
        echo " a es menor que b";
    }
*/
    // Ejemplo 2

    /* 
    $test = 33;

    if ($test > 40) {
        echo " $test es mayor que 40.";
    } elseif ($test > 35) {
        echo " $test es mayor que 35.";
    } elseif ($test > 30) {
        echo " $test es mayor que 30.";
    } else {
        echo " $test es menor que 40, 35 y 30.";
    }
*/




    // Switch
    /* 
switch(expresión) {
  case "a": //Código a ejecutar;
	break;
  case "b": //Código a ejecutar;
	break;
  case "c": //Código a ejecutar;
	break;
 default: //Código a ejecutar por default.
}

    $i = 5;
    switch ($i) {
        case 0:
            echo "i es igual a 0 ";
            break;

        case 1:
            echo "i es igual a 1 ";
            break;

        case 2:
            echo "i es igual a 2 ";
            break;

        default:
            echo "Sos otro número";
    }
*/

$postre = 2;

    switch ($postre) {

        case 0:
            echo "Hoy tenemos chocotorta";
            break;

        case 1:
            echo "Hoy tenemos tarta de ricota";
            break;

        case 2:
            echo "Hoy tenemos roll de canela";
            break;

            default:
            echo "medialunas";
    }









    ?>



</body>

</html>