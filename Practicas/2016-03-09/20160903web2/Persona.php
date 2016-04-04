<?php

/**
 * Description of Persona
 *
 * @author jmacb
 */
class Persona {

    private $id;
    private $nombres;
    private $apellidos;
    private $ciudad;
    private $telefono;

    function getId() {
        return $this->id;
    }

    function getNombres() {
        return $this->nombres;
    }

    function getApellidos() {
        return $this->apellidos;
    }

    function getCiudad() {
        return $this->ciudad;
    }

    function getTelefono() {
        return $this->telefono;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNombres($nombres) {
        $this->nombres = $nombres;
    }

    function setApellidos($apellidos) {
        $this->apellidos = $apellidos;
    }

    function setCiudad($ciudad) {
        $this->ciudad = $ciudad;
    }

    function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    function __construct($id, $nombres, $apellidos, $ciudad, $telefono) {
        $this->id = $id;
        $this->nombres = $nombres;
        $this->apellidos = $apellidos;
        $this->ciudad = $ciudad;
        $this->telefono = $telefono;
    }

}
