<?php include("header.php")
?>

<section class="contacto_contenido">
    <form action="enviar_consulta.php" method="POST">
        <input type="text" name="nombre" placeholder="Nombre" class="contacto_input" required>
        <br>
        <input type="text" name="apellido" placeholder="Apellido" class="contacto_input" required>
        <br> 
        <input type="email" name="correo" placeholder="Email" class="contacto_input" required>
        <br> 
        <textarea name="mensaje" placeholder="mensaje"cols="30" rows="10" required></textarea>
        <br>
        <input type="submit" value="Enviar consulta" class="contacto_btn">


    </form>

    <?php
       if(isset($_GET['e'])){
        echo"<h3> Mensaje enviado con éxito </h3>";
    }
    
    ?>

</section>


<?php include("footer.php")
?>


</body>

</html>