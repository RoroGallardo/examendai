<?php

include_once '../controlador/PostulanteDao.php';
include_once '../modelo/Postulante.php';
include_once '../controlador/SolicitudDao.php';

$dto = new Postulante();


$dto->setRut($_POST["rut"]);
$dto->setNombre($_POST["txtNombre"]);
$dto->setApellidoMaterno($_POST["txtApMaterno"]);
$dto->setApellidoPaterno($_POST["txtApPaterno"]);
$dto->setDireccion($_POST["txtDireccion"]);
$dto->setComuna($_POST["cmbComu"]);
$dto->setFechaNacimiesnto($_POST["calFecha"]);
$dto->setEducacion($_POST["cmbEducacion"]);
$dto->setRenta($_POST["cmbRenta"]);
$dto->setEmail($_POST["txtEmail"]);
$dto->setTelefono($_POST["txtTele"]);
$dto->setEstadoCivil($_POST["cmbEstado"]);
$dto->setSueldoLiquido($_POST["txtSueldo"]);

if($_POST["optradio"]=="femenino"){
    $dto->setSexo("femenino");
}  else {
    $dto->setSexo("masculino");
}


if ($_POST["chkHijos"]=="no") {
    $dto->setHijos(0);
}else{
  $dto->setHijos($_POST["txtHijos"]);
}


if($_POST["chkEnfermedad"]=="si"){
}else{
    $dto->setEnfermedadCronica("no");
}



if(!PostulanteDao::existePostulante($_POST['rut'])){
   if(PostulanteDao::agregarPostulante($dto)){
       SolicitudDao::agregarSolicitud($_POST["rut"]);
    echo "<script type=\"text/javascript\""
    . ">alert(\"Solicitud ingresada al sistema\");</script>"; 
      echo'<script>window.location="listarSolicitudes.php";</script>';   
}else{
    echo "<script type=\"text/javascript\""
    . ">alert(\"Registro NO guardado\");</script>";  
   echo'<script>window.location="formularioPreAprovacion.php";</script>';   
} 
}  else {

   echo "<script type=\"text/javascript\""
    . ">alert(\"ESTE RUT YA CUENTA CON UNA SOLICITUD, PORFAVO VERIFICA SU ESTADO\");</script>"; 
  echo'<script>window.location="formularioPreAprovacion.php";</script>';   
    
}
