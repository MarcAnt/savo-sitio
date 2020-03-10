// /* Validar formularios*/

// const btnFormulario = document.getElementById('enviar'); 
// const rutaOculta = document.getElementById('rutaOculta'); 

// if(btnFormulario != undefined || btnFormulario != undefined) {

// 	btnFormulario.addEventListener('click', validarContactenos)
// }


// function validarContactenos(e){

//     var nombre = $("#nombreContactenos").val();
// 	var email = $("#emailContactenos").val();
// 	var mensaje = $("#mensajeContactenos").val();
// 	var telefono = $("#telefonoContactenos").val();
    
// 	/*=============================================
// 	VALIDACIÓN DEL NOMBRE
// 	=============================================*/	
//     let validaNombre = null, validaTelefono = null, validaEmail = null, validaMensaje = null
// 	if(nombre == ""){
        
//         $("#nombreContactenos").before('<h6 class="alert alert-danger">Escriba por favor el nombre</h6>');
// 		validaNombre = false
// 		$("#nombreContactenos").on('click', function() {
			
// 			if(document.querySelector('#nombreContactenos').parentElement.firstElementChild.classList[0] == 'alert') {
// 				document.querySelector('#nombreContactenos').parentElement.firstElementChild.remove()
// 			}
// 		})

// 	}else{

// 		var expresion = /^[a-zA-ZñÑáéíóúÁÉÍÓÚ ]*$/;	

// 		if(!expresion.test(nombre)){

// 			$("#nombreContactenos").before('<h6 class="alert alert-danger">Escriba por favor sólo letras sin caracteres especiales</h6>');
// 			validaNombre = false
			
// 			$("#nombreContactenos").on('click', function() {
			
// 				if(document.querySelector('#nombreContactenos').parentElement.firstElementChild.classList[0] == 'alert') {
// 					document.querySelector('#nombreContactenos').parentElement.firstElementChild.remove()
// 				}
// 			})

//         }else {
// 			$(".alert").remove(); 
//             validaNombre = true
//         }
        
//     }
   
    
// 	/*=============================================
// 	VALIDACIÓN DEL TELEFONO
// 	=============================================*/	

// 	if(telefono == ""){

// 		$("#telefonoContactenos").before('<h6 class="alert alert-danger">Escriba por favor el nombre</h6>');
        
// 		validaTelefono = false

// 		$("#telefonoContactenos").on('click', function() {
			
// 			if(document.querySelector('#telefonoContactenos').parentElement.firstElementChild.classList[0] == 'alert') {
// 				document.querySelector('#telefonoContactenos').parentElement.firstElementChild.remove()
// 			}
// 		})
		
// 	}else{

// 		var expresion = /^[0-9- ]*$/;	

// 		if(!expresion.test(telefono)){

// 			$("#telefonoContactenos").before('<h6 class="alert alert-danger">Escriba por favor el número telefónico</h6>');
            
// 			validaTelefono = false
			
// 			$("#telefonoContactenos").on('click', function() {
			
// 				if(document.querySelector('#telefonoContactenos').parentElement.firstElementChild.classList[0] == 'alert') {
// 					document.querySelector('#telefonoContactenos').parentElement.firstElementChild.remove()
// 				}
// 			})

// 		}else {
// 			validaTelefono = true
// 			$(".alert").remove(); 
//         }

// 	}

// 	/*=============================================
// 	VALIDACIÓN DEL EMAIL
// 	=============================================*/	

// 	if(email== ""){

// 		$("#emailContactenos").before('<h6 class="alert alert-danger">Escriba por favor el email</h6>');
         
// 		validaEmail = false

// 		$("#emailContactenos").on('click', function() {
			
// 			if(document.querySelector('#emailContactenos').parentElement.firstElementChild.classList[0] == 'alert') {
// 				document.querySelector('#emailContactenos').parentElement.firstElementChild.remove()
// 			}
// 		})


// 	}else{

// 		var expresion = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/;

// 		if(!expresion.test(email)){
			
// 			$("#emailContactenos").before('<h6 class="alert alert-danger">Escriba por favor correctamente el correo electrónico</h6>');
// 			validaEmail = false

// 			$("#emailContactenos").on('click', function() {
			
// 				if(document.querySelector('#emailContactenos').parentElement.firstElementChild.classList[0] == 'alert') {
// 					document.querySelector('#emailContactenos').parentElement.firstElementChild.remove()
// 				}
// 			})
	
// 		}else{
// 			validaEmail = true
// 			$(".alert").remove(); 
//         }	

// 	}

// 	/*=============================================
// 	VALIDACIÓN DEL MENSAJE
// 	=============================================*/	

// 	if(mensaje == ""){

// 		$("#mensajeContactenos").before('<h6 class="alert alert-danger">Escriba por favor un mensaje</h6>');
         
// 		validaMensaje = false
// 		$("#mensajeContactenos").on('click', function() {
			
// 			if(document.querySelector('#mensajeContactenos').parentElement.firstElementChild.classList[0] == 'alert') {
// 				document.querySelector('#mensajeContactenos').parentElement.firstElementChild.remove()
// 			}
// 		})


// 	}else{

// 		var expresion = /^[,\\.\\a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]*$/;

// 		if(!expresion.test(mensaje)){
			
// 			$("#mensajeContactenos").before('<h6 class="alert alert-danger">Escriba el mensaje sin caracteres especiales</h6>');
            
// 			validaMensaje = false
			
// 			$("#mensajeContactenos").on('click', function() {
			
// 				if(document.querySelector('#mensajeContactenos').parentElement.firstElementChild.classList[0] == 'alert') {
// 					document.querySelector('#mensajeContactenos').parentElement.firstElementChild.remove()
// 				}
// 			})

// 		}else{
// 			validaMensaje = true
// 			$(".alert").remove(); 
//         }	

// 	}

//     if(validaMensaje && validaNombre && validaTelefono && validaEmail) {
//         Swal.fire({
//             title: '¿Desea enviar el mensaje?',
//             icon: 'warning',
//             showCancelButton: true,
//             confirmButtonColor: '#3085d6',
//             cancelButtonColor: '#d33',
//             confirmButtonText: 'Sí'
//           }).then((result) => {
//             if (result.value) {
//               Swal.fire(
//                 'Enviado!',
//                 'Su mensaje ha sido envido. Revise su correo para mayor información',
//                 'success'
// 			  ).then((result) => {
// 				  window.location = rutaOculta.value
// 			  })
//             }
//           })

// 	}
	
	

// }

/*=============================================
VALIDACIÓN FORMULARIO CONTACTENOS
=============================================*/		

function validarContactenos(){

	var nombre = $("#nombreContactenos").val();
	var email = $("#emailContactenos").val();
	var mensaje = $("#mensajeContactenos").val();

	/*=============================================
	VALIDACIÓN DEL NOMBRE
	=============================================*/	

	if(nombre == ""){

		$("#nombreContactenos").before('<h6 class="alert alert-danger">Escriba por favor el nombre</h6>');

		return false;
		
	}else{

		var expresion = /^[a-zA-ZñÑáéíóúÁÉÍÓÚ ]*$/;	

		if(!expresion.test(nombre)){

			$("#nombreContactenos").before('<h6 class="alert alert-danger">Escriba por favor sólo letras sin caracteres especiales</h6>');

			return false;

		}

	}

	/*=============================================
	VALIDACIÓN DEL EMAIL
	=============================================*/	

	if(email== ""){

		$("#emailContactenos").before('<h6 class="alert alert-danger">Escriba por favor el email</h6>');
		
		return false;

	}else{

		var expresion = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/;

		if(!expresion.test(email)){
			
			$("#emailContactenos").before('<h6 class="alert alert-danger">Escriba por favor correctamente el correo electrónico</h6>');
			
			return false;
		}	

	}

	/*=============================================
	VALIDACIÓN DEL MENSAJE
	=============================================*/	

	if(mensaje == ""){

		$("#mensajeContactenos").before('<h6 class="alert alert-danger">Escriba por favor un mensaje</h6>');
		
		return false;

	}else{

		var expresion = /^[,\\.\\a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]*$/;

		if(!expresion.test(mensaje)){
			
			$("#mensajeContactenos").before('<h6 class="alert alert-danger">Escriba el mensaje sin caracteres especiales</h6>');
			
			return false;
		}	

	}

	return true;
}
