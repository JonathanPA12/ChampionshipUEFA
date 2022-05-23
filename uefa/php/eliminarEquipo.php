<?php
	require_once "connect.php";
	if(isset($_GET['idEquipos'])){
		$idEquipos=$_GET['idEquipos'];
		$query="DELETE FROM Equipos WHERE idEquipos='$idEquipos'";
		if($mysqli->query($query)){
			echo "Registro eliminado";
		}else{
			echo "Error no se pudo eliminar el registro";
		}
	}else{
		echo "Error no se pudo procesar la peticion";
	}
?>