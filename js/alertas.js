function objetoAjax(){
		var xmlhttp = false;
		try {
			xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
		} catch (e) {

			try {
				xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			} catch (E) {
				xmlhttp = false; }
		}

		if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
		  xmlhttp = new XMLHttpRequest();
		}
		return xmlhttp;
	}

function showAlerts(alert, color, time){
			alertmsj = document.getElementById('alertmsj');
			alertmsj.innerHTML = alert;
			alertmsj.style.transition = ".5s all";
			alertmsj.style.top = "0px";
			alertmsj.style.backgroundColor = color;
			// Desaparecer
			
			setTimeout(function(){
				alertmsj.style.top ="-80px";
			},time);
		}
		function login(){
			usuario = document.getElementById('usernameLogin');
			password = document.getElementById('passwordLogin');

			// Validaciones
			// Validar datos vacios para usuario o password
			if (usuario.value == "") {
				usuario.style.border="3px solid red";
				usuarioColocado = false;
				verMensaje('Favor de completar los campos seleccionados.');
				return false;
		}
			else{
				usuarioColocado = true;
			}


			if (password.value == "") {
				password.style.border="3px solid red";
				passwordColocado = false;
				verMensaje('Favor de completar los campos seleccionados.');
				return false;
			}
			else{
				passwordColocado = true;
			}

			if (usuarioColocado && passwordColocado) {
				return true;
					//document.location.href ="php/login.php";
			}

		}

		function registro(){
			nombre = document.getElementById('fullname');
			correo = document.getElementById('email');
			usuario = document.getElementById('username');
			pass1 = document.getElementById('password');
			pass2 = document.getElementById('confirm-_password');

			if (nombre.value == "" || correo.value == "" || usuario.value == "" || pass1.value == "" || pass2.value == "") {
				verMensaje('Favor de completar todos los campos');
				return false;
			}
			else{
				
				if (pass1.value != pass2.value){
					verMensaje('Las contraseñas no coinciden, revisalas para continuar');
					return false;
				}
				else if(pass1.value==pass2.value){
					return true;
					console.log('No hay problema, puede continuar...')
				}
			}
		}

		function verMensaje(msj){
			mensaje = document.getElementById('mensaje');
			mensaje.innerHTML = msj;
			mensaje.style.transition = ".5s all";
			mensaje.style.top = "0px";

			// Desaparecer
			setTimeout(function(){
				mensaje.style.top ="-80px";
			},5000);
		}

		window.addEventListener('offline', desconectado, true);
		window.addEventListener('online', conectado, true);

		var desconectadoInternet = false;

		function desconectado(){
			verMensaje('Por favor revisa tu conexión a internet');
			desconectadoInternet = true;
		}

		function conectado(){
			verMensaje('Ya hay internet!');
			desconectadoInternet = false;
		}

