<?php

require_once '../dao/RestauranteDAO.php';

// Parámetros
/* @var $_REQUEST type */
$codigo = $_REQUEST["codigo"];
$codigo1 = $_REQUEST["nomb"];
$codigo2 = $_REQUEST["preci"];
$codigo3 = $_REQUEST["tipo"];

// Proceso
$dao = new RestauranteDAO();
$rec = $dao->InsertarPlato($codigo, $codigo1, $codigo2, $codigo3);
if ($rec) {
    $rec["estado"] = 1; // Existe
} else {
    $rec["estado"] = 0; // No existe
}
$data = json_encode($rec);

// Retorno
echo $data;
?>