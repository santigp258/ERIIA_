
<footer class="site-footer">

<div class="contenedor clearfix">

  <div class="footer-informacion">
    <h3>Sobre <span>ERIIA</span></h3>
    <p>El décimo aniversario del Encuentro Regional de Ingeniería Industrial y Afines -ERIIA,
       hemos querido abordar un tema de gran interés para el sector comercial, empresarial y académico, 
       pues éste será materia de importantes investigación en el próximo lustro, donde evaluaremos cuán preparados 
       estamos para afrontar situaciones que en poco tiempo paralizaron la economía mundial.</p>
  </div>
  <!--footer informacion-->

  <div class="Acerca-de">
    <h3>Acerca de <span>Univalle</span></h3>

    <p>
      La Universidad del Valle Sede Zarzal como Universidad Pública tiene como objetivo satisfacer la necesidad de
      Educación Superior con la generación y difusión del conocimiento con autonomía y vocación del servicio social,
      con miras a construir en la región una sociedad equitativa, democrática, justa y participativa.
    </p>

  </div>
  <!-- Cambio Acerca de Univalle-->

  <div class="menu">
    <h3>Redes <span>Sociales</span></h3>
    <nav class="redes-sociales">
      <a href="https://www.facebook.com/eriia2018/" target="_blank"><i class="fab fa-facebook-f"></i></a>
      <a href="#"><i class="fab fa-instagram"></i></a>
    </nav>
  </div>

</div>
<!--contenedor-->

<p class="copyright"> 
  Todos los derechos reservados ERIIA 2020 &copy;
</p> <!--Cambio en el nombre-->

</footer>

 <script src="js/vendor/modernizr-3.11.2.min.js"></script>
 <script src="js/plugins.js"></script>
 <script src="js/leaflet.js"></script>
 <script src="js/map.js"></script>
 <script src="jquery.js"></script>
 <script src="js/jquery.animateNumber.js"></script>
 <script src="js/jquery.countdown.js"></script>
 <script src="js/jquery.lettering.js"></script>
 <?php     
    $archivo = basename($_SERVER['PHP_SELF']); //retorna el nombre del archivo actual
    $pagina = str_replace(".php", "", $archivo);  //primero lo que quieres buscar, por qué reemplazar, y fuente de datos
    if($pagina == 'invitados' || $pagina == 'index'){
      echo '<script src="js/jquery.colorbox-min.js"></script>'; 
      echo '<script src="js/jquery.waypoints.min.js"></script>';
    } else if($pagina == 'conferencia'){
      echo  '<script src="js/lightbox.js"></script>';
    }
  
  ?>
<?php     
    $archivo = basename($_SERVER['PHP_SELF']); //retorna el nombre del archivo actual
    $pagina = str_replace(".php", "", $archivo);  //primero lo que quieres buscar, por qué reemplazar, y fuente de datos
    if($pagina == 'registro'){
      echo '<script src="js/formulario.js"></script>';
      echo '<script src="js/notscrool.js"></script>';
    }
  ?>
  <?php     
    $archivo = basename($_SERVER['PHP_SELF']); //retorna el nombre del archivo actual
    $pagina = str_replace(".php", "", $archivo);  //primero lo que quieres buscar, por qué reemplazar, y fuente de datos
    if($pagina == 'tyc' || $pagina == 'calendario' || $pagina == 'invitados' || $pagina == 'index'){
      echo '<script src="js/main.js"></script>';
    }
  ?>
 <script src="js/bootstrap.js"></script>
 <script src="js/menu.js"></script>
 
 


</body>

</html>