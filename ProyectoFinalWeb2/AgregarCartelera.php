
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Agregar cartelera</title>
        <meta charset="UTF-8">
        <!--<link href="NavbarCss.css" rel="stylesheet" type="text/css"/>-->
        
        <link href="estiloVentanasAgregar.css" rel="stylesheet" type="text/css"/>
        
         <!--<link href="https://fonts.googleapis.com/css?family=Work+Sans" rel="stylesheet">-->
        <link rel="stylesheet" href="HeaderStyleSheet.css">
    <link rel="stylesheet" href="ServiciosStyleSheet.css">
    <link rel="stylesheet" href="SliderStyleSheet.css">
        
        <script src="contact-form-validation-Cartelera.js"></script>
    </head>
    <body>
        <?php
        include("BaseDeDatos.php"); 
            function agregarCartelera(){
                $baseDatos = new BaseDeDatos();
                $id = $_POST['id'];
                $direccion = $_POST['direccion'];
                $titulo = $_POST['titulo'];
                $precio = $_POST['precio'];
                $query = "INSERT INTO carteleras VALUES (".floor($id).",'".$direccion."','".$titulo."',".floor($precio).");" ;
                
                if(is_numeric($id) && is_numeric($precio)){
                    $baseDatos->EjecutarQuery($query);
                }
            }

            if(isset($_POST['submit'])){ 
                agregarCartelera();
            }  
            
        ?>
         <header class="main-header">   
                    <div class="container container--flex">
                        <div class ="logo-container column column--50">
                            <h1 class="logo">Logo</h1>
                        </div>
                        <div class="main-header__contactInfo column column--50">
                            <p class="main-header__contactInfo__phone">
                                <span class="icon-phone">999-999-999</span>
                            </p>
                            <p class="main-header__contactInfo__adress">
                                <span class="icon-map-marca">Mérida,Yucatán, México</span>
                            </p>    
                        </div>    
                    </div>
    </header>
    <nav class="main-nav">
        <div class="container container--flex">
            <span class="icon-menu" id="btnmenu"></span>
            <ul class="menu" id="menu">
                <li class="menu__item">
                    <a href="Inicio.php" class="menu__link menu__link--select"> Inicio</a>
                </li>
                <li class="menu__item">
                    <a href="Nosotros.php" class="menu__link"> Nosotros</a>
                </li>
                <li class="menu__item">
                    <a href="Servicio.php" class="menu__link "> Servicios</a>
                </li>
                <li class="menu__item">
                    <a href="Contacto.php" class="menu__link "> Contacto</a>
                </li>
                <?php
                    session_start();
                    if($_SESSION['tipo_usuario'] == "administrador"){
                        echo '<li class="menu__item">';
                        echo '<a href="VistaAdministrador.php" class="menu__link "> Ver Anuncios</a>';
                        echo '</li>';
                    } else if ($_SESSION['tipo_usuario'] == "cliente"){
                        echo '<li class="menu__item">';
                        echo '<a href="VistaContratar.php" class="menu__link "> Contratar</a>';
                        echo '</li>';
                        echo '<li class="menu__item">';
                        echo '<a href="VistaVerContrataciones.php" class="menu__link "> Ver Mis Contrataciones</a>';
                        echo '</li>';
                    }

                    if($_SESSION['inicio'] == null || $_SESSION['inicio'] == false){
                        echo '<li class="menu__item">';
                        echo '<a href="IniciarSesion.php" class="menu__link "> Iniciar Sesion</a>';
                        echo '</li>';
                    } else{
                        echo '<li class="menu__item">';
                        echo '<a href="CerrarSesion.php" class="menu__link "> Cerrar Sesion</a>';
                        echo '</li>';
                    }
                ?>
                
            </ul>

            
        </div>      
            
    </nav>

        
        
            <div class="add-box">
                <h1> Ingrese los siguientes datos de la cartelera a registrar:</h1>

                <form name="contact-form" method="POST" action="">
                    ID: <br>
                    <input type="text"  name="id" placeholder="ingrese el ID">
                    <br><br>
                        
                    Dirección: <br>
                    <input type="text"  name="direccion" placeholder="ingrese la direccion">
                    <br><br>
                        
                    Título: <br>
                    <input type="text"  name="titulo" placeholder="ingrese el Titulo">
                    <br><br>
                    
                    Precio: <br>
                    <input type="text"  name="precio" placeholder="ingrese el precio">
                    <br><br>
                     
                    <input type="submit" name="submit" value="Registrar Datos" onclick="validateForm()">               
                </form>
            </div>
        
        
    </body>
</html>