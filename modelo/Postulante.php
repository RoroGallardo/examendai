<?php

/**
 * Description of Postulante
 *
 * @author Rodrigo Gallardo
 */
class Postulante {

    private $rut;
    private $nombre;
    private $apellidoPaterno;
    private $apellidoMaterno;
    private $fechaNacimiesnto;
    private $sexo;
    private $estadoCivil;
    private $hijos;
    private $telefono;
    private $email;
    private $direccion;
    private $comuna;
    private $educacion;
    private $renta;
    private $sueldoLiquido;
    private $enfermedadCronica;
    
    function __construct() {
        
    }
    function getRut() {
        return $this->rut;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getApellidoPaterno() {
        return $this->apellidoPaterno;
    }

    function getApellidoMaterno() {
        return $this->apellidoMaterno;
    }

    function getFechaNacimiesnto() {
        return $this->fechaNacimiesnto;
    }

    function getSexo() {
        return $this->sexo;
    }

    function getEstadoCivil() {
        return $this->estadoCivil;
    }

    function getHijos() {
        return $this->hijos;
    }

    function getTelefono() {
        return $this->telefono;
    }

    function getEmail() {
        return $this->email;
    }

    function getDireccion() {
        return $this->direccion;
    }

    function getComuna() {
        return $this->comuna;
    }

    function getEducacion() {
        return $this->educacion;
    }

    function getRenta() {
        return $this->renta;
    }

    function getSueldoLiquido() {
        return $this->sueldoLiquido;
    }

    function getEnfermedadCronica() {
        return $this->enfermedadCronica;
    }

    function setRut($rut) {
        $this->rut = $rut;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setApellidoPaterno($apellidoPaterno) {
        $this->apellidoPaterno = $apellidoPaterno;
    }

    function setApellidoMaterno($apellidoMaterno) {
        $this->apellidoMaterno = $apellidoMaterno;
    }

    function setFechaNacimiesnto($fechaNacimiesnto) {
        $this->fechaNacimiesnto = $fechaNacimiesnto;
    }

    function setSexo($sexo) {
        $this->sexo = $sexo;
    }

    function setEstadoCivil($estadoCivil) {
        $this->estadoCivil = $estadoCivil;
    }

    function setHijos($hijos) {
        $this->hijos = $hijos;
    }

    function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setDireccion($direccion) {
        $this->direccion = $direccion;
    }

    function setComuna($comuna) {
        $this->comuna = $comuna;
    }

    function setEducacion($educacion) {
        $this->educacion = $educacion;
    }

    function setRenta($renta) {
        $this->renta = $renta;
    }

    function setSueldoLiquido($sueldoLiquido) {
        $this->sueldoLiquido = $sueldoLiquido;
    }

    function setEnfermedadCronica($enfermedadCronica) {
        $this->enfermedadCronica = $enfermedadCronica;
    }


    
}
