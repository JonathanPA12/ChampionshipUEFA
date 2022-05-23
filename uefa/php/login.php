<?php
	$correo=$_POST['floatingInput'];
	$clave=md5($_POST['floatingPassword']);
	$query="SELECT * FROM Admins WHERE correo='$correo' AND clave='$clave'";
	echo $query;
	$consulta2=$mysqli->query($query);
	if($consulta2->num_rows>=1){
		$fila=$consulta2->fetch_array(MYSQLI_ASSOC);
		session_start();
		$_SESSION['Admin']=$fila['correo'];
		$_SESSION['verificar']=true;
		header("Location: ../html/menuAdmin.html");
	}else{
		echo "Los datos son incorrectos";
	}
?>