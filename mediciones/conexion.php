
<?php
// Conexión a la Base de datos (BD)
// Autor:

try {
    $pdo = new PDO('mysql:host=192.168.0.3;dbname=practica6', 'root', '');  // WARNING
    //echo "Conexión exitosa";
} catch (PDOException $e) {
    echo "Error, falla al conectarse a la BD";
    echo "Error, " . $e->getMessage();
    die();
}

?>