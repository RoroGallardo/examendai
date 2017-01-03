<?php

include_once './PostulanteDao.php';
include_once './SolicitudDao.php';
include_once '../modelo/Postulante.php';

$dt = new Postulante();

$res = SolicitudDao::buscarEntreFechas("01-06-2016", "01-08-2016");
foreach ($res as $value) {
    echo $value["rut"];
}