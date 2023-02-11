
<?php
session_start();
$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];



// Crea la conexión a la base de datos
$conexion = mysqli_connect("localhost","root","12345678","usuario");
$consulta = "SELECT * FROM users WHERE Correo='$correo'and Contraseña='$contrasena'";
  
$resul = mysqli_query($conexion,$consulta);
$fila= mysqli_num_rows($resul);

if($fila>0){
    $_SESSION['usuario']=$correo;
    echo '
    <script>
    window.location = "../menu/menu_principal.php";
    </script>
    ';
   
}else{
    echo '
    <script>
    alert("Datos Incorrectos, intente de nuevo");
    window.location = "../Html/index.php";
    </script>
    ';
 
  }
  mysqli_free_result($resul);
  mysqli_close($conexion);
  ?>
