<?php

require_once '../dao/RestauranteDAO.php';

// Parámetros
/* @var $_REQUEST type */
$codigo = $_REQUEST["codigo"];
$codigo1 = $_REQUEST["dni"];
$codigo2 = $_REQUEST["nomb"];
$codigo3 = $_REQUEST["apell"];
$codigo4 = $_REQUEST["telef"];
$codigo5 = $_REQUEST["direc"];
$codigo6 = $_REQUEST["usu"];
$codigo7 = $_REQUEST["clav"];

// Proceso
$dao = new RestauranteDAO();
$rec = $dao->InsertarMesero($codigo, $codigo1, $codigo2, $codigo3, $codigo4, $codigo5, $codigo6, $codigo7);
if ($rec) {
    $rec["estado"] = 1; // Existe
} else {
    $rec["estado"] = 0; // No existe
}
$data = json_encode($rec);

// Retorno
echo $data;
?>