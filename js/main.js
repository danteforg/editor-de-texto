$('.cambio').click(function(){
  $('.global').animate({
    height: "toggle",
    'padding-top': 'toggle',
    'padding-bottom': 'toggle',
    opacity: 'toggle'
  }, "slow");
});


tinymce.init({
          selector: "#myTextarea",

          theme: "modern",
          skin: "lightgray",

          width: "99.85%",
          heigth: "80%",

          statubar: true,

          plugins:[
            "advlist autolink link image lists charmap print preview hr anchor pagebreak",
            "searchreplace wordcount visualblocks visualchars code fullscreen media nonbreaking",
            "save table contextmenu directionality emoticons template paste textcolor"
          ],

          toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons"


        });

function RecuperarCon(){
  if($('.usuario')=="nana"){
     alert("Contraseña del suario: --..-..--");
  }else{
    alert("No funciono");
  }
}

function salida(){
   alert("HAZ CERRADO SESION");
   document.location.href ="index.html";
}


function nueva(){
  document.location.href="editar.html";
}
<<<<<<< Updated upstream

function segund(){
  document.location.href="preview.html";
}
=======
>>>>>>> Stashed changes
