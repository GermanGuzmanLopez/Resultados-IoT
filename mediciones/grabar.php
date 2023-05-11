<?php

include 'conexion.php';

if ($_GET) {
    $valor = $_GET["temperatura"];  // http://localhost/mediciones/grabar.php?temperatura=20

    $sql_agregar = "INSERT INTO practica (temperatura)  VALUES (?)";

    $sentencia_agregar = $pdo->prepare($sql_agregar);

    $resultado = $sentencia_agregar->execute(array($valor));

    if ($resultado==true) {
        $sentencia_agregar = null;
        $pdo = null;
        echo "Temperatura " . $valor . ", guardada correctamente en la BD ";
    } else {
        echo "Error al insertar en la BD: ";
        echo $pdo->errorInfo();
    }
} else {
    echo "Debes usar el método GET";
}

?>