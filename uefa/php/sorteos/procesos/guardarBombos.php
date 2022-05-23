<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="../../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../css/estilos.css">
	<title>Guardar Equipo</title>
</head>
<body>
	<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
  		<symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
    		<path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
		</symbol>
		<symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
			<path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
		</symbol>
	</svg>
	<?php
		require_once "../../connect.php";
		
		$nombreB=$_POST['nombreB'];
		$equipoB1=$_POST['equipoB1'];
        $equipoB2=$_POST['equipoB2'];
        $equipoB3=$_POST['equipoB3'];
        $equipoB4=$_POST['equipoB4'];
        $equipoB5=$_POST['equipoB5'];
        $equipoB6=$_POST['equipoB6'];
        $equipoB7=$_POST['equipoB7'];
        $equipoB8=$_POST['equipoB8'];

		$queryE = "SELECT idEquipos,pais FROM Equipos WHERE nombreE = '$equipoB1'";
		$consultaE=$mysqli->query($queryE);
		$datosE =  $consultaE->fetch_assoc();
		$idE1 = (int)$datosE['idEquipos'];
		$idP1 = (int)$datosE['pais'];

        $queryE2 = "SELECT idEquipos,pais FROM Equipos WHERE nombreE = '$equipoB2'";
		$consultaE2=$mysqli->query($queryE2);
		$datosE2 =  $consultaE2->fetch_assoc();
		$idE2 = (int)$datosE2['idEquipos'];
		$idP2 = (int)$datosE2['pais'];

        $queryE = "SELECT idEquipos,pais FROM Equipos WHERE nombreE = '$equipoB3'";
		$consultaE=$mysqli->query($queryE);
		$datosE =  $consultaE->fetch_assoc();
		$idE3 = (int)$datosE['idEquipos'];
		$idP3 = (int)$datosE['pais'];

        $queryE = "SELECT idEquipos,pais FROM Equipos WHERE nombreE = '$equipoB4'";
		$consultaE=$mysqli->query($queryE);
		$datosE =  $consultaE->fetch_assoc();
		$idE4 = (int)$datosE['idEquipos'];
		$idP4 = (int)$datosE['pais'];

        $queryE = "SELECT idEquipos,pais FROM Equipos WHERE nombreE = '$equipoB5'";
		$consultaE=$mysqli->query($queryE);
		$datosE =  $consultaE->fetch_assoc();
		$idE5 = (int)$datosE['idEquipos'];
		$idP5 = (int)$datosE['pais'];

        $queryE = "SELECT idEquipos,pais FROM Equipos WHERE nombreE = '$equipoB6'";
		$consultaE=$mysqli->query($queryE);
		$datosE =  $consultaE->fetch_assoc();
		$idE6 = (int)$datosE['idEquipos'];
		$idP6 = (int)$datosE['pais'];

        $queryE = "SELECT idEquipos,pais FROM Equipos WHERE nombreE = '$equipoB7'";
		$consultaE=$mysqli->query($queryE);
		$datosE =  $consultaE->fetch_assoc();
		$idE7 = (int)$datosE['idEquipos'];
		$idP7 = (int)$datosE['pais'];

        $queryE = "SELECT idEquipos,pais FROM Equipos WHERE nombreE = '$equipoB8'";
		$consultaE=$mysqli->query($queryE);
		$datosE =  $consultaE->fetch_assoc();
		$idE8 = (int)$datosE['idEquipos'];
		$idP8 = (int)$datosE['pais'];

		$idsP = array($idP1, $idP2, $idP3, $idP4, $idP5, $idP6, $idP7, $idP8);
		$idsPUni = array_unique($idsP);
		
		foreach($idsPUni as $value){
			$i=0;
			foreach($idsP as $val){
				if($val == $value){
					$i++;
				}
			}
			if($i>2){
				echo '
					<div class="row">
						<div class="col-12 col-md-6 mb-3">
							<div class="alert alert-danger d-flex align-items-center" role="alert">
								<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
								<div>
									No se permite agregar más de dos equipos de un mismo país. 
								</div>
							</div>
						</div>
					</div>
					<div class="row mt-3">
						<div class="col-6 d-flex justify-content-center">
							<div>
								<a href="../crearBombos.php">
									<button type="submit" class="col-12 btn btn-primary">Atras</button>
								</a>
							</div>
						</div>
					</div>
				';
			}
		}
		$queryCantP = "SELECT COUNT(pais) as cant FROM Equipos where pais = '$id'";
		$result=$mysqli->query($queryCantP);
		$data =  $result->fetch_assoc();

		$query="SELECT * FROM Bombos INNER JOIN Equipos ON Equipos.idEquipos = Bombos.idEquipoB1 AND Equipos.idEquipos = Bombos.idEquipoB2 Equipos.idEquipos = Bombos.idEquipoB3 Equipos.idEquipos = Bombos.idEquipoB4 Equipos.idEquipos = Bombos.idEquipoB5 Equipos.idEquipos = Bombos.idEquipoB6 Equipos.idEquipos = Bombos.idEquipoB7 Equipos.idEquipos = Bombos.idEquipoB8";
		$consulta1=$mysqli->query($query);

	?>

	<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
  		<symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
    		<path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
		</symbol>
		<symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
			<path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
		</symbol>
	</svg>
	<?php
    /*
		if($data['cant'] == 2){
			echo '
				<div class="row">
					<div class="col-12 col-md-6 mb-3">
						<div class="alert alert-danger d-flex align-items-center" role="alert">
							<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
							<div>
								No se puede agregar Equipo. Ya hay 4 equipos del mismo País. 
							</div>
						</div>
					</div>
				</div>
				<div class="row mt-3">
					<div class="col-6 d-flex justify-content-center">
						<div>
							<a href="../admin/crearEquipo.php">
								<button type="submit" class="col-12 btn btn-primary">Atras</button>
							</a>
						</div>
					</div>
				</div>
	  		';
		}
		else{
			$query="INSERT INTO Equipos(nombreE,pais) VALUES('$nombreE','$id')";
		
			if($mysqli->query($query)){
				echo '
					<div class="row">
						<div class="col-12 col-md-6 mb-3">
							<div class="alert alert-success d-flex align-items-center" role="alert">
								<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
								<div>
									Equipo Agregado.
								</div>
							</div>
						</div>
					</div>  
					<div class="row mt-3">
						<div class="col-6 d-flex justify-content-center">
							<div>
								<a href="../admin/crearEquipo.php">
									<button type="submit" class="col-12 btn btn-primary">Atras</button>
								</a>
							</div>
						</div>
					</div>     		
				';
			}else{
				echo '
					<div class="row">
						<div class="col-12 col-md-6 mb-3">
							<div class="alert alert-danger d-flex align-items-center" role="alert">
								<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
								<div>
									Error al agregar el equipo. 
								</div>
							</div>
						</div>
					</div>
					<div class="row mt-3">
						<div class="col-6 d-flex justify-content-center">
							<div>
								<a href="../admin/crearEquipo.php">
									<button type="submit" class="col-12 btn btn-primary">Atras</button>
								</a>
							</div>
						</div>
					</div>
					';
			}
		}	
    */
	?>
		<script src="../../../js/bootstrap.bundle.min.js"></script>
	</body>
</html>