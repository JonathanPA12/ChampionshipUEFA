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
	<title>Resultado Búsqueda</title>
</head>
<body>
    <main>
        <div class="container">
            <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                </symbol>
                <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                </symbol>
            </svg>
            <div class="row my-5">
                <div class="col">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover table-sm table-bordered caption-top">
                            <caption>Equipo - Nombre</caption>
                    <?php
                        echo '
                            <thead>
                                <tr class="table-dark">
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Pais</th>
                                    <th>Actualizar</th>
                                    <th>Eliminar</th>
                                </tr>
                            </thead>
                            <tbody>
                        ';

                        $nombreE=$_POST['nombreE'];
                        
                        $queryIdPais = "SELECT idEquipos FROM Equipos WHERE nombre = '$nombreE'";
                        $idPais=$mysqli->query($queryIdPais);
                        $id =  $idPais->fetch_assoc();
                        $id = (int)$id['idEquipos'];
                        
                        $query="SELECT * FROM Equipos WHERE idEquipos = '$id'";
                        $consulta1=$mysqli->query($query);
                        
                        if($consulta1->num_rows>=1){
                            require_once "../connect.php";
                            $fila=$consulta1->fetch_array(MYSQLI_ASSOC);
                            echo "
                                <tr>
                                    <td>".$fila['idEquipos']."</td>
                                    <td>".$fila['nombreE']."</td>
                                    <td>".$nombreE."</td>  
                                    <td><a href='actualizarEquipos.php?idEquipos=".$fila['idEquipos']."'>Actualizar</a></td>
                                    <td><a href='eliminarEquipo.php?idEquipos=".$fila['idEquipos']."'>Eliminar</a></td>
                            ";

                            echo '
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="row mt-3 mb-3">
                                    <div class="col-12 d-flex justify-content-center">
                                        <div>
                                            <a href="../admin/buscadorEquipoNombre.php">
                                                <button type="submit" class="col-12 btn btn-primary">Cerrar</button>
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
                                                No hay equipos con ese nombre. 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-1 mb-3">
                                    <div class="col-6 d-flex justify-content-center">
                                        <div>
                                            <a href="../admin/buscadorEquipoNombre.php">
                                                <button type="submit" class="col-12 btn btn-primary">Cerrar</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            ';
                        }
                    ?>
                </div>
            </div>
        </div>
    </main>
    
    <script src="../../js/bootstrap.bundle.min.js"></script>
</body>
</html>