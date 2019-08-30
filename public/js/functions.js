/*** REGISTER ***/
function modalImin(_msj , _tipo){
	if(_tipo == 'exito'){
		$('.simbolo i').attr('class','icon-ok-circled modalC-ok');
	}
	else if(_tipo == 'error'){
		$('.simbolo i').attr('class','icon-cancel-circled modalC-error');
	}
	$('.modalCentral p').text(_msj);

	$('.modalCentral').stop().removeClass('fadeOut').addClass('jackInTheBox fadeIn').show().one("animationend webkitAnimationEnd oAnimationEnd MSAnimationEnd", function(){
		$(this).css('display', 'block');
	});
}


function registro_crear(msj){
	var error = '';
	if (msj.statusText == 'Error'){
		if (msj.responseJSON.length == undefined){
			for (var aux in msj.responseJSON) {
				error += (eval('msj.responseJSON.' + aux)) + '\n';
			}
			var contador = 0;
			for (var key in msj.responseJSON) {
				contador++;
			}
			if(contador == 1){
				if(msj.responseText.includes("usuario field must contain a unique value")){
					error = "Ya existe un usuario con ese nombre";
				}
				else if(msj.responseText.includes("email field must contain a unique value")){
					error = "Ya existe un usuario con ese e-mail";
				}
				else{
					error = 'El campo ' + Object.keys(msj.responseJSON)[0] + " esta incompleto o mal escrito";
				}

			}
			else{
				error = 'Los campos ';
				for (var key in msj.responseJSON) {
					switch (key) {
						case 'fecha_nacimiento': error += "Fecha de Nacimiento , "; break;
						case 'id_deporte': error += "Deporte , "; break;
						case 'id_pais_nac': error += "Nacionalidad , "; break;
						case 'tipo_cuenta': error += "Tipo de Cuenta , "; break;
						case 'id_pais_res': error += "Residencia , "; break;
						case 'password': error += "Contraseña , "; break;
						case 'confirm_password': error += "Confirmar contraseña , "; break;
						default: error += capitalize(key) + " , ";break;
					}
				}
				error += ' estan incompletos o mal escritos';
			}
		} else {
			error = "Error 015687";
		}
		modalImin(error , 'error');
	} else {
		var datos = { url: base_url + '/login/login' , form: {usuario: msj.responseJSON.usuario, password: msj.responseJSON.password} };
		ajax_call('login_verificar' , datos);
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
		modalImin('Los datos para iniciar sesión son erroneos.','error');
		$body.removeClass("loading");
	} else {
		console.log(msj);
   		window.location.href = "miperfil";
	}
}

function cargar_inpu_deportes(msj){
	var data_deporte = msj.responseJSON;

	remplazar_y_renderizar(data_deporte, 'option_deporte' , true);
	$('.contenedor_option_deporte').prepend('<option value="" SELECTED>Elíge tu Deporte</option>');

	var $options = $("#contenedor_option_deporte > option").clone();
	$('#contenedor_option_deporte_club').append($options);
}

function cargar_inpu_paises(msj){
	var data_paises = msj.responseJSON;

	remplazar_y_renderizar(data_paises, 'option_nacionalidad', true);
	$('.contenedor_option_nacionalidad').prepend('<option value="" SELECTED>Nacionalidad</option>');

	var $options = $("#contenedor_option_nacionalidad > option").clone();
	$('#contenedor_option_nacionalidad_club , #contenedor_option_nacionalidad_empresa').append($options);

	remplazar_y_renderizar(data_paises, 'option_residencia', true);
	$('.contenedor_option_residencia').prepend('<option value="" SELECTED>País de Residencia</option>');
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
	/*
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
  	});*/
}

function montoAPagar() {
	var _val = $('#planDePago').val();
	return 'U$D ' + (_val * 5) + ',00';
}

function check(e,value){
	//Check Charater
	var unicode=e.charCode? e.charCode : e.keyCode;
	if (value.indexOf(".") != -1)if( unicode == 46 )return false;
	if (unicode!=8)if((unicode<48||unicode>57)&&unicode!=46)return false;
}

function checkLength(len,ele){
	var fieldLength = ele.value.length;
	if(fieldLength <= len){
		return true;
	}
	else
	{
		var str = ele.value;
		str = str.substring(0, str.length - 1);
		ele.value = str;
	}
}

function setearIonSlider(_id , _valor) {
	var instance = $(_id).data("ionRangeSlider");
	instance.update({from: _valor});
}
