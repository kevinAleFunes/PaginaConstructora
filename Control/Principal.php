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
                <h3 class="sucess">Se conecto correctamente</h3>
            <?php
        } else{
            ?>
                <h3 class="error">Ocurio un error</h3>
            <?php
        }
    } else{
        ?>
            <h3 class="error">Llena todos los campos</h3>
        <?php
    }
}

?>