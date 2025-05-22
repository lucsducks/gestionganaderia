<?php
require '../../model/modelo_listar.php';

$ML = new Modelo_listar();
$consulta = $ML->listar_grupo();

header('Content-Type: application/json');

if (isset($consulta['error']) && $consulta['error'] === true) {
    echo json_encode([
        "data" => [],
        "error" => $consulta['message']
    ]);
    exit;
}

echo json_encode($consulta, JSON_UNESCAPED_UNICODE);
?>
