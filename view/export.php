<?php  
//export.php 
require_once "../model/docentes.php";

$docente = new Docentes();
$data = $docente->Listado();

$output = '';

if(isset($_POST["export"]))
{
 
  $output .= '
   <table>
            <thead>
                <tr>
                  <th colspan="24"><h3>SUPERINTENDENCIA NACIONAL DE EDUCACIÓN SUPERIOR UNIVERSITARIA</h3></th>
                </tr>
                <tr>
                        <th colspan="24"><h3>FORMATO DE LICENCIAMIENTO C</h3>
                </tr>
                <tr>
                        <th colspan="24"><h3>RELACIÓN DE DOCENTES</h3></th>
                </tr>
                <tr>
                        <td>Nombre de la Universidad:  UNIVERSIDAD NACIONAL DE JULIACA</td>
                </tr>
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
  ';
  $i=1;
  while ($row = $data->fetch_assoc())
  {
   $output .= '
     <tr>
                    <th>'. $i.'</th>
                    <td>'. $row['paterno'] .'</td>
                    <td>'. $row['materno'] .'</td>
                    <td>'. $row['nombres'] .'</td>
                    <td>'. $row['pais'] .'</td>
                    <td>'. $row['dni'] .'</td>
                    <td>'. $row['fecingresou'] .'</td>
                    <td>'. $row['ley'] .'</td>
                    <td>'. $row['gradoacademico'] .'</td>
                    <td>'. $row['mencion'] .'</td>
                    <td>'. $row['universidad'] .'</td>
                    <td>'. $row['paisuniversidad'] .'</td>
                    <td>'. $row['pregrado'] .'</td>
                    <td>'. $row['maestria'] .'</td>
                    <td>'. $row['doctorado'] .'</td>
                    <td>'. $row['catdocente'] .'</td>
                    <td>'. $row['regime'] .'</td>
                    <td>'. $row['clases'] .'</td>
                    <td>'. $row['otras'] .'</td>
                    <td>'. $row['total'] .'</td>
                    <td>'. $row['investigador'] .'</td>
                    <td>'. $row['dina'] .'</td>
                    <td>'. $row['peridodo'] .'</td>
                    <td>'. $row['obs'] .'</td>
                </tr>
   ';
   $i++;
  }
  $output .= '</tbody>
        </table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=gestion.xls');
  echo $output;
 
}
