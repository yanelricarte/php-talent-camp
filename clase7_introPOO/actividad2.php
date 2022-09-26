<html>
<head>
<title>Calculadora</title>
</head>
<body>

<?php
class Calculadora {
    public static function sumar($v1,$v2)
    {
        return $v1+$v2;
    }
    public static function restar($v1,$v2)
    {
        return $v1-$v2;
    }
    public static function multiplicar($v1,$v2)
    {
        return $v1*$v2;
    }
    public static function dividir($v1,$v2)
    {
        return $v1/$v2;
    }
    }

$x1=10;
$x2=5;

echo "La suma de $x1 y $x2 es:".Calculadora::sumar($x1,$x2);
echo '<br>';

echo "La diferencia de $x1 y $x2 es:".Calculadora::restar($x1,$x2);
echo '<br>';

echo "La multiplicacion de $x1 y $x2 es:".

Calculadora::multiplicar($x1,$x2);

echo '<br>';

echo "La division de $x1 y $x2 es:".Calculadora::dividir($x1,$x2);
// ::  permite acceder a elementos estáticos, constantes, y sobrescribir propiedades o métodos de una clase.
?>

</body>
</html>

