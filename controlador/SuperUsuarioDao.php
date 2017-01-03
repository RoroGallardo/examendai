<?php



/**
 * Description of SuperUsuarioDao
 *
 * @author Rodrigo Gallardo
 */
include_once '../sql/Conexion.php';

class SuperUsuarioDao {
    
     public static function validarUsuario($user, $pass) {
        $validado = false;
        
        try {
        $pdo = new Conexion();
        $stmt = $pdo -> prepare("select * from superusuario where user = ? and pass = ? ");
        $stmt->bindParam(1,$user);
        $stmt->bindParam(2,$pass);
       
        $stmt->execute();
            $resultado = $stmt->fetchAll();
            foreach ($resultado as $value) {
                $validado =true;
            }
            
        } catch (Exception $exc) {
            echo $exc->getMessage();
        }
        return $validado;
        }
    
    
}
