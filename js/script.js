{

}

var tam = 15;

function mudaFonte(tipo,elemento){
	if (tipo=="mais") {
		if(tam<24) tam+=1;
		createCookie("fonte",tam,365);
	} else {
		if(tam>10) tam-=1;
		createCookie("fonte",tam,365);
	}
	document.getElementById("txt_home").style.fontSize = tam+"px";

}

function createCookie(name,value,days) {
	if (days) {
		var date = new Date();
		date.setTime(date.getTime()+(days*24*60*60*1000));
		var expires = "; expires="+date.toGMTString();
	} else var expires = "";
	document.cookie = name+"="+value+expires+"; path=/";
}

function readCookie(name) {
	var nameEQ = name + "=";
	var ca = document.cookie.split(";");
	for(var i=0;i < ca.length;i++)
	{
		var c = ca[i];
		while (c.charAt(0)==" ") c = c.substring(1,c.length);
		if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
	}
	return null;
}

//Botão mais e menos

function duplicarCamposArtigos(){
	var clone = document.getElementById('origemArtigos').cloneNode(true);
	var destino = document.getElementById('destinoArtigos');
	destino.appendChild (clone);
	var camposClonados = clone.getElementsByTagName('input');
	for(i=0; i<camposClonados.length;i++){
		camposClonados[i].value = '';
	}
}
function removerCamposArtigos(id){
	var node1 = document.getElementById('destinoArtigos');
	node1.removeChild(node1.childNodes[0]);
}


function duplicarCamposBanner(){
	var clone = document.getElementById('origemBanner').cloneNode(true);
	var destino = document.getElementById('destinoBanner');
	destino.appendChild (clone);
	var camposClonados = clone.getElementsByTagName('input');
	for(i=0; i<camposClonados.length;i++){
		camposClonados[i].value = '';
	}
}
function removerCamposBanner(id){
	var node1 = document.getElementById('destinoBanner');
	node1.removeChild(node1.childNodes[0]);
}

function duplicarCamposOficinas(){
	var clone = document.getElementById('origemOficinas').cloneNode(true);
	var destino = document.getElementById('destinoOficinas');
	destino.appendChild (clone);
	var camposClonados = clone.getElementsByTagName('input');
	for(i=0; i<camposClonados.length;i++){
		camposClonados[i].value = '';
	}
}
function removerCamposOficinas(id){
	var node1 = document.getElementById('destinoOficinas');
	node1.removeChild(node1.childNodes[0]);
}
	
// Campos de Validação

// Inscrição:

function validacaoEmailInsc(field) 
{
	usuario = field.value.substring(0, field.value.indexOf("@"));
	dominio = field.value.substring(field.value.indexOf("@")+ 1, field.value.length);

	if ((usuario.length >=1) &&
	    (dominio.length >=3) && 
	    (usuario.search("@")==-1) && 
	    (dominio.search("@")==-1) &&
	    (usuario.search(" ")==-1) && 
	    (dominio.search(" ")==-1) &&
	    (dominio.search(".")!=-1) &&      
	    (dominio.indexOf(".") >=1)&& 
	    (dominio.lastIndexOf(".") < dominio.length - 1)) 
	{
			
	}
	else{
		alert("E-mail invalido");
	}
}

function validaMail (input){ 
    if (input.value != document.getElementById('mail').value) {
    input.setCustomValidity('Email diferente!');
  } else {
    input.setCustomValidity('');
  }
} 

//Submissoes:

function validacaoEmailContato(field) 
{
	usuario = field.value.substring(0, field.value.indexOf("@"));
	dominio = field.value.substring(field.value.indexOf("@")+ 1, field.value.length);

	if ((usuario.length >=1) &&
	    (dominio.length >=3) && 
	    (usuario.search("@")==-1) && 
	    (dominio.search("@")==-1) &&
	    (usuario.search(" ")==-1) && 
	    (dominio.search(" ")==-1) &&
	    (dominio.search(".")!=-1) &&      
	    (dominio.indexOf(".") >=1)&& 
	    (dominio.lastIndexOf(".") < dominio.length - 1)) 
	{
		document.getElementById("msgcontato").innerHTML="E-mail valido";
	}
	else{
		document.getElementById("msgcontato").innerHTML="<font color='red'>E-mail invalido </font>";
		alert("E-mail invalido");
	}
}



function checkCheckBox(formulario)
{
	 if (formulario.linhaPesquisa.checked == false )
	 {
		 alert("Selecione uma linha de pesquisa");
		 return false;
	 }
	 else
	 {
		return true;
	 }
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1} 
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none"; 
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block"; 
  dots[slideIndex-1].className += " active";
}