<?php

/**
 * Description of PostulanteDao
 *
 * @author Rodrigo Gallardo
 */
include_once '../modelo/Postulante.php';
include_once '../sql/Conexion.php';
class PostulanteDao {

    
     public static function agregarPostulante($dto) {
        try {
             $pdo = new Conexion();
            $stmt = $pdo->prepare("INSERT INTO postulante (rut, nombre, apellidopaterno,apellidomaterno,"
                    . "fechanacimiento,sexo,estadocivil,hijos,telefono,email,direccion, comuna,educacion,"
                    . "renta,sueldoliquido,enfemedadcronica)" .
                    " values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
           
            $stmt->bindParam(1, $rut);
            $stmt->bindParam(2, $nombre);
            $stmt->bindParam(3, $appaterno);
            $stmt->bindParam(4, $apmaterno);
            $stmt->bindParam(5, $fecha);
            $stmt->bindParam(6, $sexo);
            $stmt->bindParam(7, $estadocivil);
            $stmt->bindParam(8, $hijos);
            $stmt->bindParam(9, $telefono);
            $stmt->bindParam(10, $email);
            $stmt->bindParam(11, $direccion);
            $stmt->bindParam(12, $comuna);
            $stmt->bindParam(13, $educacion);
            $stmt->bindParam(14, $renta);
            $stmt->bindParam(15, $sueldoLiquido);
            $stmt->bindParam(16, $enfermedad);
          
            $rut = $dto->getRut();
            $nombre = $dto->getNombre();
            $appaterno = $dto->getApellidoMaterno();
            $apmaterno = $dto->getApellidoPaterno();
            $fecha = $dto->getFechaNacimiesnto();
            $sexo = $dto->getSexo();
            $estadocivil = $dto->getEstadoCivil();
            $hijos = $dto->getHijos();
            $telefono = $dto->getTelefono();
            $email = $dto->getEmail();
            $direccion = $dto->getDireccion();
            $comuna = $dto->getComuna();
            $educacion = $dto->getEducacion();
            $renta = $dto->getRenta();
            $sueldoLiquido = $dto->getSueldoLiquido();
            $enfermedad = $dto->getEnfermedadCronica();
            
            $stmt->execute();
            $pdo = null;
            return true;
            
            
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
             echo "Error al agregar: " . $exc->getMessage();
            
            return false;
        }
            
    }
    
    public static function buscarPorRut($rut) {
        $dto=null;
        try {
            $pdo = new Conexion();            
            $stmt = $pdo->prepare("select * from postulante where rut=? ");
            $stmt->bindParam(1, $rut);           
            $stmt->execute();            
            $resultado=$stmt->fetchAll();  
         
            foreach ($resultado as $value) {
                $dto = new Postulante();
                $dto->setRut($value["rut"]);
                $dto->setNombre($value["nombre"]);
                $dto->setFechaNacimiesnto($value["fechanacimiento"]);
                $dto->setTelefono($value["telefono"]);
                $dto->setDireccion($value["direccion"]);
                $dto->setComuna($value["comuna"]);
                $dto->setApellidoMaterno($value["apellidomaterno"]);
                $dto->setApellidoPaterno($value["apellidopaterno"]);
                $dto->setSexo($value["sexo"]);
                $dto->setEmail($value["email"]);
                $dto->setEducacion($value["educacion"]);
                $dto->setRenta($value["renta"]);
                $dto->setSueldoLiquido($value["sueldoliquido"]);
                $dto->setEnfermedadCronica($value["enfemedadcronica"]);
                $dto->setHijos($value["hijos"]);
            }
            $pdo = null;            
        } catch (PDOException $exc) {
            echo "Error al buscar por rut: " . $exc->getMessage();
        }
        return $dto;        
    }
    
   
    
    public static function existePostulante($rut) {        
        try {
            $pdo = new Conexion();            
            $stmt = $pdo->prepare(" SELECT * FROM postulante WHERE rut=? ");
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
    
    public static function eliminarPostulante($rut){
        try {
            $pdo = new Conexion();
            $stmt = $pdo->prepare("delete from postulante where rut = ? ");
            $stmt->bindParam(1, $rut);
            $stmt->execute();
            $pdo = null;
            return true;
                
        } catch (Exception $ex) {
                   echo "<br>ERROR AL ELIMINAR: ".$exc->getMessage()."<br>";
        }
    }
    
    
    public static function modificarPostulante($dto) {        
        try {
            $pdo = new Conexion();            
            $stmt = $pdo->prepare("UPDATE postulante SET nombre=?, apellidopaterno =?,apellidomaterno=?,"
                    . "fechanacimiento=?,sexo=?,estadocivil=?,hijos=?,telefono=?,email=?,direccion=?, comuna=?,educacion=?,"
                    . "renta=?,sueldoliquido=?,enfemedadcronica=?"
                    . " WHERE rut=?");
           
            $stmt->bindParam(1, $nombre);
            $stmt->bindParam(2, $appaterno);
            $stmt->bindParam(3, $apmaterno);
            $stmt->bindParam(4, $fecha);
            $stmt->bindParam(5, $sexo);
            $stmt->bindParam(6, $estadocivil);
            $stmt->bindParam(7, $hijos);
            $stmt->bindParam(8, $telefono);
            $stmt->bindParam(9, $email);
            $stmt->bindParam(10, $direccion);
            $stmt->bindParam(11, $comuna);
            $stmt->bindParam(12, $educacion);
            $stmt->bindParam(13, $renta);
            $stmt->bindParam(14, $sueldoLiquido);
            $stmt->bindParam(15, $enfermedad);
            $stmt->bindParam(16, $rut);
            
           
            $nombre = $dto->getNombre();
            $appaterno = $dto->getApellidoMaterno();
            $apmaterno = $dto->getApellidoPaterno();
            $fecha = $dto->getFechaNacimiesnto();
            $sexo = $dto->getSexo();
            $estadocivil = $dto->getEstadoCivil();
            $hijos = $dto->getHijos();
            $telefono = $dto->getTelefono();
            $email = $dto->getEmail();
            $direccion = $dto->getDireccion();
            $comuna = $dto->getComuna();
            $educacion = $dto->getEducacion();
            $renta = $dto->getRenta();
            $sueldoLiquido = $dto->getSueldoLiquido();
            $enfermedad = $dto->getEnfermedadCronica();
            $rut = $dto->getRut();
             
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
            $stmt = $pdo->prepare("select *, TIMESTAMPDIFF(YEAR, fechanacimiento, CURDATE()) AS edad from postulante  order by rut asc");
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
    
}

    
    

