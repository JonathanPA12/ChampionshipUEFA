<?php
			require_once "connect.php";
			$query = "SELECT * FROM Equipos";
			$consulta = $mysqli->query($query);
			$arrayIdPais = array();
			$indexGrup = 1;
            $again = true;
            
			while($fila = $consulta->fetch_array(MYSQLI_ASSOC)){
                $arrayIdPais[$fila['idEquipos']] = (int)$fila['pais'];
			}

            foreach($arrayIdPais as $x => $x_value) {
                echo "Key=" . (int)$x . ", Value=" . (int)$x_value;
                echo "<br>";
            }

            function shuffle_assoc($array) {
                $keys = array_keys($array);

                shuffle($keys);

                foreach($keys as $key) {
                    $new[$key] = $array[$key];
                }

                $array = $new;

                return $array;
            }
            //$four=array();
            $arrayIdPais = shuffle_assoc($arrayIdPais);

            $grupoA=array();
            $grupoB=array();
            $grupoC=array();
            $grupoD=array();
            $grupoE=array();
            $grupoF=array();
            $grupoG=array();
            $grupoH=array();
            $arrayIdPaisUnic=array();
            $arrayIdPaisDup=array();

            $arrayIdPaisUnic=array_unique($arrayIdPais);
            $arrayIdPaisDup=array_diff_assoc($arrayIdPais, $arrayIdPaisUnic);
            print_r($arrayIdPaisUnic);
            echo "<br><br>";
            print_r($arrayIdPaisDup);


            /*
            while(sizeof($grupoA)!=4 || sizeof($grupoB)!=4 || sizeof($grupoC)!=4 || sizeof($grupoD)!=4 ||
             sizeof($grupoE)!=4 || sizeof($grupoF)!=4 || sizeof($grupoG)!=4 || sizeof($grupoH)!=4){
                $arrayIdPais = shuffle_assoc($arrayIdPais);
                $grupoA=array_slice($arrayIdPais, 0, 4, true);
                $grupoB=array_slice($arrayIdPais, 4, 4, true);
                $grupoC=array_slice($arrayIdPais, 8, 4, true);
                $grupoD=array_slice($arrayIdPais, 12, 4, true);
                $grupoE=array_slice($arrayIdPais, 16, 4, true);
                $grupoF=array_slice($arrayIdPais, 20, 4, true);
                $grupoG=array_slice($arrayIdPais, 24, 4, true);
                $grupoH=array_slice($arrayIdPais, 28, 4, true);
                
                    array_unique($grupoA);
                    array_unique($grupoB);
                    array_unique($grupoC);
                    array_unique($grupoD);
                    array_unique($grupoE);
                    array_unique($grupoF);
                    array_unique($grupoG);
                    array_unique($grupoH);
            }

            foreach($arrayIdPais as $x => $x_value) {
                echo "Key=" . (int)$x . ", Value=" . (int)$x_value;
                echo "<br>";
            }
/*
            do{
                while(sizeof($four)<4){
                    $arrayIdPais = shuffle_assoc($arrayIdPais);
                    echo "<br>sizef: ".sizeof($four)."<br>";
                    $four=array_slice($arrayIdPais, 0, 4, true);
                    echo "<br>sizef after slice: ".sizeof($four)."<br>";
                    $four=array_unique($four);
                    echo "<br>sizef after unique: ".sizeof($four)."<br>";
                }
                    $four=array_keys($four);
                    $idEquipoA = (int)$four[0];
					$idEquipoB = (int)$four[1];
					$idEquipoC = (int)$four[2];
					$idEquipoD = (int)$four[3];

                    echo "<br>id: <br>".(int)$four[0];
                    echo "<br>".(int)$four[1];
                    echo "<br>".(int)$four[2];
                    echo "<br>".(int)$four[3];

					switch ($indexGrup) {
						case 1:
							$nombre = "Grupo A";
							break;
						case 2:
							$nombre = "Grupo B";
							break;
						case 3:
							$nombre = "Grupo C";
							break;
						case 4:
							$nombre = "Grupo D";
							break;
						case 5:
							$nombre = "Grupo E";
							break;
						case 6:
							$nombre = "Grupo F";
							break;
						case 7:
							$nombre = "Grupo G";
							break;
						case 8:
							$nombre = "Grupo H";
							break;
						default:
						echo "no";
					}	
                    /*
					$addGroup="INSERT INTO Grupos(nombre,idEquipoA,idEquipoB,idEquipoC,idEquipoD) VALUES('$nombre','$idEquipoA','$idEquipoB','$idEquipoC','$idEquipoD')";
					
					if($mysqli->query($addGroup)){
						echo $nombre." Agregado con exito >br>";          
					}else{
						echo "Ocurrio un error";
					}
					
                    echo "<br>".$nombre."<br>";
                    $ids = array_keys($arrayIdPais);
                    $paises = array_values($arrayIdPais);
                    echo "<br>four after shufle:<br>";
                    print_r($four);
                    echo "<br>";

                    for($i=0; $i<4; $i++){
                        array_shift($ids);
					    array_shift($paises);
                        array_shift($four);
                    }
                    echo "<br>four after delete:<br>";
                    print_r($four);
                    echo "<br>";
					$arrayIdPais=array_combine($ids,$paises);
                    
                    echo "<br>sizeA: ".sizeof($arrayIdPais)."<br><br>";
                    foreach($arrayIdPais as $x => $x_value) {
                        echo "Key=" . (int)$x . ", Value=" . (int)$x_value;
                        echo "<br>";
                    }
                    print_r($arrayIdPais);
                    $indexGrup++;
                } while(sizeof($arrayIdPais));
            
            
              */
            //echo "<br>size: ".sizeof($arrayIdPais);

            //header("location:admin/menuAdmin.php");
?>