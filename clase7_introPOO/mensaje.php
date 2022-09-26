<?php
class Mensajes{
// (...)


public static function mostrar()
{
    echo "Hemos accedido a este método estático";
}
//(..)
}


echo Mensajes::mostrar();