<?php

include '../controlador/AdministrativoDao.php';
include_once  '../modelo/Administrativo.php';
include '../controlador/SuperUsuarioDao.php';


if($_POST["txtPass"]!= $_POST["txtConfirm"]){
    
  echo "<script type=\"text/javascript\""
    . ">alert(\"LAS CONTRASENAS NO COINCIDEN\");</script>"; 
      echo'<script>window.location="registrarUsuario.php";</script>';  
      exit();
     
}
$dto = new Administrativo();
$dto->setRut($_POST["rut"]);
$dto->setNombre($_POST["txtNombre"]);
$dto->setApPaterno($_POST["txtApPaterno"]);
$dto->setApMaterno($_POST["txtApMaterno"]);
$dto->setContraseña($_POST["txtPass"]);

if(!SuperUsuarioDao::validarUsuario($_POST["txtAdmin"], $_POST["txtAdminPass"])){
      echo "<script type=\"text/javascript\""
    . ">alert(\"CREDENCIALES INCORRECTAS, CONTACTE AL ADMINISTRADOR DEL SISTEMA\");</script>"; 
      echo'<script>window.location="registrarUsuario.php";</script>';  
      exit();
    
}elseif(AdministrativoDao::agregarAdministrativo($dto)){
         echo "<script type=\"text/javascript\""
    . ">alert(\"ADMINISTRADOR REGISTRADO CORRECTAMENTE, AHORA PUEDE INGRESAR AL SISTEMA\");</script>"; 
      echo'<script>window.location="index.php";</script>'; 
}

    
    
    
    
    
    
    
    




