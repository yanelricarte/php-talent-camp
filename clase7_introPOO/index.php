<?php

// Definición de una clase Poligono incluyendo el constructo y destructor

class Poligono{
    public $vertices;
    public $color;

    function __construct($ver=null)
    {
    if ($ver==null)
    $this ->vertices = 4;
    else 
    $this->vertices = $ver;
}
function __destruct()
{
    echo 'vertice : '.$this->vertices. 'finalizado';
}
function muestraVertice()
{
    echo $this->vertices;
}
}


// Instanciar la clase
$cuadrado = new Poligono();
$triangulo = new Poligono(3);