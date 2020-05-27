<?php

$params = require 'config.php';

try {
    $dsn = sprintf("mysql:host=%s;dbname=%s", $params['host'], $params['db']);
    $pdo = new PDO($dsn, $params['user'], $params['pwd']);
} catch (PDOException $e) {
    echo $e->getMessage();
} catch (Throwable $e) {
    echo $e->getMessage();
}

$nombre = filter_var($_POST['nombre'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$archivo = file_get_contents($_FILES["archivo"]["tmp_name"]);
$extension = pathinfo($_FILES["archivo"]["name"], PATHINFO_EXTENSION);

$sql = "INSERT INTO archivos (nombre, extension, archivo) VALUES (:nombre, :extension, :archivo)";
$sentencia = $pdo->prepare($sql);
$sentencia->execute([
    ':nombre' => $nombre,
    ':extension' => $extension,
    ':archivo' => $archivo,
]);

/**
 * para probar si hay errores
*/
$arr = $sentencia->errorInfo();
print_r($arr);

$query = $pdo->prepare("SELECT * FROM archivos");
$query->execute();
$registros = $query->fetchAll();

require 'save_success.php';

/*while ($row = $sentencia->fetch(PDO::FETCH_ASSOC)) {
    print_r($row);
}*/
