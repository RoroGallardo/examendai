<?php

session_start();
include_once '../controlador/AdministrativoDao.php';

if(AdministrativoDao::validarUsuario($_POST["rut"], $_POST["pass"])){

            $_SESSION['nombre']=  AdministrativoDao::nombrePorRut($_POST["rut"]);
            $_SESSION['loggedin'] = true;
	    $_SESSION['username'] = $_POST["rut"];
	    $_SESSION['start'] = time();
	    $_SESSION['expire'] = $_SESSION['start'] + (20 * 60);
            echo "<script type=\"text/javascript\""
            . ">alert(\"Bienvenido ".$_SESSION['nombre']."\");</script>";  
        echo'<script>window.location="indexAdmin.php";</script>';   

}else{
     echo "<script type=\"text/javascript\""
            . ">alert(\"DATOS DE SESION INVALIDOS, REINGRESE\");</script>";
    
        echo'<script>window.location="index.php";</script>';   

}