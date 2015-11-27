<?php

require_once '../ds/MyPDO.php';

class RestauranteDAO extends MyPDO {

    public function logearse($user, $pass) {
        $rec = null;
        try {
            $query = "call Logeo(?,?)";
            $stm = $this->pdo->prepare($query);
            $stm->bindParam(1, $user);
            $stm->bindParam(2, $pass);
            $stm->execute();
            $rec = $stm->fetch(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            throw $e;
        }
        return $rec;
    }

    public function ListaProductos($idcategoria) {
        $rec = null;
        try {
            $query = "call ListaProductos(?)";
            $stm = $this->pdo->prepare($query);
            $stm->bindParam(1, $idcategoria);
            $stm->execute();
            $rec = $stm->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            throw $e;
        }
        return $rec;
    }

    public function ListaTipoPlato() {
        $rec = null;
        try {
            $query = "call ListaTipoPlato()";
            $stm = $this->pdo->prepare($query);
            $stm->execute();
            $rec = $stm->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            throw $e;
        }
        return $rec;
    }

    public function ListaMesa() {
        $rec = null;
        try {
            $query = "call ListaMesa()";
            $stm = $this->pdo->prepare($query);
            $stm->execute();
            $rec = $stm->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            throw $e;
        }
        return $rec;
    }

    public function InsertarMesero() {
        $rec = null;
        try {
            $query = "call IngresarEmpleado(?,?,?,?,?,?,?,?)";
            $stm = $this->pdo->prepare($query);
            $stm->bindParam(1, $cod);
            $stm->bindParam(2, $dni);
            $stm->bindParam(3, $nom);
            $stm->bindParam(4, $ape);
            $stm->bindParam(5, $telef);
            $stm->bindParam(6, $dire);
            $stm->bindParam(7, $usu);
            $stm->bindParam(8, $clave);
            $stm->execute();
            $rec = $stm->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            throw $e;
        }
        return $rec;
    }

    public function InsertarMesas($codigo, $codigo1) {
        $rec = null;
        try {
            $query = "call IngresarMesas(?,?)";
            $stm = $this->pdo->prepare($query);
            $stm->bindParam(1, $codigo);
            $stm->bindParam(2, $codigo1);
            $stm->execute();
            $rec = $stm->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            throw $e;
        }
        return $rec;
    }

    public function InsertarDetallePedido($idpedido, $idprodcuto, $cantidad) {
        $stm = null;
        try {
            $query = "call InsertarDetallePedido(?,?,?)";
            $stm = $this->pdo->prepare($query);
            $stm->bindParam(1, $idpedido);
            $stm->bindParam(2, $idprodcuto);
            $stm->bindParam(3, $cantidad);
            $stm->execute();
        } catch (Exception $e) {
            throw $e;
        }
        return $stm;
    }

    public function InsertarCategoriaPlato() {
        $rec = null;
        try {
            $query = "call IngresarCategoriaPlato(?,?)";
            $stm = $this->pdo->prepare($query);
            $stm->bindParam(1, $tipo);
            $stm->bindParam(2, $desc);
            $stm->execute();
            $rec = $stm->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            throw $e;
        }
        return $rec;
    }

    public function InsertarPlato() {
        $rec = null;
        try {
            $query = "call IngresarCategoriaPlato(?,?,?,?)";
            $stm = $this->pdo->prepare($query);
            $stm->bindParam(1, $cod);
            $stm->bindParam(2, $nom);
            $stm->bindParam(3, $prec);
            $stm->bindParam(4, $tipo);
            $stm->execute();
            $rec = $stm->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            throw $e;
        }
        return $rec;
    }

    public function InsertarPedido($idmes, $idempl, $total) {
        $rec = null;
        try {
            $query = "call InsertPedido(?,?,?)";
            $stm = $this->pdo->prepare($query);
            $stm->bindParam(1, $idempl);
            $stm->bindParam(2, $idmes);
            $stm->bindParam(3, $total);
            $stm->execute();
            $rec = $stm->fetch(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            throw $e;
        }
        return $rec;
    }

    public function ListPedido() {
        $rec = null;
        try {
            $query = "call ListPedido()";
            $stm = $this->pdo->prepare($query);
            $stm->execute();
            $rec = $stm->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            throw $e;
        }
        return $rec;
    }

    public function DetallePedido($idped) {
        $rec = null;
        try {
            $query = "call ListaDetallePedido(?)";
            $stm = $this->pdo->prepare($query);
            $stm->bindParam(1, $idped);
            $stm->execute();
            $rec = $stm->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            throw $e;
        }
        return $rec;
    }

    public function InsertarPago($idpedido, $monto) {
        $rec = null;
        try {
            $query = "call InsertarPago(?,?)";
            $stm = $this->pdo->prepare($query);
            $stm->bindParam(1, $idpedido);
            $stm->bindParam(2, $monto);
            $stm->execute();
            $rec = $stm->fetch(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            throw $e;
        }
        return $rec;
    }

}

?>
