<?php

include 'conexion_be.php';
$Nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$contrasena = $_POST['contrasena'];



$query = "INSERT INTO users(Nombre,Apellido,Correo,Telefono,Contraseña) 
VALUES('$Nombre','$apellido','$correo','$telefono','$contrasena')";
/*Verificacion de que el correo no  se repita en la bse dato*/ 

$verificar = mysqli_query($conexion, "SELECT * FROM users WHERE Correo='$correo'  ");
if(mysqli_num_rows($verificar)>0){

    echo'
    <script>
    alert ("Este correo ya esta en uso, intenta con otro diferente");
    window.location = "../Html/index.php";
    
    </script>
    
    ';
    exit();
}

/*Verificacion de que el usuario no  se repita en la base dato*/ 

$verificar_user = mysqli_query($conexion, "SELECT * FROM users WHERE Telefono='$telefono'  ");
if(mysqli_num_rows($verificar_user)>0){

    echo'
    <script>
    alert ("Este telefono ya esta en uso, intenta con otro diferente");
    window.location = "../Html/index.php";
    
    </script>
    
    ';
    exit();
}


 $ejecutar = mysqli_query($conexion,$query);

 if($ejecutar){
    echo '
    <script>
    alert("Usuario regitrado exitosamente");
    window.location = "../Html/index.php";
    </script>
    ';
 }else{
    echo '
    <script>
    alert("Intentalo de nuevo");
    window.location = "../Html/index.php";
    </script>
    ';

 }

 mysqli_close($conexion);



?>