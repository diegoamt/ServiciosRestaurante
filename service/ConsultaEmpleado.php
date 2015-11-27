<?php

require_once '../dao/RestauranteDAO.php';

// Parámetros
/* @var $_REQUEST type */
$codigo = $_REQUEST["usuario"];
$codigo1 = $_REQUEST["pass"];

// Proceso
$dao = new RestauranteDAO();
$rec = $dao->logearse($codigo, $codigo1);
if ($rec) {
    $rec["estado"] = 1; // Existe
} else {
    $rec["estado"] = 0; // No existe
}
$data = json_encode($rec);

// Retorno
echo $data;
?>