<?php

include_once './PostulanteDao.php';
include_once './SolicitudDao.php';
include_once '../modelo/Postulante.php';
include './AdministrativoDao.php';

$nombreUsuario = AdministrativoDao::nombrePorRut($dt);

echo $nombreUsuario;