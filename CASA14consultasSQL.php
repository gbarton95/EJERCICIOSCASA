<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conexion a BBDD y consultas SQL</title>
</head>
<body>
    <?php
        $db_host="localhost";
        $db_nombre="pildorasinformaticas";
        $db_usuario="root";
        $db_contra="";

        $conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);

        $consulta="SELECT * FROM persona";

        $resultados=mysqli_query($conexion, $consulta);

        $fila=mysql_fetch_row($resultados);

        echo $fila[0];


    ?>
</body>
</html>