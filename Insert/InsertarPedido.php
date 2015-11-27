<?php

require_once '../dao/RestauranteDAO.php';

$idmes = $_REQUEST["idme"];
$idempl = $_REQUEST["idEmpl"];
$total = $_REQUEST["total"];


$dao = new RestauranteDAO();
$rec = $dao->InsertarPedido($idmes, $idempl, $total);
if ($rec) {
    $rec["estado"] = 1; // Existe
} else {
    $rec["estado"] = 0; // No existe
}
$data = json_encode($rec);

// Retorno
echo $data;
?>