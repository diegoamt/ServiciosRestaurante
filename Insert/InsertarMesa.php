<?php

require_once '../dao/RestauranteDAO.php';

// Parámetros
/* @var $_REQUEST type */
$codigo = $_REQUEST["mesa"];
$codigo1 = $_REQUEST["descr"];

// Proceso
$dao = new RestauranteDAO();
$rec = $dao->InsertarMesas($codigo, $codigo1);
if ($rec) {
    $rec["estado"] = 1; // Existe
} else {
    $rec["estado"] = 0; // No existe
}
$data = json_encode($rec);

// Retorno
echo $data;
?>