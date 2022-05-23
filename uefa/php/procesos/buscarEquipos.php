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
    <div class="container">
        <div class="row my-5">
            <div class="col">
                <div class="table-responsive">
                    <table class="table table-striped table-hover table-sm table-bordered">
                        <caption>Equipo - Pais</caption>
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

                    $pais=$_POST['pais'];
                    $query="SELECT * FROM Equipos WHERE pais LIKE '%$pais%'";
                    $consulta1=$mysqli->query($query);
                    
                    if($consulta1->num_rows==1){
                        require_once "../connect.php";
                        $fila=$consulta1->fetch_array(MYSQLI_ASSOC);
                        echo "
                            <tr>
                                <td>".$fila['idEquipos']."</td>
                                <td>".$fila['nombre']."</td>
                                <td>".$fila['pais']."</td>  
                                <td><a href='actualizarEquipos.php?idEquipos=".$fila['idEquipos']."'>Actualizar</a></td>
                                <td><a href='eliminarEquipo.php?idEquipos=".$fila['idEquipos']."'>Eliminar</a></td>
                        ";

                        echo '
                            </tr>
                        </tbody>
                    </table>';
                    }else{
                    echo "No hemos encotrado ningun equipo de ese pais".$idEstudiante;
                    }
                ?>
            </div>
        </div>
    </div>
    <script src="../../js/bootstrap.bundle.min.js"></script>
</body>
</html>