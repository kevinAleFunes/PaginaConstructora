<?php

include("Conexion.php");

if (isset($_POST['boton'])){
    if(
        strlen($_POST['nombre']) >= 1 &&
        strlen($_POST['apellido']) >= 1 &&
        strlen($_POST['email']) >= 1 &&
        strlen($_POST['comentario']) >= 1 
    ){
        $nombre = trim($_POST['nombre']);
        $apellido = trim($_POST['apellido']);
        $email = trim($_POST['email']);
        $comentario = trim($_POST['comentario']);
        $consulta = "INSERT INTO cliente(nombre, apellido, email, comentario)
                    VALUES ('$nombre', '$apellido', '$email', '$comentario')";
        $resultado = mysqli_query($con, $consulta);

        if($consulta){
            ?>
                <div class="confirmacion">Se conecto correctamente</h3>
            <?php
            header("location:http://localhost/PHPMYSQL/PaginaConstructora/paguina_constructora.html");
        } else{
            ?>
                <div class="error">Ocurio un error</h4>
            <?php
        }
    } else{
        ?>
            <div class="error">Llena todos los campos</h4>
        <?php
    }
}
?>