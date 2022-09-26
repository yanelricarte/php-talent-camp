<?php

class Auto{
    // Propiedades: las características que puede tener un Objeto

    public $marca;
    public $modelo;

    // Método
    // indica lo que el objeto puede hacer

    public function mostrar(){
        echo "<p> Hola soy $this->marca, modelo $this->modelo</p> "; 
    }
}


// Objeto
// Una entidad con métodos y con propiedades concretas


$a = new Auto();
$a -> marca = "Toyota";
$a -> modelo = "Corolla";
$a ->mostrar();

$b = new Auto();
$b -> marca = "Fiat";
$b -> modelo = "no tengo idea";
$b ->mostrar();

$c = new Auto();
$c -> marca = "Hyundai";
$c -> modelo = "7";
$c ->mostrar();

