<html> 
    <body>
<?php
if (isset ($_POST ['vec'])){
    $vector = $_POST['vec']; $n = count($vector); $suma = 0;
    echo "El vector tiene $n elementos <br>";


    for ($i=0; $i<$n; $i++){
        echo "$i = $vector[$i] <br> ";
        $suma = $suma +$vector [$i];
    }

    echo "la suma es $suma <br>";
}

?>

<form action="array_form.php" method="POST">
<?php 
$n = 8;
for ($i = 0; $i <= $n; $i++){
    echo $i; echo "<input type='text' name='vec[]' size='10'>";
    echo "<br>";
}
?>

<input type="submit">


</form>

</body>
</html>