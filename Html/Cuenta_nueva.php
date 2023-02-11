<!DOCTYPE html>

<html>
    <head>
        <title>Crear Cuenta</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../Css/estilo_creacion.css"/>
    </head>

    <body>
        <nav>
            <a class="regresar" href="../Html/index.php">
                <h4>Iniciar Sesion</h4>
            </a>
        </nav>


        <div class="Fondo">

            <form action="../php/registro_usuario_be.php" method="post"  class="formulario_nuevo">
                <!-- Usuario -->
                <div class="Colum1">
                    <label class="prueba" for="Nombre" >Nombre:</label>    
                    <input name="nombre" id="Nombre" type="text" placeholder="Ingrese su Nombre" required>

                    <label for="Apellido">Apellido:</label>    
                    <input name="apellido" id="Apellido" type="text" placeholder="Ingrese su Apellido" required>

                    <label for="Correo">Correo:</label>    
                    <input name="correo" id="Correo" type="text" placeholder="Ingrese su correo" required>
                </div>

                <div class="Colum2">
                    <label for="Telefono">Telefono:</label>    
                    <input name="telefono" id="Telefono" type="text" placeholder="Ingrese su telefono" required  onkeypress="return solonumeros(event)" >

                    <label for="contrasena1">Contrasena:</label>    
                    <input name="contrasena" id="contrasena1" type="text" placeholder="Ingrese su contrasena" required>

                    
                </div>
                <input type="submit" value="Crear Cuenta">               
            </form>

        </div>
        <script>
        function solonumeros(e){
            key = e.keyCode||e.which;
            teclado = String.fromCharCode(key);
            numeros="0123456789";
            especiales = "8-37-38-46";
            teclado_especial = false;
            for(var i in especiales){
                if(key==especiales[i]){
                    teclado_especial = true;
                }
            }
            if(numeros.indexOf(teclado)==-1&&!teclado_especial){
                return false;
                
            }
        }
        </script>
        <script>
        const input = document.querySelector("#Telefono");

    input.addEventListener("input", function() {
  if (this.value.length > 10) {
    this.value = this.value.substring(0, 10);
    alert("Solo se permiten 10 números");
  }
});
     </script>



    </body>
</html>
