<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clase 1</title>
</head>

<body>

<header>
    <nav class="botonera_principal">
        <ul>
            <li> <a href="index.php"> Home </a></li>
            <li> <a href="tienda.php"> Tienda </a></li>

        </ul>

    </nav>
</header>
    <h1> Clase 1</h1>
    <h2> Variables y operadores</h2>

    <section>
        <h3> Cursos </h3>
        <?php

        // Variables
        $texto = "PHP inicial";
        $unidades_curso = 5;
        $arancel = 12882.5;
        $fecha = "10/2/22";


        $nombre_curso2 = "PHP intermedio";
        $unidades_curso2 = 8;
        $arancel2 = 22288.5;
        $fecha2 = "10/8/22";
        ?>
    </section>

    <section>
        <h3>Echo y Print</h3>

        <?php

        echo "<h4> Hola mundo </h4>";

        ?>

    </section>


    <section>

        <h3><?php echo $texto; ?> </h3>
        <ul>
            <li> Duración: <?php echo $unidades_curso; ?></li>
            <li> Arancel: $ <?php echo $arancel; ?></li>
            <li> Fecha de inicio: <?php echo $fecha; ?></li>
        </ul>

        <h3><?php echo $nombre_curso2; ?> </h3>
        <ul>
            <li> Duración: <?php echo $unidades_curso2; ?></li>
            <li> Arancel: $ <?php echo $arancel2; ?></li>
            <li> Fecha de inicio: <?php echo $fecha2; ?></li>
        </ul>

    </section>

    <?php
    $dolar = 250;
    $duracion_total = $unidades_curso + $unidades_curso2;
    $arancel_total = $arancel + $arancel2;

    $precio_dolar = $arancel_total / $dolar;


    ?>


    <section>
        <h3> Total</h3>
        <ul>
            <li> Duración Total: <?php echo $duracion_total; ?></li>
            <li> Arancel totales: $ <?php echo $arancel_total; ?></li>
            <li> Precio dolar: $ <?php echo round($precio_dolar); ?></li>
        </ul>

    </section>


    <!-- Constantes  -->


    <?php 
    define('CONSTANTE', 'Hola mundo');
    echo CONSTANTE;

    echo "<br> <br>";
    const CONSTANTE2 = 'Soy una constante con const';
    echo CONSTANTE2;

    echo "<br> <br>";
    echo PHP_INT_MAX;
    echo "<br> <br>";
    echo PHP_FLOAT_DIG;
    echo "<br> <br>";
    echo PHP_FLOAT_MAX;
    echo "<br> <br>";
    echo PHP_FLOAT_MIN;




    
    ?>



</body>

</html>