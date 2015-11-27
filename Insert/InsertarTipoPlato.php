<?php

require_once '../dao/RestauranteDAO.php';

// Parámetros
/* @var $_REQUEST type */
$codigo = $_REQUEST["tipo"];
$codigo1 = $_REQUEST["descr"];

// Proceso
$dao = new RestauranteDAO();
$rec = $dao->InsertarCategoriaPlato($codigo, $codigo1);
if ($rec) {
    $rec["estado"] = 1; // Existe
} else {
    $rec["estado"] = 0; // No existe
}
$data = json_encode($rec);

// Retorno
echo $data;
?>