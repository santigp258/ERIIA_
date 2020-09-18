<?php include_once 'includes/templates/header.php'; ?>

<section class="seccion contenedor">
  <h2>Encuentro Regional de <span>Ingenieria Industrial</span> y afines</p>
  </h2>
  <p class="descripcion">El mundo globalizado hoy ha sufrido un importante revés que ha afectado su normalidad, las cadenas de abastecimiento robustas y que sobrepasan las fronteras se han visto afectados por un organismo inerte que ha sumido la economía mundial en un letargo, cuyo pronóstico de recuperación superará la década para alcanzar el ritmo vertiginoso que venía trayendo. <br>
    <br>
    Es en este aspecto, que en el marco del décimo aniversario del Encuentro Regional de Ingeniería Industrial y Afines -ERIIA, hemos querido abordar un tema de gran interés para el sector comercial, empresarial y académico, pues éste será materia de importantes investigación en el próximo lustro, donde evaluaremos cuán preparados estamos para afrontar situaciones que en poco tiempo paralizaron la economía mundial. </p>
    <div class="brieferiia">
  <a class="brief" target="a_blank" href="https://drive.google.com/file/d/1CE5JvRniZT1g87v2d_NgkPBC9AKjcusc/view?usp=sharing">BRIEF ERIIA 2020</a>
</div>
</section>

<!--seccion-->

<section class="programa">
  <div class="contenedor-video">
    <div class="fondo">
      <img src="img/imgprograma.jpg">
    </div>
  </div>
  <!--contenedor-video-->

  <div class="contenido-programa">
    <div class="contenedor">
      <div class="programa-evento">

        <h2>Programa del evento</h2>
        <?php
        try {
          require_once('includes/funciones/bd_conexion.php');
          $sql = "SELECT * FROM `categoria_evento`; ";
          $resultado = $conn->query($sql);
        } catch (\Exception $e) {
          $error = $e->getMessage();
        }

        ?>

        <nav class="menu-programa">
          <?php while ($cat = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>
            <?php $categoria = $cat['cat_evento']; ?>
            <a href="#<?php echo strtolower($categoria); ?>">
              <i class="fas <?php echo $cat['icono']; ?>"></i> <?php echo $categoria ?></a>
          <?php } ?>
        </nav>

        <?php   
        try{
        require_once('includes/funciones/bd_conexion.php');
        $sql  = " SELECT evento_id, nombre_evento, fecha_evento, hora_evento, cat_evento, icono, nombre_invitado, apellido_invitado ";
        $sql .= " FROM eventos ";
        $sql .= " INNER JOIN categoria_evento ";
        $sql .= " ON eventos.id_cat_evento = categoria_evento.id_categoria ";
        $sql .= " INNER JOIN invitados ";
        $sql .= " ON eventos.id_inv = invitados.invitado_id ";
        $sql .= " AND eventos.id_cat_evento = 1 ";
        $sql .= " ORDER BY evento_id LIMIT 2;";
         
        $sql .= " SELECT evento_id, nombre_evento, fecha_evento, hora_evento, cat_evento, icono, nombre_invitado, apellido_invitado ";
        $sql .= " FROM eventos ";
        $sql .= " INNER JOIN categoria_evento ";
        $sql .= " ON eventos.id_cat_evento = categoria_evento.id_categoria ";
        $sql .= " INNER JOIN invitados ";
        $sql .= " ON eventos.id_inv = invitados.invitado_id ";
        $sql .= " AND eventos.id_cat_evento = 2 ";
        $sql .= " ORDER BY evento_id LIMIT 2;";
     } catch(\Exception $e){
             echo $e->getMessage();
     }
       ?>
      <?php  $conn->multi_query($sql);?>

      <?php

      do{
            $resultado = $conn->store_result();
            $row = $resultado->fetch_all(MYSQLI_ASSOC); ?>

            <?php $i = 0; ?>
            <?php  foreach($row as $evento): ?>
              <?php if($i % 2 == 0){ ?>
            <div id="<?php echo strtolower($evento['cat_evento']) ?>" class="info-curso ocultar clearfix">
            <?php  } ?>

            <div class="detalle-evento">
              <h3><?php echo $evento['nombre_evento'] ?></h3>
              <p><i class="far fa-clock"></i> <?php echo $evento['hora_evento']; ?></p>
            <p><i class="far fa-calendar-alt"></i><?php echo $evento['fecha_evento']; ?></p>
            <p><i class="far fa-user"></i><?php echo $evento['nombre_invitado'] . " " . $evento['apellido_invitado']; ?></p>
            </div> <!--primer evento-->
  
              
              <?php if($i % 2 == 1): ?>
                <a href="calendario.php" class="button float-right">Ver todos</a>
           </div> <!--talleres-->
              <?php  endif; ?>
           <?php  $i++; ?>
       <?php  endforeach; ?>
       <?php $resultado->free(); ?>
  <?php  } while($conn->more_results() && $conn->next_result()); ?>

      </div>
      <!--programa-evento-->

    </div>
    <!--contenedor--->
  </div>
  <!---contenido-programa-->

</section>
<!--programa-->
<?php include_once 'includes/templates/invitados.php'; ?>
<div class="contador parallax">
  <div class="contenedor">

    <ul class="resumen-evento clearfix">
      <li>
        <p class="numero"></p> Invitados
      </li>
      <li>
        <p class="numero"></p> Jornadas
      <li>
      <li>
        <p class="numero"></p> Días
      </li>
    </ul>

  </div>
  <!--contenedor-->
</div>
<!--parallax-->

<section class="seccion">
  <h2>Faltan</h2>
  <div class="cuenta-regresiva contenedor">
    <ul class="clearfix">
      <li>
        <p id="dias" class="numero"></p> días
      </li>
      <li>
        <p id="horas" class="numero"></p> horas
      </li>
      <li>
        <p id="minutos" class="numero"></p> minutos
      </li>
      <li>
        <p id="segundos" class="numero"></p> segundos
      </li>
    </ul>
  </div>
  <!--seccion-->
</section>




<?php include_once 'includes/templates/footer.php'; ?>