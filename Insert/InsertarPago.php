<?php

require_once '../dao/RestauranteDAO.php';

/* @var $_REQUEST type */
$idpedido = $_REQUEST["IdPedido"];
$monto = $_REQUEST["MontoP"];



$dao = new RestauranteDAO();
$rec = $dao->InsertarPago($idpedido, $monto);
if ($rec) {
    $rec["estado"] = 1; // Existe
} else {
    $rec["estado"] = 0; // No existe
}
$data = json_encode($rec);

// Retorno
echo $data;
