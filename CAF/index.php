<?php
include 'POO/Pais.php';

$paisesCAF = Pais::obtenerPaises();

if (isset($_GET["pais"])) {
    $paisSeleccionado = $_GET["pais"];

    if (isset($paisesCAF[$paisSeleccionado])) {
        $pais = $paisesCAF[$paisSeleccionado];
        // Obtener información del país y mostrarla en la tabla
        // ...
    } else {
        echo "El país seleccionado no existe en la lista.";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>África (CAF)</title>
    <link href="css/stylesLanding.css" rel="stylesheet" />
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }

        th,
        td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #33B2FF;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:nth-child(odd) {
            background-color: #e0e0e0;
        }

        a {
            color: #007bff;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <h1>Continente: África (CAF)</h1>
    <h2>Organización: CAF</h2>

    <table border="1">
        <tr>
            <th>País</th>
            <th>Moneda</th>
            <th>Código Postal</th>
            <th>Provincia</th>
            <th>Ciudades</th>
        </tr>
        <?php if (isset($pais)): ?>
            <?php $provincias = $pais->getProvincias(); ?>
            <?php foreach ($provincias as $index => $provincia): ?>
                <tr>
                    <?php if ($index === 0): ?>
                        <td rowspan="<?php echo count($provincias); ?>"><?php // echo $paisSeleccionado; ?>
                        <a href="InterfazUI/index.html"><?php echo $paisSeleccionado; ?></a>
                        </td>
                        <td rowspan="<?php echo count($provincias); ?>"><?php echo $pais->getMoneda(); ?></td>
                    <?php endif; ?>
                    <td>
                        <?php
                        // Coloca los códigos postales manualmente aquí
                        $codigosPostales = [
                            'EL CAIRO' => '3753450',
                            'LUXOR' => '1351201',
                            'GUIZA' => '3387722',

                            'LUANDA' => ' 1642',
                            'HUÍLA' => '1837',
                            'BENGO' => '1967',

                            'LAGOS' => '100211',
                            'KANO' => '700211',
                            'RIVERS' => '500241',
                        ];
                        echo $codigosPostales[$provincia->getNombre()];
                        ?>
                    </td>
                    <td>
                        <?php echo $provincia->getNombre(); ?>
                    </td>
                    <td>
                        <?php
                        $ciudades = array();
                        foreach ($provincia->getCiudades() as $ciudad) {
                            $ciudades[] = $ciudad->getNombre();
                        }
                        echo implode(', ', $ciudades);
                        ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php endif; ?>
    </table>
    <br>
    <a href="../pages/FIFA/index.html"> Inicio</a>
</body>

</html>