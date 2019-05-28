<?php
require_once "../model/docentes.php";

$docente = new Docentes();
$data = $docente->Listado();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listado GPyDS</title>
    <style>
        body{
            font-family: Arial;
            font-size: 14px;
            padding: 0;
            margin: 0;
        }
        .header{
            text-align: center;
        }
        thead tr th{
			font-size: 0.8em;
			border: 1px solid #3f3f3f;
			background-color: #C2C2C2;
        }
        tbody tr td{
        	border: 1px solid #676767;
        }
    </style>

</head>
<body>
    <div class="contanier">
        <div class="header">
            <h3>SUPERINTENDENCIA NACIONAL DE EDUCACIÓN SUPERIOR UNIVERSITARIA</h3>
            <h3>FORMATO DE LICENCIAMIENTO C</h3>
            <h3>RELACIÓN DE DOCENTES</h3>
            <h2>Nombre de la Universidad:  UNIVERSIDAD NACIONAL DE JULIACA</h2>
        </div>
        <table>
            <thead>
                <tr>
                    <th rowspan="2">N°</th>
                    <th rowspan="2">DOCENTE (APELLIDO PATERNO)</th>
                    <th rowspan="2">DOCENTE (APELLIDO MATERNO)</th>
                    <th rowspan="2">DOCENTE (NOMBRES)</th>
                    <th rowspan="2">PAÍS (NACIONALIDAD)</th>
                    <th rowspan="2">N° DE DNI / CARNET DE EXTRANJERÍA</th>
                    <th rowspan="2">FECHA DE INGRESO COMO DOCENTE EN LA UNIVERSIDAD</th>
                    <th rowspan="2">¿ERA DOCENTE UNIVERSITARIO A LA ENTRADA EN VIGENCIA DE LA  LEY 30220, LU?</th>
                    <th rowspan="2">MAYOR GRADO ACADÉMICO DEL DOCENTE </th>
                    <th rowspan="2">MENCIÓN DEL MAYOR GRADO DOCENTE</th>
                    <th rowspan="2">UNIVERSIDAD QUE OTORGÓ EL MAYOR GRADO DOCENTE</th>
                    <th rowspan="2">PAÍS / UNIVERSIDAD QUE OTORGÓ EL MAYOR GRADO DEL DOCENTE</th>
                    <th colspan="3">NIVELES DE PROGRAMA DE ESTUDIO EN LOS QUE DA CLASES EL DOCENTE</th>
                    <th rowspan="2">CATEGORÍA DOCENTE</th>
                    <th rowspan="2">RÉGIMEN DE DEDICACIÓN</th>
                    <th colspan="3">NÚMERO DE HORAS SEMANALES FIJADOS POR LA UNIVERSIDAD</th>
                    <th rowspan="2">DOCENTE INVESTIGADOR</th>
                    <th rowspan="2">DOCENTE REGISTRADO EN DINA</th>
                    <th rowspan="2">PERIODO ACADÉMICO</th>
                    <th rowspan="2">OBSERVACIONES</th>
                </tr>
                <tr>
                    <th>PREGRADO</th>
                    <th>MAESTRIA</th>
                    <th>DOCTORADO</th>
                    <th>CLASES</th>
                    <th>OTRAS ACTIVIDADES</th>
                    <th>TOTAL HORAS SEMANALES</th>
                </tr>
            </thead>

            <tbody>
            <?php
            $i=1;
            while ($row = $data->fetch_assoc()) {
            ?>
                <tr>
                    <th><?php echo $i;?></th>
                    <td><?php echo $row['paterno']; ?></td>
                    <td><?php echo $row['materno']; ?></td>
                    <td><?php echo $row['nombres']; ?></td>
                    <td><?php echo $row['pais']; ?></td>
                    <td><?php echo $row['dni']; ?></td>
                    <td><?php echo $row['fecingresou']; ?></td>
                    <td><?php echo $row['ley']; ?></td>
                    <td><?php echo $row['gradoacademico']; ?></td>
                    <td><?php echo $row['mencion']; ?></td>
                    <td><?php echo $row['universidad']; ?></td>
                    <td><?php echo $row['paisuniversidad']; ?></td>
                    <td><?php echo $row['pregrado']; ?></td>
                    <td><?php echo $row['maestria']; ?></td>
                    <td><?php echo $row['doctorado']; ?></td>
                    <td><?php echo $row['catdocente']; ?></td>
                    <td><?php echo $row['regime']; ?></td>
                    <td><?php echo $row['clases']; ?></td>
                    <td><?php echo $row['otras']; ?></td>
                    <td><?php echo $row['total']; ?></td>
                    <td><?php echo $row['investigador']; ?></td>
                    <td><?php echo $row['dina']; ?></td>
                    <td><?php echo $row['peridodo']; ?></td>
                    <td><?php echo $row['obs']; ?></td>
                </tr>
            <?php 
                $i++;
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>