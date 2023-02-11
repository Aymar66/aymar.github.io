<?php
session_start();
if(!isset($_SESSION['usuario'])){
    echo '<script>
    alert ("Debes iniciar sesion");
    window.location = "../Html/index.php";
    </script>
    ';
    session_destroy; 
    die();

}


?>


<!doctype <html>
<head>
    <title>Menu</title>
    <link rel="stylesheet" href="../Css/estilo_menu_principal.css"/>

</head>
<body>

    <header class="Navegador">

        <div class="icon-menu">
            <label for="btn_menu" class="icono">
                -
            </label>
        </div>

        <a class="btn_cerrar" id="btn_close" onclick="alerts(event)" href="../php/cerrar_sesion.php">
            <h1>Cerrar Sesion</h1>
        </a>


    </header>

    <input type="checkbox" id="btn_menu">

    <div class="contenedor_menu">
        <div class="cont_menu">
            <nav>
                <a href="#">Inicio</a>
                <a href="#">Categorias</a>
                <a href="#">Reservar</a>
                <a href="#">Administrar Pedidos</a>          
            </nav>       
            <label for="btn_menu" class="icono_x">x</label>
            <label for="btn_menu" id="icono_x"></label>
        </div>
    </div>
    <div class="container_cards">
        <!--/////////////////////////////////////////////////////////////////////////////////-->
        <div class="card">
        <div class="cover">
            <img src="../img/infro.jpg" alt="">
            <div class="img_back"></div>
        </div>
        <div class="description">
            <h2>Libro de Informatica</h2>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sapiente, eaque.</p>
            <input type="button" value="leer mas..">
        </div>
        </div>
            <!--/////////////////////////////////////////////////////////////////////////////////-->
        <div class="card">
            <div class="cover">
                <img src="../img/meto.jpg" alt="">
                <div class="img_back"></div>
            </div>
            <div class="description">
                <h2>Libro de Metodologias</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sapiente, eaque.</p>
                <input type="button" value="leer mas..">
            </div>
            </div>

            <!--/////////////////////////////////////////////////////////////////////////////////-->
            <div class="card">
                <div class="cover">
                    <img src="../img/html.jpg" alt="">
                    <div class="img_back"></div>
                </div>
                <div class="description">
                    <h2>Libro de Html</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sapiente, eaque.</p>
                    <input type="button" value="leer mas..">
                </div>
                </div>
                 <!--/////////////////////////////////////////////////////////////////////////////////-->
            <div class="card">
                <div class="cover">
                    <img src="../img/php.jpg" alt="">
                    <div class="img_back"></div>
                </div>
                <div class="description">
                    <h2>Libro de PHP</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sapiente, eaque.</p>
                    <input type="button" value="leer mas..">
                </div>
                </div>
                <!--/////////////////////////////////////////////////////////////////////////////////-->
       
            <div class="card">
                <div class="cover">
                    <img src="../img/in.jpg" alt="">
                    <div class="img_back"></div>
                </div>
                <div class="description">
                    <h2>Libro de English</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sapiente, eaque.</p>
                    <input type="button" value="leer mas..">
                </div>
                </div>
                  <!--/////////////////////////////////////////////////////////////////////////////////-->
            <div class="card">
                <div class="cover">
                    <img src="../img/java.jpg" alt="">
                    <div class="img_back"></div>
                </div>
                <div class="description">
                    <h2>Libro de JAVA</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sapiente, eaque.</p>
                    <input type="button" value="leer mas..">
                </div>
                </div>
                     <!--/////////////////////////////////////////////////////////////////////////////////-->
            <div class="card">
                <div class="cover">
                    <img src="../img/py.jpg" alt="">
                    <div class="img_back"></div>
                </div>
                <div class="description">
                    <h2>Libro de PYTHON</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sapiente, eaque.</p>
                    <input type="button" value="leer mas..">
                </div>
       
            </div>
            <div class="card">
                <div class="cover">
                    <img src="../img/css.jpg" alt="">
                    <div class="img_back"></div>
                </div>
                <div class="description">
                    <h2>Libro de Css</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sapiente, eaque.</p>
                    <input type="button" value="leer mas..">
                </div>
       
            </div>
        


        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../js/sweetAlert.js"></script>
   

</body>
</html>


