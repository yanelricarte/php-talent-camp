<?php

/* ejemplo 1*/
/*
$i = 1;
while($i <= 10){
    echo $i++;
} 


// ejemplo 2

$i = 1;
while($i <= 10){
    echo $i;
    $i++;
} 


// DO WHILE

$i = 0;
do{
    echo $i;
} while ($i > 0);


// EJERCICIOS

$numero = 0;

while($numero <= 100){
    echo "$numero, ";
    $numero++;
}


$numero = 0;

while($numero <= 100){
    echo $numero;
    if ($numero !=100) echo ", ";
    $numero++;
}


// Ejercicio while 3

if (isset ($_GET['numero'])){
    $numero =(int)$_GET['numero']; 
} else{
    $numero = 1;
}

$contador = 0;
while ($contador <=10){
    echo "$numero x $contador = ".($numero*$contador). "<br>";
    $contador++;
}


//incremento
for ($i = 1; $i <= 10; $i++){
    echo $i;
}

//decrementro
for ($i = 10; $i >= 1; $i--){
    echo"<br>";
    echo $i;
}


// FOR CON BREAK


for ($numero = 0; $numero < 10; $numero++){
    if ($numero == 4){
        break;
    }
    echo "El numero es: $numero <br>";
}

*/
for ($i = 0; $i < 50; $i +=5){
    echo " saltos de 5 en 5. NUMERO: $i<br>";
}

for($i = 50; $i <= 500; $i += 25) {
    if($i == 500) {
        echo $i;
        break;
    }
    echo $i . ', ';
}
for ($i = 50; $i <= 500 ; $i += 25) {
    echo $i."<br>";
}