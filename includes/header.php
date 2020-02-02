<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet" />
    <!-- BOOTSTRAP 4 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- SCROOLL REVEAL JS LIBRARY CDN -->
    <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
    <title>MASTER EN PHP</title>
</head>
<body>
    
<nav class="navbar navbar-dark bg-primary">
  <a class="navbar-brand" href="index2.php">MASTER EN PHP</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    <li class="nav-item active">
                <a class="nav-link" href="hola_Mundo.php">HOLA MUNDO <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="imprimir.php">IMPRIMIR<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="tipos.php">TIPOS<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="constantes.php">CONSTANTES<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="operadores.php">OPERADORES<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="condicionales.php">CONDICIONALES<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="bucles.php">BUCLES<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="buclefor.php">BUCLES FOR<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="formularios.php">FORMULARIOS<span class="sr-only">(current)</span></a>
            </li>
            
            </li>
            
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="aprendiendo-php/07-superglobales" id="navbarDropdown" 
                role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                SUPERGLOBALES
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="aprendiendo-php/07-superglobales/formulario.php">FORMULARIO</a>
                    <a class="dropdown-item" href="aprendiendo-php/07-superglobales/index.php">INDEX</a>
                    <a class="dropdown-item" href="aprendiendo-php/07-superglobales/recibir.php">RECIBIR</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="aprendiendo-php/11-EJERCICIOS" id="navbarDropdown" 
                role="button" target="_blank" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                EJERCICIOS PRIMER SET
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                     <a class="dropdown-item" href="aprendiendo-php/11-EJERCICIOS/ejercicio1.php">Ejercicio 1</a>
                     <a class="dropdown-item" href="aprendiendo-php/11-EJERCICIOS/ejercicio2.php">Ejercicio 2</a>
                     <a class="dropdown-item" href="aprendiendo-php/11-EJERCICIOS/ejercicio3.php">Ejercicio 3</a>
                     <a class="dropdown-item" href="aprendiendo-php/11-EJERCICIOS/ejercicio4.php">Ejercicio 4</a>
                     <a class="dropdown-item" href="aprendiendo-php/11-EJERCICIOS/ejercicio5.php">Ejercicio 5</a>
                     <a class="dropdown-item" href="aprendiendo-php/11-EJERCICIOS/ejercicio6.php">Ejercicio 6</a>
                     <a class="dropdown-item" href="aprendiendo-php/11-EJERCICIOS/ejercicio7.php">Ejercicio 7</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="aprendiendo-php/12-funciones" id="navbarDropdown" 
                role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                FUNCIONES
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="aprendiendo-php/12-funciones/funciones.php">FUNCIONES</a>
                            <a class="dropdown-item" href="aprendiendo-php/12-funciones/predefinidas.php">PREDEFINIDAS</a>
                            <a class="dropdown-item" href="aprendiendo-php/12-funciones/variables.php">VARIABLES</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="aprendiendo-php/13-includes" id="navbarDropdown" 
                role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                INCLUDES
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="aprendiendo-php/13-includes/includes/aboutme.php">ABOUT ME</a>
                            <a class="dropdown-item" href="aprendiendo-php/13-includes/includes/contact.php">CONTACT</a>
                            <a class="dropdown-item" href="aprendiendo-php/13-includes/includes/index.php">INDEX</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="aprendiendo-php/14-arrays" id="navbarDropdown" 
                role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                ARRAYS
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="aprendiendo-php/14-arrays/funciones.php">FUNCIONES</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="aprendiendo-php/5-ejercicios" id="navbarDropdown" 
                role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                EJERCICIOS SEGUNDO SET
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="aprendiendo-php/15-ejercicios/accion.php">Accion</a>
                            <a class="dropdown-item" href="aprendiendo-php/15-ejercicios/aventura.php">Aventura</a>
                            <a class="dropdown-item" href="aprendiendo-php/15-ejercicios/deportes.php">Deportes</a>
                            <a class="dropdown-item" href="aprendiendo-php/15-ejercicios/ejercicio1.php">Ejercicio 1</a>
                            <a class="dropdown-item" href="aprendiendo-php/15-ejercicios/ejercicio2.php">Ejercicio 2</a>
                            <a class="dropdown-item" href="aprendiendo-php/15-ejercicios/ejercicio3.php">Ejercicio 3</a>
                            <a class="dropdown-item" href="aprendiendo-php/15-ejercicios/ejercicio4.php">Ejercicio 4</a>
                    <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="aprendiendo-php/15-ejercicios/Ejercicio5/ejercicio5.php">Ejercicio 5</a>
                            <a class="dropdown-item" href="aprendiendo-php/15-ejercicios/Ejercicio5/encabezado.php">ENCABEZADO</a>
                            <a class="dropdown-item" href="aprendiendo-php/15-ejercicios/Ejercicio5/primera.php">PRIMERA</a>
                     <a class="dropdown-item" href="aprendiendo-php/15-ejercicios/Ejercicio5/segunda.php">SEGUNDA</a>
                     <a class="dropdown-item" href="aprendiendo-php/15-ejercicios/Ejercicio5/tercera.php">TERCERA</a>
                    </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="aprendiendo-php/16-sesiones" id="navbarDropdown" 
                role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                SESIONES
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="aprendiendo-php/16-sesiones/logout.php">LOGOUT</a>
                                <a class="dropdown-item" href="aprendiendo-php/16-sesiones/includes/pagina1.php">PAGINA 1</a>
                                <a class="dropdown-item" href="aprendiendo-php/16-sesiones/includes/start.php">START</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="aprendiendo-php/17-cookies" id="navbarDropdown" 
                role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                COOKIES
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="aprendiendo-php/17-cookies/crear_cookies.php">CREAR COOKIES</a>
                            <a class="dropdown-item" href="aprendiendo-php/17-cookies/ver_cookies.php">VER COOKIES</a>
                </div>
            </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>


   