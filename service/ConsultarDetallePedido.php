<?php

require_once '../dao/RestauranteDAO.php';

// Parámetros
$idped = $_REQUEST["idpedido"];

// Proceso
$dao = new RestauranteDAO();
$lista = $dao->DetallePedido($idped);
$data = "";
if ($lista) {
    $data = json_encode($lista);
}
$data = trim($data);
if (strlen($data) > 0) {
    $data = "{\"detalle\":" . $data . "}";
}
echo $data;
?>
