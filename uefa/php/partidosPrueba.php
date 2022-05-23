<?php   
    $partidos = array (
                    array(1,2),
                    array(3,4),
                    array(1,3),
                    array(2,4),
                    array(4,1),
                    array(3,2),
                    array(2,1),
                    array(4,3),
                    array(3,1),
                    array(4,2),
                    array(1,4),
                    array(2,3)
                );
    print_r($partidos);

    require_once "connect.php";
	$query = "SELECT * FROM Equipos";
	$consulta = $mysqli->query($query);
	$arrayId = array();

?>