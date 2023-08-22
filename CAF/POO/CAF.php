<?php
include_once("Organizacion.php");
include __DIR__ . 'Pais.php';

class CAF extends Pais implements Organizacion {
    private $campeon;
    private $subcampeon;


    public function Afiliacion() {
        // Implementar la lógica para afiliar países a CAF si es necesario
    }
}
$PaisCAF = array(
    'CAF' => array(
        'AFRICA' => ["EGIPTO", "NIGERIA", "ISRAEL"]
    )
);

?>
