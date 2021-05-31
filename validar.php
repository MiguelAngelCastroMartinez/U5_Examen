<link rel="stylesheet" href="css/login.css"> 
<?php
    $usuario=$_POST['usuario'];
    $contraseña=$_POST['contraseña'];
    
    include 'conexion.php';

    session_start();
    $_SESSION['usuario']=$usuario;

    $query="SELECT * From usuarios where usuario = '$usuario' and contraseña='$contraseña'";
    $resultado = mysqli_query($db,$query);
    
    $registro = mysqli_num_rows($resultado);

    if($registro){
        header("location:bienvenido.php");
    }
    else{
        echo "<h1>Error de autentificación</h1>";
    }
    mysqli_close($db);
?>