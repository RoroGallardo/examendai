<?php

session_start();
	if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
	 
	} else {
            echo "<script type=\"text/javascript\""
            . ">alert(\"INICIE SESION PARA UTILIZAR EL SISTEMA DE RESERVAS.\");</script>";
             echo'<script>window.location="index.php";</script>';  
            
	exit;
	}
	$now = time();
	 
	if($now > $_SESSION['expire']) {
	session_destroy();
	 
	     echo "<script type=\"text/javascript\""
    . ">alert(\"Sesion expirada, porfavor, vuelva a iniciar una nueva sesion.\");</script>"; 
            echo'<script>window.location="index.php";</script>';  
	exit;
	}