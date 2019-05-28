<?php

class Docentes
{
    private $con;

	function __construct() {
		require_once "Conection.php";
		$conection = new Conection();
		$this->con = $conection->Conectar();
	}

	public function Guardar($paterno,$materno,$nombres,$pais,$dni,$fecingresou,$ley,$gradoacademico,$mencion,$universidad,$paisuniversidad,$pregrado,$maestria,$doctorado,$catdocente,$regime,$clases,$otras,$total,$investigador,$dina,$periodo,$obs) {

		//echo $this->con->host_info." Dentro de Notarios";
		$sql   = "INSERT INTO docente (id,paterno,materno,nombres,pais,dni,fecingresou,ley,gradoacademico,mencion,universidad,paisuniversidad,pregrado,maestria,doctorado,catdocente,regime,clases,otras,total,investigador,dina,periodo,obs)
		VALUES (NULL,'$paterno','$materno','$nombres','$pais','$dni','$fecingresou','$ley','$gradoacademico','$mencion','$universidad','$paisuniversidad','$pregrado','$maestria','$doctorado','$catdocente','$regime','$clases','$otras','$total','$investigador','$dina','$periodo','$obs');";
		
		
		if(!$this->con->query($sql)){
			echo "Erro Insertando";
			header("Location: ../error.html");
        }

        header("Location: ../resumen.html");
		return true;
	}

	public function Listado()
	{
		$sql = "SELECT id,paterno,materno,nombres,pais,dni,fecingresou,ley,gradoacademico,mencion,universidad,paisuniversidad,pregrado,maestria,doctorado,catdocente,regime,clases,otras,total, investigador,dina,periodo,obs FROM docente;";

		if(!$datos = $this->con->query($sql))
		{
			header("Location: ../error.html?msg='Error Listando los datos del servidor.'");
		}
		
		return $datos;
	}
}

