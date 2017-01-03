<?php


/**
 * Description of SolicitudDao
 *
 * @author Rodrigo Gallardo
 */


include_once '../sql/Conexion.php';
class SolicitudDao {

    public static function agregarSolicitud($rut) {
        try {
             $pdo = new Conexion();
            $stmt = $pdo->prepare("INSERT INTO solicitud (rutpostulante,estado,fecha) values (?,'pendiente',now())");
           
            $stmt->bindParam(1, $rut);
            
            $stmt->execute();
            $pdo = null;
            return true;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
            return false;
        }
            
    }
    
    
     public static function buscarEstado($rut) {
        $respuesta = "no existe solicitud"      ;
        try {
            $pdo = new Conexion();            
            $stmt = $pdo->prepare("select estado from solicitud join postulante on (solicitud.rutpostulante = postulante.rut) where postulante.rut=2; ");
            $stmt->bindParam(1, $rut);           
            $stmt->execute();            
            $resultado=$stmt->fetchAll();  
         
            foreach ($resultado as $value) {
                if($value["estado"]=="rechazado"){
                  $respuesta = "fue rechazada";
                }elseif ($value["estado"]=="aprobado") {
                    $respueste = "ha sido aprobada";
                }elseif ($value["estado"]=="pendiente") {
                    $respuesta="esta pendiente";
                }
                
            }
            $pdo = null;            
        } catch (PDOException $exc) {
            echo "Error al buscar por patente: " . $exc->getMessage();
        }
        return $respuesta;        
    }
    
    public static function listar() {
             $array = new ArrayObject();
        try {
            $pdo = new Conexion();
            $stmt = $pdo->prepare("select p.rut as rut, p.nombre as nombre , s.estado as estado from postulante p join solicitud s on (p.rut = s.rutpostulante)");
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
    
     
    public static function eliminarSolicitud($rut){
        try {
            $pdo = new Conexion();
            $stmt = $pdo->prepare("delete from solicitud where rut = ?");
            $stmt->bindParam(1, $rut);
            $stmt->execute();
            $pdo = null;
            return true;
                
        } catch (Exception $ex) {
                   echo "<br>ERROR AL ELIMINAR: ".$ex->getMessage()."<br>";
                   return false;
        }
    }
    
    public static function cambiarEstado($estado, $rut) {        
        try {
            $pdo = new Conexion();            
            $stmt = $pdo->prepare("UPDATE solicitud SET estado=? "
                    . " WHERE rutpostulante=?");
            $stmt->bindParam(1, $estado);           
                       
            $stmt->bindParam(2, $rut);           
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
    
       public static function buscarEntreFechas($desde, $hasta) {
        $array= new ArrayObject();
        try {
            $pdo = new Conexion();            
            $stmt = $pdo->prepare("select solicitud.*, postulante.* from solicitud join postulante on"
                    . " (solicitud.rutpostulante = postulante.rut) where fecha between ? and ?;");
            $stmt->bindParam(1, $desde);           
            $stmt->bindParam(2, $hasta);           
            $stmt->execute();            
            $resultado=$stmt->fetchAll();  
            foreach ($resultado as $value) {
                $array->append($value);
            }  
            $pdo = null;            
        } catch (PDOException $exc) {
            echo "Error al buscar por patente: " . $exc->getMessage();
        }
        return $array;        
    }
}
