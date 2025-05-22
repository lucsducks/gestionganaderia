<?php
require_once 'modelo_conexion.php';

class Modelo_listar extends conexionBD {

    public function listar_grupo() {
        try {
            $c = conexionBD::conexionPDO();
            $sql = "CALL LISTAR_GRUPO_COMPRA()";
            $query = $c->prepare($sql);
            $query->execute();

            $resultado = $query->fetchAll(PDO::FETCH_ASSOC);
            conexionBD::cerrar($c);

            return ["data" => $resultado];
        } catch (PDOException $e) {
            return ["error" => true, "message" => $e->getMessage()];
        }
    }

    public function consultar_grupo_filtrado($id) {
        try {
            $c = conexionBD::conexionPDO();
            $sql = "CALL LISTA_PAGO_FILTRADO_COMPRA(?)";
            $query = $c->prepare($sql);
            $query->bindParam(1, $id);
            $query->execute();

            $resultado = $query->fetchAll(PDO::FETCH_ASSOC);
            conexionBD::cerrar($c);

            return ["data" => $resultado];
        } catch (PDOException $e) {
            return ["error" => true, "message" => $e->getMessage()];
        }
    }

}
?>
