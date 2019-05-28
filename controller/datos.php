<?php
require_once "../model/docentes.php";

$paterno = trim(ucwords($_REQUEST['apepater']));
$materno = trim(ucwords($_REQUEST['apemater']));
$nombres = trim(ucwords($_REQUEST['nombres']));
$pais    = trim(ucwords($_REQUEST['pais']));
$dni = $_REQUEST['numdni'];
$fecingresou = $_REQUEST['fechaingresou'];
$ley = trim(ucwords($_REQUEST['ley']));
$gradoacademico = trim(ucwords($_REQUEST['gradoacademico']));
$mencion = trim(ucwords($_REQUEST['mencion']));
$universidad = trim(ucwords($_REQUEST['universidad']));
$paisuniversidad = trim(ucwords($_REQUEST['paisuniversidad']));
$pregrado = trim(ucwords($_REQUEST['pregrado']));
$maestria = trim(ucwords($_REQUEST['maestria']));
$doctorado = trim(ucwords($_REQUEST['doctorado']));
$catdocente = trim(ucwords($_REQUEST['catdocente']));
$regime = trim(ucwords($_REQUEST['regimen']));
$clases = $_REQUEST['clases'];
$otras = $_REQUEST['otras'];
$total = $_REQUEST['total'];
$investigador = trim(ucwords($_REQUEST['investigador']));
$dina = trim(ucwords($_REQUEST['dina']));
$periodo = $_REQUEST['periodo'];
$obs = trim(ucwords($_REQUEST['obs']));

$docentes = new Docentes();
$docentes->Guardar($paterno,$materno,$nombres,$pais,$dni,$fecingresou,$ley,$gradoacademico,$mencion,$universidad,$paisuniversidad,$pregrado,$maestria,$doctorado,$catdocente,$regime,$clases,$otras,$total,$investigador,$dina,$periodo,$obs);