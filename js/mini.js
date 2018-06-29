var editor;
function $(id){
    return document.getElementById(id);
}
function formato(f){
    editor.execCommand(f, false, null);
}
function rev(t)    {
    return t.split("<").join("&lt;").split(">").join("&gt;").split("\"").join("&quot;");
}
function insertarEnlace(){
    var u;
    if(!(u=prompt('ingresar url','http://')))return;
    editor.execCommand("CreateLink",false,u);
}
function insertarImagen(){
    var u;
    if(!(u=prompt('ingresar url','http://')))return;
    editor.body.focus();
    editor.execCommand("InsertImage",false,u);
}
function color(c){
    editor.execCommand("forecolor",false,c);
}
function colorFondo(c){
    var h=window.ActiveXObject?'backcolor':'hilitecolor';
    editor.execCommand(h,false,c);
}
function inHTML(){
    var u,u2;
    if(!(u=prompt('ingresar html','')))return;
        try{
            editor.execCommand("inserthtml",false,u);
        }catch(e){
            try{
                editor.body.focus();
                u2=editor.selection.createRange();
                u2.pasteHTML(u);
            }catch(E){
                alert('nop');
            }
        }
}
function fontSize(){
    var fuente = document.getElementById('font').value;

    editor.execCommand("fontSize", false, fuente);
}
function guardar() {

    var docN = prompt("Nombre del archivo:", "");
    if (docN != "") {
        document.getElementById("docName").innerHTML =
        docN;
        localStorage.setItem("documento",docN);
        user = localStorage.getItem('user');
        id = localStorage.getItem('idDueño');
        name = localStorage.getItem('document');
        usuario = document.getElementById('docunames');
        flag = localStorage.getItem('flag');

        save = new XMLHttpRequest();
        save.open('POST', 'php/guardar.php');
        save.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

        save.send('user=' + user + '&id=' + id + '&name=' + name);
    }else {
      prompt("Ingresa un nombre por favor", "");
    }

    // var archivo = document.getElementById("docName").value;
}

function escribir(name) {
	frame=document.getElementById('editar');
	texto =  frame.contentWindow.document.body.innerHTML;
	nombre = '../Docs/'+name+ '.txt';
	ajaxEscribir = new XMLHttpRequest();
	ajaxEscribir.open('POST', 'php/documento.php');

	ajaxEscribir.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

	ajaxEscribir.send('texto=' + texto + '&nombre=' + nombre);

	ajaxEscribir.onreadystatechange = function() {
		if (ajaxEscribir.readyState == 4 && ajaxEscribir.status == 200){
			respuesta=ajaxEscribir.responseText;

			if (respuesta=="modificadook" || respuesta=="creadook") {
				alert("Se ha guardado el documento...");
			}else{
				alert('Ups! Ocurrió un error... Inténtalo de nuevo!');
			}
		}
	}
}

function descargar(){
	name=localStorage.getItem('documento');
  console.log(name);
	frame=document.getElementById('editar');
  console.log(frame);
	doc =  frame.contentWindow.document.body.innerHTML;

	location.assign("php/descarga.php?name="+name+"&doc="+doc); //Get para descargarlo

}
// function htmlOEditor(e){
// e=e || window.event;
// ob=e.target || e.srcElement
// $('edit').style.display=(ob.value=='html')?'none':'block';
// $('ht').style.display=(ob.value!='html')?'none':'block';
// $('ht').innerHTML=rev(editor.body.innerHTML);
// ob.value=(ob.value=='html')?'editor':'html';
// }
function load(){
  editor=$('editar').contentDocument || $('editar').contentWindow.document;
  editor.designMode='on';
}