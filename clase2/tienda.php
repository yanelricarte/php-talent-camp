<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Tienda</title>
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
    <section class="tienda_contenido">
        <h1> Tienda </h1>
        <ul>
            <li> <a href="tienda.php?producto=ct"> Chocotorta </a></li>
            <li> <a href="tienda.php?producto=tr"> Tarta de ricota </a></li>
            <li> <a href="tienda.php?producto=rc"> Roll de canela</a></li>


        </ul>

    </section>
    <!-- Estructuras de control -->
    <?php

    if (isset($_GET['producto'])) {
        switch ($_GET['producto']) {
            case 'ct':
                $nombre = 'Chocotorta';
                $ingredientes = 'chocolinas, dulce de leche y crema';
                $precio = 1000;
                $img = './img/chocotorta.jpeg';
                break;
            case 'tr':
                $nombre = 'Tarta de ricota';
                $ingredientes = 'ricota, crema y harina';
                $precio = 1200;
                $img = './img/tartaricota.jpeg';
                break;
            case 'rc':
                $nombre = 'Roll de canela';
                $ingredientes = 'canela y azúcar';
                $precio = 1300;
                $img = './img/rollcanela.jpeg';
                break;
        }
    }
    ?>

    <div class="producto_descripcion">
        <h2> <?php echo $nombre; ?></h2>
        <h3> <?php echo $ingredientes; ?></h3>
        <h4> <?php echo $precio; ?></h4>
        <div class="contenedor_img">
            <img src="<?php echo $img; ?>" alt="">

        </div>



    </div>



</body>

</html>