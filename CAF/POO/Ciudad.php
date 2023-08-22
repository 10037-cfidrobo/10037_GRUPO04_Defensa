<?php
class Ciudad {
    private $Nombre;
    private $CodPostal;
    
    public function setNombre($nombre) {
        $this->Nombre = $nombre;
    }
    
    public function setCodPostal($codPostal) {
        $this->CodPostal = $codPostal;
    }

    public function getNombre() {
        return $this->Nombre;
    }

    public function getCodPostal() {
        return $this->CodPostal;
    }

    // Agrega más métodos según necesites
}
?>
