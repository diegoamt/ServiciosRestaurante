<?php

require_once '../dao/RestauranteDAO.php';

$idpedido = $_REQUEST["idped"];
$idprodcuto = $_REQUEST["idpr"];
$cantidad = $_REQUEST["cant"];


$dao = new RestauranteDAO();
$stm = $dao->InsertarDetallePedido($idpedido, $idprodcuto, $cantidad);
echo $stm;
