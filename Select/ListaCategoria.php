<?php

require_once '../dao/RestauranteDAO.php';



// Proceso
$dao = new RestauranteDAO();
$lista = $dao->ListaTipoPlato();
$data = "";
if ($lista) {
    $data = json_encode($lista);
}
$data = trim($data);
if (strlen($data) > 0) {
    $data = "{\"catego\":" . $data . "}";
}

// Retorno
echo $data;
?>
