const formulario=document.getElementById('formulario-loan');
const inputs= document.querySelectorAll('#formulario-loan input');
const textareas= document.querySelectorAll('#formulario-loan textarea');

const expresiones ={
	
	idloan:/^[a-zA-Z0-9\_\-]{1,16}$/, // 7 a 14 numeros.
	dateloan:/^([0-2][0-9]|3[0-1])(\/|-)(0[1-9]|1[0-2])\2(\d{4})$/,
	estimateddate:/^([0-2][0-9]|3[0-1])(\/|-)(0[1-9]|1[0-2])\2(\d{4})$/,
	observations: /^[a-zA-ZÀ-ÿ\s]{1,40}$/ // Letras y espacios, pueden llevar acentos.

}

const campos = {
	idloan: false,
	dateloan: false,
	estimateddate: false,
	observations: false
}

const validarFormulario = (e) => {
	switch (e.target.name){
		case "idloan":
			validarCampo(expresiones.idloan, e.target, 'idloan');
		break;
	
		case "observations":
			validarCampo2(expresiones.observations, e.target, 'observations');
		break;
	}
}

const validarCampo = (expresion, input, campo) => {
	if (expresion.test(input.value)) {
		document.getElementById(`grupos__${campo}`).classList.remove('formulario__grupo-incorrecto');
		document.getElementById(`grupos__${campo}`).classList.add('formulario__grupo-correcto');
		document.querySelector(`#grupos__${campo} i`).classList.add('fa-check-circle');
		document.querySelector(`#grupos__${campo} i`).classList.remove('fa-times-circle');
		document.querySelector(`#grupos__${campo} .formulario__input-error`).classList.remove('formulario__input-error--activo');
		campos2[campo] = true;
	} else {
		document.getElementById(`grupos__${campo}`).classList.add('formulario__grupo-incorrecto');
		document.getElementById(`grupos__${campo}`).classList.remove('formulario__grupo-correcto');
		document.querySelector(`#grupos__${campo} i`).classList.add('fa-times-circle');
		document.querySelector(`#grupos__${campo} i`).classList.remove('fa-check-circle');
		document.querySelector(`#grupos__${campo} .formulario__input-error`).classList.add('formulario__input-error-activo');
		campos2[campo] = false;
	}
}
const validarCampo2 = (expresion, textarea, campo) => {
	if (expresion.test(textarea.value)) {
		document.getElementById(`grupos__${campo}`).classList.remove('formulario__grupo-incorrecto');
		document.getElementById(`grupos__${campo}`).classList.add('formulario__grupo-correcto');
		document.querySelector(`#grupos__${campo} i`).classList.add('fa-check-circle');
		document.querySelector(`#grupos__${campo} i`).classList.remove('fa-times-circle');
		document.querySelector(`#grupos__${campo} .formulario__input-error`).classList.remove('formulario__input-error--activo');
		campos[campo] = true;
	} else {
		document.getElementById(`grupos__${campo}`).classList.add('formulario__grupo-incorrecto');
		document.getElementById(`grupos__${campo}`).classList.remove('formulario__grupo-correcto');
		document.querySelector(`#grupos__${campo} i`).classList.add('fa-times-circle');
		document.querySelector(`#grupos__${campo} i`).classList.remove('fa-check-circle');
		document.querySelector(`#grupos__${campo} .formulario__input-error`).classList.add('formulario__input-error-activo');
		campos[campo] = false;
	}
}

textareas.forEach((textarea) => {
	textarea.addEventListener('keyup', validarFormulario);
	textarea.addEventListener('blur', validarFormulario);
});
inputs.forEach((input) => {
	input.addEventListener('keyup', validarFormulario);
	input.addEventListener('blur', validarFormulario);
});

formulario.addEventListener('submit', (e) => {
	

	document.getElementById('formulario__mensajes').classList.add('formulario__mensaje-activo');
		e.preventDefault();
	
});



