<?php
    include('../php/connect.php');
    $email=$_POST['correo'];
    $password=md5($_POST['clave']);
    session_start();
    $_SESSION['usuario']=$usuario;

    $conexion=mysqli_connect("progra4.cxqjangc5vjv.us-east-1.rds.amazonaws.com", "root", "root12345678", "Champion",3306);

    $consulta="SELECT*FROM Admins where correo='$email' and clave='$password'";
    $resultado=mysqli_query($conexion,$consulta);

    $filas=mysqli_num_rows($resultado);

    if($filas){
        header("location:/php/admin/menuAdmin.php");
    }else{
        include("../html/public/index.html");
        ?>
          <h1 class="bad">ERROR DE AUTENTIFICACIÓN</h1>
        <?php
    }
    mysqli_free_result($resultado);
    mysqli_close($conexion);
?>
