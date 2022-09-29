<?php

/* Definimos la clase abstracta */


abstract class classPoligono{
    /* Declaramos el método abstracto a implementar en las clases derivadas*/

    abstract function calculo();
}

/* A continuación definimos las clases derivadas que van a extender el funcionamiento de la clase base Poligono (abstracta) */

class classCuadrado extends classPoligono{
    function calculo()
    {
        echo 'área de un cuadrado : a=l*l<br>';
    }
}
class classRectangulo extends classPoligono{
    function calculo()
    {
        echo 'area de un rectángulo : a=b*h<br>';
    }
}

class classTriangulo extends classPoligono{
    function calculo()
    {
        echo 'área de un triángulo : a=(b*h)/2<br>';
    }
}


/* Definición de la función encargada de realizar las llamadas polimórficas al método "calculo" */

function area(classPoligono $obj)
{
    $obj->calculo();
}

/*
Creamos los objetos necesarios
*/
$cuadrado = new classCuadrado;
$rectangulo = new classRectangulo;
$triangulo = new classTriangulo;

/*
Ejecutamos la funcion encargada de realizar la llamada polimorfica
*/
area($cuadrado);
area($rectangulo);
area($triangulo);
?>