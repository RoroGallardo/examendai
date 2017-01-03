<?php


include '../controlador/PostulanteDao.php';
include_once '../controlador/SolicitudDao.php';

if(PostulanteDao::existePostulante($_POST['txtRutElim'])){
    if(PostulanteDao::eliminarPostulante($_POST['txtRutElim']) && SolicitudDao::eliminarSolicitud($_POST["txtRutElim"])){
        
    echo "<script type=\"text/javascript\""
    . ">alert(\"Registro Eliminado\");</script>";  
    
     echo'<script>window.location="listarSolicitudes.php";</script>';   
    
    }
    
       

}else{
    echo "<script type=\"text/javascript\""
    . ">alert(\"PROBLEMAS AL REALIZAR LA ACCION : ELIMINAR\");</script>";  
         echo'<script>window.location="listarSolicitudes.php";</script>';   

} 