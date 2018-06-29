$('.cambio').click(function(){
  //sdocument.getElementById("letras").innerHTML = "Inicio de Sesión"
  $('.global').animate({
    height: "toggle",
    'padding-top': 'toggle',
    'padding-bottom': 'toggle',
    opacity: 'toggle'
  }, "slow");
});


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


function mostrar(){
  document.getElementById("select").style.display = "block";
}

function ocultar(){
  document.getElementById("select").style.display = "none";
}

function mostrar2(){
  document.getElementById("select2").style.display = "block";
}

function ocultar2(){
  document.getElementById("select2").style.display = "none";
}

function MO(){
  var select = document.getElementById("select");

  if(select.style.display == "none"){
    mostrar();
    ocultar2();
  }else{
    ocultar();
  }
}

function MO2(){
  var select = document.getElementById("select2");

  if(select.style.display == "none"){
    mostrar2();
    ocultar();
  }else{
    ocultar2();
  }
}