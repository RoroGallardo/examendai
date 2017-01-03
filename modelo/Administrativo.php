<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Administrativo
 *
 * @author Rodrigo Gallardo
 */
class Administrativo {
    
    private $rut;
    private $nombre;
    private $apPaterno;
    private $apMaterno;
    private $contraseña;

    function __construct() {
        
    }

    function getRut() {
        return $this->rut;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getApPaterno() {
        return $this->apPaterno;
    }

    function getApMaterno() {
        return $this->apMaterno;
    }

    function getContraseña() {
        return $this->contraseña;
    }

    function setRut($rut) {
        $this->rut = $rut;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setApPaterno($apPaterno) {
        $this->apPaterno = $apPaterno;
    }

    function setApMaterno($apMaterno) {
        $this->apMaterno = $apMaterno;
    }

    function setContraseña($contraseña) {
        $this->contraseña = $contraseña;
    }

 

    
}
