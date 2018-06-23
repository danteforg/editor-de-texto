$('.cambio').click(function(){
  //sdocument.getElementById("letras").innerHTML = "Inicio de Sesión"
  $('.global').animate({
    height: "toggle",
    'padding-top': 'toggle',
    'padding-bottom': 'toggle',
    opacity: 'toggle'
  }, "slow");
});

function RecuperarCon(){
  if($('.usuario')=="nana"){
     alert("Contraseña del suario: --..-..--");
  }else{
    alert("No funciono");
  }
}

function salida(){
   alert("HAS CERRADO SESION");
   document.location.href ="index.html";
}


function edit(){
  document.location.href= "editar.php";
}
// <<<<<<< Updated upstream


function descargar(){
	name="el nombre de tu documento";
	frame=document.getElementById('myTextarea'); //es el frame que usé para el editor
	doc =  frame.value; //saco como tal lo que está dentro del frame

	location.assign("php/download.php?name="+name+"&doc="+doc); //lo mando por get para descargarlo

}
// =======
// >>>>>>> Stashed changes

function otro(){
  document.location.href="pruebaeditor.php";
}
