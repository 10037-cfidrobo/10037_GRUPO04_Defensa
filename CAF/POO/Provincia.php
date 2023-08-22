<?php
include 'Ciudad.php';


class Provincia {
    private $Nombre;
    private $Ciudades = array();
    private $CodPostal;
    

    public function setNombre($nombre) {
        $this->Nombre = $nombre;
    }

    public function getNombre() {
        return $this->Nombre;
    }

    public function agregarCiudad(Ciudad $ciudad) {
        $this->Ciudades[] = $ciudad;
    }

    public function getCiudades() {
        return $this->Ciudades;
    }
    public function setCodPostal($codPostal) {
        $this->CodPostal = $codPostal;
    }

    public function getCodPostal() {
        return $this->CodPostal;
    }
}

?>
