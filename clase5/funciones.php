<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones</title>
</head>
<body>
    <h1> Funciones en PHP</h1>
    <?php 
    
    function saludar($nombre, $apellido){
        echo "Hola $nombre $apellido. <br>";
    }

    saludar("Harry", "Potter");
    saludar("Hermione", "Granger");
    saludar("Run", "Weasley");
    saludar("Luna", "Lovegood");
    ?>

    <h2> Devolver valores</h2>

    <?php 
    // function cuadrado($num){
    //     return $num * $num;
    // }

    // echo cuadrado(5);



    function numeros(){
        return array (0,1,2,3);
    }

    list($cero, $uno, $dos, $tres) = numeros();

    echo($cero.",");
    echo($uno.",");
    echo($dos.",");
    echo($tres);




?>



</body>
</html>