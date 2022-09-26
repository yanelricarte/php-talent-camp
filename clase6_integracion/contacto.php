<?php include("header.php")
?>

<section class="contacto_contenido">
    <form action="enviar_consulta.php" method="POST">

        <input type="text" name="nombre" placeholder="Nombre" class="contacto__input" required>
        
        <input type="text" name="apellido" placeholder="Apellido" class="contacto__input" required>
        
        <input type="email" name="correo" placeholder="Email" class="contacto__input" required>
        
        <textarea class="contacto__input" name="mensaje" placeholder="mensaje" cols="30" rows="10" required></textarea>
        
        <input type="submit" value="Enviar consulta" class="contacto__btn">


    </form>

    <?php
    if (isset($_GET['e'])) {
        echo "<h3> Mensaje enviado con éxito </h3>";
    }

    ?>

</section>


<?php include("footer.php")
?>


</body>

</html>