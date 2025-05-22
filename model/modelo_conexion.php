<?php
class conexionBD {
    public static function conexionPDO() {
        $dsn = 'mysql:dbname=empresa;host=mysql';
        $usuario = 'empresa';
        $contrasena = 'empresa';

        try {
            $pdo = new PDO($dsn, $usuario, $contrasena);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->exec("SET NAMES utf8");
            return $pdo;
        } catch (PDOException $e) {
            echo json_encode([
                "success" => false,
                "message" => "Conexión fallida: " . $e->getMessage()
            ]);
            exit;
        }
    }

    public static function cerrar($pdo) {
        $pdo = null;
    }
}
?>
