/*** REGISTER ***/
$(document).on('click', '#btnRegistarCuenta', function(e){
	$body.addClass("loading");
	var datos = { url: base_url + '/register' , form: $('#registerForm').serialize() };
	ajax_call('registro_crear', datos);
});

function registro_crear(msj){
	var error = '';
	if (msj.statusText == 'Error'){
		if (msj.responseJSON.length == undefined){
			for (var aux in msj.responseJSON) {
				error += (eval('msj.responseJSON.' + aux)) + '\n';
			}
		} else {
			error = msj.responseJSON;
		}

		swal({
			title: 'Error!',
			text: error,
			type: 'error',
			animation: false,
			customClass: 'animated tada'
		});
		$body.removeClass("loading");
	} else {
		swal({
			title: 'Hecho!',
			text: msj.responseJSON.mensaje,
			type: 'success',
		}).then(function(isConfirm){
            console.log(msj.responseJSON.id);
			var datos = { url: base_url + '/login/login' , form: {usuario: msj.responseJSON.usuario, password: msj.responseJSON.password} };
			ajax_call('login_verificar' , datos);
		});
	}
}

/*** LOGIN ***/
$('#downMenu').on('click', function(){
    if($(this).hasClass('icon-menu')){
        $(this).removeClass('icon-menu').addClass( 'icon-cancel-2');
        $('.contenedor').css('filter', 'blur(10px) brightness(50%)');
        $('.moverDer , .menuDesplegable').css('transform', 'translateX(300px)');
    }
    else{
        $(this).removeClass('icon-cancel-2').addClass( 'icon-menu');
        $('.moverDer , .menuDesplegable').css('transform', 'translateX(0)');
        $('.contenedor').css('filter', 'blur(0) brightness(100%)');
    }
});

$('#btnRegistro').on('click', function () {
    $('#modalRegistro').css("top","50px");
});

$('#btnLogin').on('click', function () {
    $('#modalLogin').css("top","50px");
});

$('.volverInicio').on('click' , function () {
    $('.modalPantallaCompleta').css("top","-100%");
});

$('#login-btn').on('click', function(e){
	e.preventDefault();
	$body.addClass("loading");
	var datos = { url: base_url + '/login/login' , form: $('#loginForm').serialize() };
	ajax_call('login_verificar', datos);
});

function login_verificar(msj){
	var error = '';
	if (msj.statusText == 'Error'){
		if (msj.responseJSON.length == undefined){
			for (var aux in msj.responseJSON) {
				error += (eval('msj.responseJSON.' + aux)) + '\n';
			}
		} else {
			error = msj.responseJSON;
		}
		swal({
			title: 'Error!',
			text: error,
			type: 'error',
			animation: true,
			customClass: 'animated tada'
		});
		$body.removeClass("loading");
	} else {
   		location.reload();
	}
}

function cargar_inpu_deportes(msj){
	var data_deporte = msj.responseJSON;

	remplazar_y_renderizar(data_deporte, 'option_deporte');
	$('#contenedor_option_deporte').prepend('<option value="" SELECTED>Elíge tu Deporte</option>');

	var $options = $("#contenedor_option_deporte > option").clone();
	$('#contenedor_option_deporte_club').append($options);
}

function cargar_inpu_paises(msj){
	var data_paises = msj.responseJSON;

	remplazar_y_renderizar(data_paises, 'option_nacionalidad');
	$('#contenedor_option_nacionalidad').prepend('<option value="" SELECTED>Nacionalidad</option>');

	var $options = $("#contenedor_option_nacionalidad > option").clone();
	$('#contenedor_option_nacionalidad_club , #contenedor_option_nacionalidad_empresa').append($options);


	remplazar_y_renderizar(data_paises, 'option_residencia');
	$('#contenedor_option_residencia').prepend('<option value="" SELECTED>País de Residencia</option>');
}

/*** CAMBIAR IMAGEN ***/
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#image-avatar').attr('src', e.target.result)
        };
        reader.readAsDataURL(input.files[0]);
		setTimeout(initCropper, 1000);
    }
}

function initCropper(){
  	var image = document.getElementById('image-avatar');
  	var cropper = new Cropper(image, {
    	aspectRatio: 1 / 1,
  	});

  	document.getElementById('crop_button').addEventListener('click', function(){
      	var imgurl =  cropper.getCroppedCanvas().toDataURL();
      	var img = document.createElement("img");
      	img.src = imgurl;

      	var imagen_base64 = cropper.getCroppedCanvas().toDataURL();

      	$("#imagenAvatar").attr("src", imagen_base64);
		$('#modalCropperAvatar').modal('hide');
  	});
}
