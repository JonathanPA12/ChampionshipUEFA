
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Equipos</title>
	<link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>
    <div class="container">
		<div class="row mt-3">
			<div class="col">
                <?php
                    if(isset($_GET['idEquipos'])){
                        require_once "connect.php";
                        $idEquipos=$_GET['idEquipos'];
                        $query="SELECT * FROM Equipos WHERE idEquipos='$idEquipos'";
                        $consulta1=$mysqli->query($query);
                        $fila=$consulta1->fetch_array(MYSQLI_ASSOC);
                        
						echo '<form action="procesos/editarEquipo.php" method="POST">
                                <div class="row">
                                    <div class="col-12 col-md-6 mb-3">
                                        <label for="idEquipos" class="form-label">Identificador</label>
                                        <input type="text" class="form-control" name="idEquipos" value="'.$fila['idEquipos'].'">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-md-6 mb-3">
                                        <label for="nombre" class="form-label">Nombre</label>
                                        <input type="text" class="form-control" placeholder="Arsenal" name="nombre" value="'.$fila['nombre'].'">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-md-6 mb-3">
                                        <label for="pais" class="form-label">País</label>
                                        <input type="text" class="form-control" placeholder="Inglaterra" name="pais" value="'.$fila['pais'].'">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-md-6 mb-3">
                                        <label for="pj" class="form-label">PJ</label>
                                        <input type="text" class="form-control" placeholder="4" name="pj" value="'.$fila['pj'].'">
                                    </div>
                                </div>
								<div class="row">
                                    <div class="col-12 col-md-6 mb-3">
                                        <label for="g" class="form-label">G</label>
                                        <input type="text" class="form-control" placeholder="2" name="g" value="'.$fila['g'].'">
                                    </div>
                                </div>
							    <div class="row">
                                    <div class="col-12 col-md-6 mb-3">
                                        <label for="e" class="form-label">E</label>
                                        <input type="text" class="form-control" placeholder="5" name="e" value="'.$fila['e'].'">
                                    </div>
                                </div>
							    <div class="row">
                                    <div class="col-12 col-md-6 mb-3">
                                        <label for="p" class="form-label">P</label>
                                        <input type="text" class="form-control" placeholder="1" name="p" value="'.$fila['p'].'">
                                    </div>
                                </div>	
							  <div class="row">
                                    <div class="col-12 col-md-6 mb-3">
                                        <label for="gf" class="form-label">GF</label>
                                        <input type="text" class="form-control" placeholder="1" name="gf" value="'.$fila['gf'].'">
                                    </div>
                                </div>		
							  <div class="row">
                                    <div class="col-12 col-md-6 mb-3">
                                        <label for="dg" class="form-label">DG</label>
                                        <input type="text" class="form-control" placeholder="0" name="dg" value="'.$fila['dg'].'">
                                    </div>
                                </div>
							  <div class="row">
                                    <div class="col-12 col-md-6 mb-3">
                                        <label for="pts" class="form-label">PTS</label>
                                        <input type="text" class="form-control" placeholder="15" name="pts" value="'.$fila['pts'].'">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6 d-flex justify-content-center">
                                        <div>
                                            <button type="submit" class="col-12 btn btn-primary">Actualizar</button>
                                        </div>
                                    </div>
                                </div>
                            </form>';
                    }else{
                        echo "Ocurrio un error inesperado";
                    }
                ?>			
			</div>
		</div>
	</div>
<div class="row">
<div class="col-12 d-flex justify-content-center">
<div>
<a href="../home.php">
 <button type="submit" class="col-12 btn btn-primary">Atras</button>
</a>
</div>
</div>
</div>

	<script src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>