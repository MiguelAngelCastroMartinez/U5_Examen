<link rel="stylesheet" href="css/login.css"> 
<?php
    $usuario=$_post['usuario'];
    $contraseña=$_post['contraseña'];
    
    include 'conexion.php';

    $query="Insert into usuarios (usuario, contraseña) values ($usuario, $contraseña)";
    $resultado = mysqli_query($db,$query);
    
    if($resultado){
        header("location:index.html");
    }
    else{
        echo "<h1>Error de Registro</h1>";
    }
    mysqli_close($db);
?>