<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta property="og:title" content="">
  <meta property="og:type" content="">
  <meta property="og:url" content="">
  <meta property="og:image" content="">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->

  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/leaflet.css">
  <link rel="stylesheet" href="css/main.css">
  <?php     
    $archivo = basename($_SERVER['PHP_SELF']); //retorna el nombre del archivo actual
    $pagina = str_replace(".php", "", $archivo);  //primero lo que quieres buscar, por qué reemplazar, y fuente de datos
    if($pagina == 'invitados' || $pagina == 'index'){
      echo '<link rel="stylesheet" href="css/colorbox.css">';
    }
  ?>
  <?php     
    $archivo = basename($_SERVER['PHP_SELF']); //retorna el nombre del archivo actual
    $pagina = str_replace(".php", "", $archivo);  //primero lo que quieres buscar, por qué reemplazar, y fuente de datos
    if($pagina == 'registro'){
      echo '<link rel="stylesheet" href="css/form.css">';
    }
  ?>
  <link rel="stylesheet" href="css/all.css">
  <link rel="stylesheet" href="css/fontawesome.css">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Oswald&family=PT+Sans&display=swap" rel="stylesheet"> 
  <meta name="theme-color" content="#fafafa">
</head>

<body class="<?php echo $pagina; ?>">

  <!-- Add your site or application content here -->
 <header class="site-header">

  <div class="hero">
    <div class="contenido-header">

      <nav class="redes-sociales">
            <a href="https://www.facebook.com/eriia2018/" target="_blank"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
      </nav>

   <!--    <div class="informacion-evento">
        <div class="clearfix">
          <p class="fecha"><i class="far fa-calendar-alt"></i> 10-12 dic</p>
          <p class="university"><i class="fas fa-university"></i>Univalle</p>
          
        </div> 
   
    <h1 class="nombre-sitio">Eriia</h1>
    <p class="slogan">Encuentro Regional de  <span>Ingenieria Industrial</span> y afines</p>

      </div>  <!--Informacióń evento--> 
      <div class="encabezado">
    <img src="img/logoERIIA.png" alt="logo imagen"> </div>
    </div>  
  </div>   <!---Hero-->


 </header>

 <div class="barra">

  <div class="contenedor clearfix">
    <div class="logo">
    <a href="index.php"><img src="img/logoERIIA.png" alt="logo imagen"> </div></a>  <!--logo-->

    <div class="menu-movil">
      <span></span>
      <span></span>
      <span></span>

    </div>   <!--menu-movil-->

    <nav class="navegacion-principal clearfix">
      <a href="tyc.php">TyC</a> 
      <a href="calendario.php">Calendario</a>
      <a href="invitados.php">Invitados</a>
      <a href="registro.php">Registrarse</a>
      
    </nav>

  </div>    <!--contenedor-->
</div>   <!--Barra-->