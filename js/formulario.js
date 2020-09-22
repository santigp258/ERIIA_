const formulario = document.getElementById('formulario');
const inputs = document.querySelectorAll('#formulario input');
const selects = document.querySelectorAll('#formulario select');

const expresiones = {
	nombre: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
	apellido: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, 		// Letras, numeros, guion y guion_bajo
	password: /^.{4,12}$/, // 4 a 12 digitos.
	email: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
	telefono: /^\d{7,14}$/, // 7 a 14 numeros.
	pais:/^[a-zA-ZÀ-ÿ\s]{1,25}$/,
	ciudad: /^[a-zA-ZÀ-ÿ\s]{1,20}$/,
	direccion: /^[a-zA-Z0-9À-ÿ#-_\s]{1,50}$/   //admite guiones, espacios en blanco, todo tipo de letras
}

const campos = {
	nombre: false,
	apellido: false,
	email: false,
	telefono: false,
	pais: false, 
	ocupacion: false, 
	departamento: false, 
	ciudad: false, 
	direccion: false,
}

const validarFormulario = (e) => {
	switch (e.target.name) {
		case "nombre":
			validarCampo(expresiones.nombre, e.target, 'nombre');
		break;
		case "apellido":
			validarCampo(expresiones.apellido, e.target, 'apellido');
		break;
		case "email":
			validarCampo(expresiones.email, e.target, 'email');
		break;
		case "telefono":
			validarCampo(expresiones.telefono, e.target, 'telefono');
		break;
		case "pais":
			validarCampo(expresiones.pais, e.target, 'pais');
		break;
		case "ocupacion":
			validar(); 
		break;
		case "departamento":
			validar();
		break;
		case "ciudad":
			validarCampo(expresiones.ciudad, e.target, 'ciudad');
		break;
		case "direccion":
			validarCampo(expresiones.direccion, e.target, 'direccion');
		break;

	}
}

const validarCampo = (expresion, input, campo) => {
	if(expresion.test(input.value)){
		document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-incorrecto');
		document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-correcto');
		document.querySelector(`#grupo__${campo} i`).classList.add('fa-check-circle');
		document.querySelector(`#grupo__${campo} i`).classList.remove('fa-times-circle');
		document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.remove('formulario__input-error-activo');
		campos[campo] = true;
	} else {
		document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-incorrecto');
		document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-correcto');
		document.querySelector(`#grupo__${campo} i`).classList.add('fa-times-circle');
		document.querySelector(`#grupo__${campo} i`).classList.remove('fa-check-circle');
		document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.add('formulario__input-error-activo');
		campos[campo] = false;
	}
}

function validar(){
	var departamento= document.getElementById('departamento');
	if(departamento.value==0 ||
	 departamento.value == "") {
		document.querySelector(`#grupo__departamento .formulario__input-error`).classList.add('formulario__input-error-activo');
		campos['departamento'] = false;
	  } else{
		document.querySelector(`#grupo__departamento .formulario__input-error`).classList.remove('formulario__input-error-activo');
		campos['departamento'] = true;
	  }

	  var ocupacion= document.getElementById('ocupacion');
	  if(ocupacion.value==0 ||
		ocupacion.value == "") {
		   document.querySelector(`#grupo__ocupacion .formulario__input-error`).classList.add('formulario__input-error-activo');
		   campos['ocupacion'] = false;
		 } else{
		   document.querySelector(`#grupo__ocupacion .formulario__input-error`).classList.remove('formulario__input-error-activo');
		   campos['ocupacion'] = true;
		 }
	}


inputs.forEach((input) => {
	input.addEventListener('keyup', validarFormulario);
	input.addEventListener('blur', validarFormulario);
});

selects.forEach((select) => {
	select.addEventListener('blur', validar);
});

formulario.addEventListener('submit', (e) => {
	

	const tyc = document.getElementById('tyc');
	if(campos.nombre && campos.apellido && campos.email && campos.telefono && campos.pais && campos.ocupacion && campos.departamento && campos.ciudad && campos.direccion && tyc.checked ){
		
		document.getElementById('formulario__mensaje-exito').classList.add('formulario__mensaje-exito-activo');
		setTimeout(() => {
			document.getElementById('formulario__mensaje-exito').classList.remove('formulario__mensaje-exito-activo');
		}, 5000);

		document.querySelectorAll('.formulario__grupo-correcto').forEach((icono) => {
			icono.classList.remove('formulario__grupo-correcto');
		});
		document.getElementById('formulario__mensaje').classList.remove('formulario__mensaje-activo');
	} else {
		e.preventDefault(); //previene que se envie
		document.getElementById('formulario__mensaje').classList.add('formulario__mensaje-activo');
	}
});