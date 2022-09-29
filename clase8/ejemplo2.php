<?php
/* Empezamos definiendo la interface */

interface Poligono{
    function calculo();
}


// A continuación definimos las clases que implementan la interface

class classCuadrado implements Poligono{
    function calculo(){
        echo 'area de un cuadrado : a=l*l<br>';
    }
}

class classRectangulo implements Poligono{
    function calculo(){
        echo 'área de un rectangulo : a=b*h<br>';
    }
}

class classTriangulo implements Poligono{
    function calculo(){
        echo 'área de un triangulo : a=(b*h)/2<br>';
    }
}

/* Definición de la función encargada de realizar las llamadas polimórficas
al método "calculo" */

function area(Poligono $obj)
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
Ejecutamos la función encargada de realizar la llamada polimórfica
*/
area($cuadrado);
area($rectangulo);
area($triangulo);
