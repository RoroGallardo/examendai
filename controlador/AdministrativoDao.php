<?php

/**
 * Description of AdministrativoDao
 *
 * @author Rodrigo Gallardo
 */
include '../sql/Conexion.php';
class AdministrativoDao {
     public static function agregarAdministrativo($dto) {
        try {
             $pdo = new Conexion();
            $stmt = $pdo->prepare("INSERT INTO administrativo (rut, nombre, appaterno,apmaterno,"
                    . "pass)" .
                    " values (?,?,?,?,?)");
           
            $stmt->bindParam(1, $rut);
            $stmt->bindParam(2, $nombre);
            $stmt->bindParam(3, $appaterno);
            $stmt->bindParam(4, $apmaterno);
            $stmt->bindParam(5, $contraseña);
            
          
            $rut = $dto->getRut();
            $nombre = $dto->getNombre();
            $appaterno = $dto->getApMaterno();
            $apmaterno = $dto->getApPaterno();
            $contraseña = $dto->getContraseña();
            
            $stmt->execute();
            $pdo = null;
            return true;
            
            
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
            return false;
        }
            
    }
    
    public static function buscarPorRut($rut) {
        $dto=null;
        try {
            $pdo = new Conexion();            
            $stmt = $pdo->prepare("select * from administrativo where rut=? ");
            $stmt->bindParam(1, $rut);           
            $stmt->execute();            
            $resultado=$stmt->fetchAll();  
         
            foreach ($resultado as $value) {
                $dto = new Administrativo();
                $dto->setRut($value["rut"]);
                $dto->setNombre($value["nombre"]);
            }
            $pdo = null;            
        } catch (PDOException $exc) {
            echo "Error al buscar por patente: " . $exc->getMessage();
        }
        return $dto;        
    }
    
   
    
    public static function existeAdministrativo($rut) {        
        try {
            $pdo = new Conexion();            
            $stmt = $pdo->prepare(" SELECT * FROM administrativo WHERE rut=? ");
            $stmt->bindParam(1, $rut);           
            $stmt->execute();                        
            $resultado=$stmt->fetchAll();                        
            foreach ($resultado as $value) {
                return TRUE;
            }                                  
        } catch (PDOException $exc) {
            echo "Error al verficar existencia: " . $exc->getMessage();
            return FALSE;
        }
        return FALSE;        
    }
    
    public static function eliminarAdministrativo($rut){
        try {
            $pdo = new Conexion();
            $stmt = $pdo->prepare("delete from administrativo where rut = ?");
            $stmt->bindParam(1, $rut);
            $stmt->execute();
            $pdo = null;
            return true;
                
        } catch (Exception $ex) {
                   echo "<br>ERROR AL ELIMINAR: ".$ex->getMessage()."<br>";
                   return false;
        }
    }
    
    
    public static function modificarAdministrativo($dto) {        
        try {
            $pdo = new Conexion();            
            $stmt = $pdo->prepare("UPDATE admidnistrativo SET nombre=? appaterno=?,"
                    . "apmaterno=?, WHERE rut=?");
            $stmt->bindParam(1, $nombre);           
            $stmt->bindParam(2, $appaterno);           
            $stmt->bindParam(3, $apmaterno);           
            $stmt->bindParam(4, $rut);           
            $nombre= $dto->getNombre();
            $appaterno=$dto->getApPaterno();
            $apmaterno=$dto->getApMaterno();
            $rut=$dto->getRut();
            $stmt->execute();
            if($stmt->rowCount()>=1)
                return TRUE;
            else
                return FALSE;
            $pdo = null;                                                   
        } catch (PDOException $exc) {
            echo "Error al MODIFICAR: " . $exc->getMessage();
            return FALSE;
        }
        return FALSE;        
    }
    public static function modificarContraseña($rut,$nuevaContraseña) {        
        try {
            $pdo = new Conexion();            
            $stmt = $pdo->prepare("UPDATE admidnistrativo SET pass=?"
                    . " WHERE rut=?");
            $stmt->bindParam(1, $rut);           
            $stmt->bindParam(2, $nuevaContraseña);           
            
            $rut=$dto->getRut();
            $stmt->execute();
            if($stmt->rowCount()>=1)
                return TRUE;
            else
                return FALSE;
            $pdo = null;                                                   
        } catch (PDOException $exc) {
            echo "Error al MODIFICAR: " . $exc->getMessage();
            return FALSE;
        }
        return FALSE;        
    }
      public static function listar() {
             $array = new ArrayObject();
        try {
            $pdo = new Conexion();
            $stmt = $pdo->prepare("select *from administrativo  order by rut asc");
            $stmt->execute();
            $resultado=$stmt->fetchAll();
            foreach ($resultado as $value) {
                $array->append($value);
            }  
        } catch (PDOException $exc) {
            echo "Error al listar: " . $exc->getMessage();
            return false;
        }
        return $array;
        }
        
          public static function nombrePorRut($rut) {
        $nombre="";
        try {
            $pdo = new Conexion();            
            $stmt = $pdo->prepare("select nombre from administrativo where rut=? ");
            $stmt->bindParam(1, $rut);           
            $stmt->execute();            
            $resultado=$stmt->fetchAll();  
         
            foreach ($resultado as $value) {
                $nombre = $value["nombre"];
            }
            $pdo = null;            
        } catch (PDOException $exc) {
            echo "Error al buscar por patente: " . $exc->getMessage();
        }
        return $nombre;        
    }
    
     public static function validarUsuario($user, $pass) {
        $validado = false;
        
        try {
        $pdo = new Conexion();
        $stmt = $pdo -> prepare("select * from administrativo where rut = ? and pass = ? ");
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
