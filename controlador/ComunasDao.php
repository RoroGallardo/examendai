<?php

/**
 * Description of Localidades
 *
 * @author Rodrigo Gallardo
 */
include_once '../sql/Conexion.php';
class ComunasDao {

     
     public static function cargarNombresComunas() {
             $array = new ArrayObject();
        try {
            $pdo = new Conexion();
            $stmt = $pdo->prepare("select distinct comuna_nombre as Comuna from comuna");
            $stmt->execute();
            $resultado=$stmt->fetchAll();
            foreach ($resultado as $value) {
                $array->append($value["Comuna"]);
            }  
        } catch (PDOException $exc) {
            echo "Error al agregar: " . $exc->getMessage();
            return false;
        }
        return $array;
        }
    

    

}


