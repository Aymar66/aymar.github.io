<!DOCTYPE html>

<html>
    <head>
        <title>Inicio de Sesion</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../Css/estilo_login.css"/>
    </head>

    <body>    
                                                                                                                                                                                                                                                                                                                        
        <div class="Caja_Login">

            <img class="Avatar" src="../img/libro.jpg" alt="Imagen de un libro"/>
            <h1>Iniciar Sesion</h1>

            <form class="Formulario" action="../php/inicioSesion.php" method="POST" id="form"              >

                <div class="label_mov">

                    <div class="movi1">
                        <input name="correo" id="Usuario" type="text" required>
                        <label for="Usuario">Correo</label> 
                    </div>

                    <div class="movi2">
                        <input  name="contrasena" id="Contrasena" type="password" required> 
                        <label for="Contrasena">Contrasena</label>   
                    </div>

                </div>


                <div class="recordar">
                    <label><input type="checkbox">
                        Recordar</label>
                    <a href="#">Olvide mi contrasena</a>
                </div>

                <input type="submit" value="Login" id="enviar1" >

                <a class="nueva_cuenta" href="../Html/Cuenta_nueva.php">
                    <h4>Crear Cuenta</h4>

                </a>

            </form>
        </div>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="../js/sweetAlert.js"></script>


    </body>
</html>
