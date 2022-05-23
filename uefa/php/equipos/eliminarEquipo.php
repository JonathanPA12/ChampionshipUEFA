<?php
	require_once "../connect.php";
	if(isset($_GET['nombre'])){
		$nombre=$_GET['nombre'];
		$query="DELETE FROM Equipos WHERE nombre='$nombre'";
		if($mysqli->query($query)){
			echo "Registro eliminado";
		}else{
			echo "Error no se pudo eliminar el registro";
		}
	}else{
		echo "Error no se pudo procesar la peticion";
	}
?>