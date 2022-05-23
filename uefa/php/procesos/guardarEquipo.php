<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/estilos.css">
	<title>Resultado de Busqueda</title>
</head>
<body>
	<?php
		require_once "../connect.php";
		
		$nombre=$_POST['equipo'];
		$pais=$_POST['pais'];
		
		$query="INSERT INTO Equipos(nombre,pais) VALUES('$nombre','$pais')";
		
		if($mysqli->query($query)){
			header("location:../../html/admin/menuAdmin.html");          
		}else{
			echo "Ocurrio un error";
		}
	?>
		<script src="../../js/bootstrap.bundle.min.js"></script>
	</body>
</html>