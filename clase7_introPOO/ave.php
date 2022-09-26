
<?php

class Ave{
    // Propiedades, atributos, variables
    public $nombre;
    protected $dias_vida;
    public $km_recorridos;

    //Métodos

    public function __construct($nomb){

        //Ejecuta con cada new
        echo "Constructor";
        var_dump($nomb);
        $this->nombre=$nomb;
        $this->dias_vida=0;
        $this->km_recorridos=0;
    }

    public function volar($km){
        echo "Volar".$this->nombre;
        $this ->dias_vida+=2;
        $this ->km_recorridos+=$km;

    }
    public function getDiasVida(){
        return $this->dias_vida;
    }
    public function setDiasVida($dias){
        return $this->dias_vida +=$dias;
    }
    
        
    
}


class Paloma extends Ave{
    // 
}


// Implementar la clase

$pepita = new Paloma("Pepita");
echo $pepita->getDiasVida();
echo "<br>";

$pepita ->volar(15);
echo "<br>";


$pepita ->setDiasVida(20);
echo $pepita -> getDiasVida();

echo "<br>";

echo $pepita->km_recorridos;
