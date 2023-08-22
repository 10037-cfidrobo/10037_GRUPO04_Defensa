<?php
include 'Provincia.php';

class Pais {
    private $Nombre;
    private $PlatoTipico = array();
    private $Provincias = array();
    private $Moneda;
    private $Bandera;

    public function setNombre($nombre) {
        $this->Nombre = $nombre;
    }
    
    public function setPlatoTipico($platoTipico) {
        $this->PlatoTipico = $platoTipico;
    }

    public function setMoneda($moneda) {
        $this->Moneda = $moneda;
    }

    public function setBandera($bandera) {
        $this->Bandera = $bandera;
    }

    public function getMoneda() {
        return $this->Moneda;
    }

    public function getPlatoTipico() {
        return $this->PlatoTipico;
    }

    public function agregarProvincia(Provincia $provincia) {
        $this->Provincias[] = $provincia;
    }

    public function getProvincias() {
        return $this->Provincias;
    }

    public function getProvinciasNames() {
        $provinciasNames = array();
        foreach ($this->Provincias as $provincia) {
            $provinciasNames[] = $provincia->getNombre();
        }
        return $provinciasNames;
    }

    public function getProvinciasCiudades() {
        $provinciasCiudades = array();
        foreach ($this->Provincias as $provincia) {
            $ciudadesNames = array();
            foreach ($provincia->getCiudades() as $ciudad) {
                $ciudadesNames[] = $ciudad->getNombre();
            }
            $provinciasCiudades[] = implode(", ", $ciudadesNames);
        }
        return $provinciasCiudades;
    }

    public function agregarCiudades($datosCiudades) {
        foreach ($datosCiudades as $nombreProvincia => $ciudades) {
            $provincia = new Provincia();
            $provincia->setNombre($nombreProvincia);

            foreach ($ciudades["Ciudades"] as $nombreCiudad) {
                $ciudad = new Ciudad();
                $ciudad->setNombre($nombreCiudad);
                $provincia->agregarCiudad($ciudad);
            }

            $this->agregarProvincia($provincia);
        }
    }
   
    public static function obtenerPaises() {
        $egipto = new Pais();
        $angola = new Pais();
        $nigeria = new Pais();

        $egipto->setNombre('Egipto');
        $angola->setNombre('Angola');
        $nigeria->setNombre('Nigeria');

        $egipto->setMoneda('Libra egipcia');
        $angola->setMoneda('Kwanza angoleño');
        $nigeria->setMoneda('Naira');
        

        $CiudadEgipto = array(
            'EL CAIRO' => ["Damieta", "Fayun", "Matru", "Puerto Said"],
            'LUXOR' => ["Quena", "Behera", "Suhag"],
            'GUIZA' => ["Mar rojo", "Asiut", "Dacalia"]
        );


        $CiudadAngola = array(
            'LUANDA' => ["Luanda", "Viana", "Cazenga"],
            'HUÍLA' => ["Lubango", "Humpata", "Chibia"],
            'BENGO' => ["Caxito", "Dande", "Ambriz"],
        );
        


        $CiudadNigeria = array(
            'LAGOS' => ["Lagos Island", "Ikeja", "Badagry"],
            'KANO' => ["Kano Municipal", "Dala", "Fagge"],
            'RIVERS' => ["Port Harcourt", "Obio-Akpor", "Eleme"],
        );
        


        foreach ($CiudadEgipto as $nombreProvincia => $ciudades) {
            $provincia = new Provincia();
            $provincia->setNombre($nombreProvincia);

            foreach ($ciudades as $nombreCiudad) {
                $ciudad = new Ciudad();
                $ciudad->setNombre($nombreCiudad);
                $provincia->agregarCiudad($ciudad);
            }

            $egipto->agregarProvincia($provincia);
        }


        foreach ($CiudadAngola as $nombreProvincia => $ciudades) {
            $provincia = new Provincia();
            $provincia->setNombre($nombreProvincia);

            foreach ($ciudades as $nombreCiudad) {
                $ciudad = new Ciudad();
                $ciudad->setNombre($nombreCiudad);
                $provincia->agregarCiudad($ciudad);
            }

            $angola->agregarProvincia($provincia);
        }


        foreach ($CiudadNigeria as $nombreProvincia => $ciudades) {
            $provincia = new Provincia();
            $provincia->setNombre($nombreProvincia);

            foreach ($ciudades as $nombreCiudad) {
                $ciudad = new Ciudad();
                $ciudad->setNombre($nombreCiudad);
                $provincia->agregarCiudad($ciudad);
            }

            $nigeria->agregarProvincia($provincia);
        }

        $paisesCAF = [
            'Egipto' => $egipto,
            'Angola' => $angola,
            'Nigeria' => $nigeria,
            
        ];

        return $paisesCAF;
    }
}


?>
