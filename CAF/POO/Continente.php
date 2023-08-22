<?php
include 'COMEBOL.php';
include 'OFC.php';
include 'UEFA.php';
include 'CONCACAF.php';
include 'CAF.php';
include 'AFC.php';
 
abstract class Continente {
    protected $Nombre;
    protected $MaxPaises;

    public function Imprimir() {
        // Implementar la impresión del continente si es necesario
    }
}
