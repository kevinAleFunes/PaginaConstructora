<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DatosCliente</title>
    <link rel="stylesheet" href="/CSS/estilos-datos-clientes.css">
</head>
<body>
    <section class="formulario">
        <form method="post" autocomplete="off">
            <h1>Completar Datos</h1>
            <label class="titulos" for="name">Nombre</label>
            <input class="datos" type="name" id=name name="nombre">
            <label class="titulos" for="lastname">Apellido</label>
            <input class="datos" type="lastname" id=lastname name="apellido">
            <label class="titulos" for="email">Email</label>
            <input class="datos" type="email" id="email" name="email" required>
            <h2>Agregar comentario</h2>
            <textarea class="comentario" cols="45" rows="3" name="comentario"></textarea>
            <br>
            <input class="boton" type="submit" value="Enviar" name="boton">
        </form>
    </section>
    <?php
        include("Principal.php");
    ?>
</body>
</html>