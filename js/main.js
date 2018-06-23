

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

function inicio(){
  document.location.href ="preview.html";
}


function edit(){
  document.location.href="pruebaeditor.php";
}
// <<<<<<< Updated upstream



// =======
// >>>>>>> Stashed changes

function otro(){
}
