<?php

require_once '../dao/RestauranteDAO.php';

// Parámetros
$cuenta = $_REQUEST["codigoTipo"];

// Proceso
$dao = new RestauranteDAO();
$lista = $dao->ListaProductos($cuenta);
$data = "";
if ($lista) {
    $data = json_encode($lista);
}
$data = trim($data);
if (strlen($data) > 0) {
    $data = "{\"platos\":" . $data . "}";
}

// Retorno
echo $data;
?>
