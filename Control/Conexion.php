<?php
$host ="localhost";
$dbname = "Clientes";
$username = "postgres";
$pass = "kevinfunes0817";
//Conectamos a la base de datos
$connection = mysqli_connect($host, $dbname, $username, $pass);

//Hacemos llamado al input de formulario
$nombre = $_POST["Nombre"];
$apellido = $_POST["Apellido"];
$email = $_POST["Email"];
$comentario = $_POST["Agregar comentario"];

//Verificamos la conexion
if(!$connection)
    {
        echo "No se ha podido conectar con el servidor" . mysql_error();
    }
else
    {
        echo "<b><h3>Hemos conectado al servidor</h3></b>"
    }
    $datab = "Completar datos";
    $db = mysqli_select_db($connection,$datab);

    if(!$db)
    {
    echo"No se ha podido encontrar la tabla";
    }
    else
    {
    echo"<h3>Tabla seleccionada:</h3>";
    }
    //insertamos los datos al mysql
    $instruccion_SQL = "INSERT INTO tabla (nombre, apellido, email, comentario) VALUES ('$nombre', '$apellido', '$email', '$comentario')"
    $consulta = "SELECT * FROM tabla";
$result = mysqli_query($connection,$consulta);
if(!$result)
{
    echo "No se ha podido realiar la consulta";
}
echo "<table>";
echo "<tr>";
echo "<th><h1>id</th></h1>";
echo "<th><h1>Nombre</th></h1>";
echo "<th><h1>Apellido</th></h1>";
echo "<th><h1>Email</th></h1>";
echo "<th><h1>Comentario</th></h1>";
echo "</tr>";

while ($colum = mysqli_fetch_array($result))
{
    echo "<tr>";
    echo "<td><h2>" . $colum['id']."</td></h2>";
    echo "<td><h2>" . $colum['nombre']."</td></h2>";
    echo "<td><h2>" . $colum['apellido']."</td></h2>";
    echo "<td><h2>" . $colum['email']."</td></h2>";
    echo "<td><h2>" . $colum['comentario']."</td></h2>";
    echo "</tr>";
}
echo "</table>";

mysqli_close($connection);
    //echo "Fuera";
    echo '<a href="agregar_datos_cliente.html">Volver Atrás</a>';
<?php

$conexion = new mysqli("localhost","postgres","kevinfunes0817","Cientes");
$conexion->set_charset("utf8");
?>