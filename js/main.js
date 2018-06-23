

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
  document.location.href="pruebaeditor.php";
}
// <<<<<<< Updated upstream


function descargar(){
	name=document.getElementById('docName').value;
	frame=document.getElementById('myTextarea_ifr');
  console.log(frame);
	doc =  frame.src;

	location.assign("php/descarga.php?name="+name+"&doc="+doc); //Get para descargarlo

}
// =======
// >>>>>>> Stashed changes

function otro(){
}
