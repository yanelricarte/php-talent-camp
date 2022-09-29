<?php

//  Empazaremos definiendo la jerarquia de clases

class classPoligono{
    function calculo(){
        echo 'El área depende del tipo de poligono';
    }
}
class classCuadrado extends classPoligono{
    function calculo()
    {
        echo 'área de un cuadrado: a=l*l<br>';
    }
}

class classRectangulo extends classPoligono{
    function calculo()
    {
        echo 'área de un rectángulo : a = b*h<br>';
    }
}

class classTriangulo extends classPoligono{
    function calculo()
    {
        echo 'área de un triángulo : a = (b*h)/2<br>';
    }
}

/* fin de definición de la jerarquía de clases */


/* Definición de la función encargada de realizar las llamadas polimórficas al método cálculo*/

function area(classPoligono $obj){
    $obj->calculo();
}



/* Creamos los objetos necesarios */
$cuadrado = new classCuadrado;
$rectagulo = new classRectangulo;
$triangulo = new classTriangulo;

/*
Ejecutamos la función encargada de realizar la llamada polimórfica
*/

area($cuadrado);
area($rectagulo);
area($triangulo);