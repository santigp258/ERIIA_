<?php   include_once 'includes/templates/header.php'; ?>

<section class="seccion form">
<h2>Inscríbete</h2>
<form class="formulario" id="formulario" action="validar_registro.php" method="post"> 
			<!-- Grupo: Nombre -->
			<div class="formulario__grupo" id="grupo__nombre">
				<label for="nombre" class="formulario__label">Nombre</label>
				<div class="formulario__grupo-input">
					<input type="text" class="formulario__input" name="nombre" id="nombre" placeholder="Juan José">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">El nombre no debe tener números, simbolos o cualquier otro caracter especial. </p>
			</div>

			<!-- Grupo: Apellido -->
			<div class="formulario__grupo" id="grupo__apellido">
				<label for="Apellido" class="formulario__label">Apellido</label>
				<div class="formulario__grupo-input">
					<input type="text" class="formulario__input" name="apellido" id="apellido" placeholder="Martinez Lara">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">El apellido no debe tener números, simbolos o cualquier otro caracter especial.</p>
			</div>

			<!-- Grupo: Correo Electronico -->
			<div class="formulario__grupo" id="grupo__email">
				<label for="email" class="formulario__label">Email</label>
				<div class="formulario__grupo-input">
					<input type="email" class="formulario__input" name="email" id="email" placeholder="email@email.com">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">El email solo puede contener letras, numeros, puntos, guiones y guion bajo.</p>
			</div>

			<!-- Grupo: Teléfono -->
			<div class="formulario__grupo" id="grupo__telefono">
				<label for="telefono" class="formulario__label">Teléfono</label>
				<div class="formulario__grupo-input">
					<input type="text" class="formulario__input" name="telefono" id="telefono" placeholder="3103456780">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">El telefono solo puede contener numeros y el maximo son 14 dígitos.</p>
			</div>
    
				<div class="formulario__grupo" id="grupo__ocupacion">
				  <label for="ocupacion">Ocupación</label>
				  <select id="ocupacion" name="id_ocupacion" class="browser-default custom-select">
					<option selected value="">--Seleccione--</option>
					<option value="1">Estudiante</option>
					<option value="2">Profesor</option>
					<option value="3">Particular</option>
				</select>
				<p class="formulario__input-error">Por favor, seleccione una opción valida.</p>
				</div> <!-- ocupación -->
			
				<div class="formulario__grupo" id="grupo__departamento">
				  <label for="departamento">Departamento</label>
				  <select id="departamento" name="departamento" class="browser-default custom-select">
					<option value="">--Seleccione--</option>
					<option value="1">Amazonas</option>
					<option value="2">Antioquía</option>
					<option value="3">Arauca</option>
					<option value="4">Atlántico</option>
					<option value="5">Bolivar</option>
					<option value="6">Boyacá</option>
					<option value="7">Caldas</option>
					<option value="8">Caquetá</option>
					<option value="9">Casanare</option>
					<option value="10">Cauca</option>
					<option value="11">Cesar</option>
					<option value="12">Chocó</option>
					<option value="13">Córdoba</option>
					<option value="14">Cundinamarca</option>
					<option value="15">Guainía</option>
					<option value="16">Guaviare</option>
					<option value="17">Huila</option>
					<option value="18">La Guajira</option>
					<option value="19">Magdalena</option>
					<option value="20">Meta</option>
					<option value="21">Nariño</option>
					<option value="22">Norte de Santander</option>
					<option value="23">Putumayo</option>
					<option value="24">Quindío</option>
					<option value="25">Risaralda</option>
					<option value="26">San Andrés y Providencia</option>
					<option value="27">Santander</option>
					<option value="28">Sucre</option>
					<option value="29">Tolima</option>
					<option value="30">Valle del Cauca</option>
					<option value="31">Vaupés</option>
					<option value="32">Vichada</option>
				  </select>
				  <p class="formulario__input-error">Por favor, seleccione una opción valida.</p>
				</div>  <!-- departamento -->
				
			<div class="formulario__grupo" id="grupo__ciudad">
				<label for="ciudad" class="formulario__label">Ciudad</label>
				<div class="formulario__grupo-input">
					<input type="text" class="formulario__input" name="ciudad" id="ciudad" placeholder="Bucaramanga">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">Este campo no debe tener números, simbolos o cualquier otro caracter especial.</p>
			</div> <!-- ciudad -->
	
				<div class="formulario__grupo" id="grupo__direccion">
					<label for="ciudad" class="formulario__label">Direccion</label>
					<div class="formulario__grupo-input">
						<input type="text" class="formulario__input" name="direccion" id="direccion" placeholder="Cra 1 #2-80">
						<i class="formulario__validacion-estado fas fa-times-circle"></i>
					</div>
					<p class="formulario__input-error">Este campo puede contene números y caracteres especiales tales como almohadilla (#), guion bajo, guion medio, puntos, etc. </p>
				</div> <!-- direccion -->

			<!-- Grupo: Terminos y Condiciones -->
			<div class="formulario__grupo" id="grupo__terminos">
				<label class="formulario__label">
					<input class="formulario__checkbox" type="checkbox" name="tyc" id="tyc" data-toggle="modal" data-target="#exampleModalLong">
					Acepto los <a href="tyc.php" target="a_blank">Términos y condiciones</a>
				</label>
			</div>

			<div class="formulario__mensaje" id="formulario__mensaje">
				<p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Por favor rellena el formulario correctamente. </p>
			</div>

			<div class="formulario__grupo formulario__grupo-btn-enviar">
				<button type="submit" class="formulario__btn" name="submit">Enviar</button>
				<p class="formulario__mensaje-exito" id="formulario__mensaje-exito">Formulario enviado exitosamente!</p>
			</div>
		</form>
  
</section>


<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Términos y Condiciones</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <p class="justifi">El participante acepta irrevocablemente las siguientes condiciones generales:

El participante declara conocer que la realización de cualquier evento llevado a cabo por el ICDT no depende exclusivamente del ICDT sino también de sus aliados, conferencistas y de los propietarios de los lugares donde se realicen, entre otros, de tal manera que, en caso de ser necesario el ICDT se reserva el derecho de modificar las fechas, los horarios, el lugar,así como la programación de los conferencistas y contenido temático por razones de fuerza mayor.
La no asistencia al evento por parte del participante y la no información oportuna por parte de éste, de acuerdo con las condiciones antes mencionadas, no generará ningún tipo de reembolso de dinero ni de retracto al compromiso presentado, de tal manera que los valores pagados NO se devolverán y las ordenes de servicio se entenderán ejecutadas para continuar con el proceso defacturación. Entiéndase el compromiso como el diligenciamiento del formato de pre-inscripción, envío de la orden de compra, orden de servicio, CDP,Orden contractual, carta de compromiso u otro documento que se considere apto para realizar la reserva oficial al evento.
En el caso de eventos en modalidad online,el ICDT enviará previamente al correo registrado por el participante, un link único de acceso. Este es de uso personal e intransferible, por lo que en caso de compartirlo será anulado. <br><br>
En los eventos de educación informal, el cumplimiento por asistencia constituye el requisito indispensable para otorgar el certificado correspondiente. Se entenderá cumplido el requisito de asistencia, cuando se verifique la presencia activa del participante como mínimo del 80% de las horas efectivamente dictadas en el respectivo evento académico. <br><br>
El participante acepta que la información registrada en el sistema del ICDT, así como de las transacciones efectuadas es de propiedad del ICDT; quien está autorizado para dar usos comerciales sin afectar en ningún caso la intimidad y seguridad de los usuarios. <br><br>
Cualquier diferencia surgida entre las partes será dirimida en derecho, aplicando la legislación colombiana. El participante se obliga a hacer cualquier reclamación directamente al ICDT y usar todos los métodos alternativos de solución de conflictos.

<br><br>

TÉRMINOS Y CONDICIONES DE USO PROPIEDAD INTELECTUAL Y DERECHOS DE AUTOR
todo documento y/o material que esté protegido por los derechos de autor y de propiedad intelectual y que pertenezca al  Instituto Colombiano de  derecho tributario – en adelante ICDT se rigen por la normatividad Colombiana de protección a los derechos de autor.Los términos y condiciones, se entienden aceptados cuando el usuario acceda a documentos, audios, videos, archivos, contenido textual y gráfico de su sitio web, obras literarias y demás publicaciones del ICDT y de aquellas sobre las que haya obtenido la cesión de los derechos patrimoniales de autor, y demás información relacionada y de propiedad del ICDT, así como los logotipos, marcas, diseños, texto, videos, presentaciones, sonidos u otro distintivo del ICDT, (en adelante el “contenido”), según se menciona en el aviso de derechos de autor, en caso de no estar de acuerdo con los mismos, el usuario debe abstenerse inmediatamente de utilizarlos y devolver el contenido a ICDT.
</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Aceptar</button>
      </div>
    </div>
  </div>
</div>

<?php   include_once 'includes/templates/footer.php'; ?>