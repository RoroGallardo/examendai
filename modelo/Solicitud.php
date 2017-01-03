<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Solicitud
 *
 * @author Rodrigo Gallardo
 */
class Solicitud {
    private  $id;
    private $rutPostulante;
    private $estado;
    
    function __construct() {
        
    }
    
    function getId() {
        return $this->id;
    }

    function getRutPostulante() {
        return $this->rutPostulante;
    }

    function getEstado() {
        return $this->estado;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setRutPostulante($rutPostulante) {
        $this->rutPostulante = $rutPostulante;
    }

    function setEstado($estado) {
        $this->estado = $estado;
    }



       
}
