
function validar_campos_sesion(){

  usu = document.getElementById("usuario");
  cont=document.getElementById("contrasena");
  msj_usu = document.getElementById("men_usu");
  msj_cont = document.getElementById("men_cont");
  var res = true;

if (usu.value=="") {
  usu.style.borderColor="red";
  msj_usu.innerHTML="campo vacio";
  res =  false;

}else{
  usu.style.borderColor="";
  msj_usu.innerHTML="";
}

if (cont.value=="") {
  cont.style.borderColor="red"
  msj_cont.innerHTML="campo vacio";
  res =  false;
}else{
  cont.style.borderColor=""
  msj_cont.innerHTML="";
}

if (usu.value.length <4 && usu.value.length >=1) {
  usu.style.borderColor="red";
  msj_usu.innerHTML="minimo 5 caracteres";
  res =  false;
}
if (cont.value.length < 8 && cont.value.length >=1) {
  cont.style.borderColor="red"
  msj_cont.innerHTML="minimo 8 caracteres";
  res = false;
}

return res;
}

function validar_campo_preguntas(){
  
  var exprexion = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;  

  var res1 = document.getElementById("res1");
  var res2 = document.getElementById("res2");
  var res3 = document.getElementById("res3");
  var res4 = document.getElementById("res4");
  var res5 = document.getElementById("res5");
  var res6 = document.getElementById("res6");
  var res7 = document.getElementById("res7");
  var res8 = document.getElementById("res8");
  var res9 = document.getElementById("res9");
  var res10 = document.getElementById("res10");

  var nombre = document.getElementById("nombre");
  var apellido = document.getElementById("apellido");
  var email = document.getElementById("email");

  var msj_nom = document.getElementById("men_nom")
  var msj_ape = document.getElementById("men_ape")
  var msj_email = document.getElementById("men_email")
  var res = true;

  if (!res1.checked && !res2.checked || !res3.checked && !res4.checked || !res5.checked && !res6.checked || !res7.checked && !res8.checked || !res9.checked && !res10.checked) {
    alert("responde todas las preguntas pregunta")
    res =  false;
  }
  if (nombre.value=="") {
      nombre.style.borderColor="red";
      msj_nom.innerHTML="campo vacio";
      res = false;
  }else{
      nombre.style.borderColor="";
      msj_nom.innerHTML="";
  }
    if (apellido.value=="") {
      apellido.style.borderColor="red";
      msj_ape.innerHTML="campo vacio";
      res = false;
  }else{
      apellido.style.borderColor="";
      msj_ape.innerHTML="";
  }
    if (email.value=="") {
      email.style.borderColor="red";
      msj_email.innerHTML="campo vacio";
      res = false;
  }else{
      email.style.borderColor="";
      msj_email.innerHTML="";
  }
  if (nombre.value.length <4 && nombre.value.length >=1) {
      nombre.style.borderColor="red";
      msj_nom.innerHTML="minimo 4 caracteres";
      res = false;
  }
  if (apellido.value.length <4 && apellido.value.length >=1) {
      apellido.style.borderColor="red";
      msj_ape.innerHTML="minimo 4 caracteres";
      res = false;
  }
  if (!exprexion.test(email.value)){
  email.style.borderColor ="red";
  msj_cor.innerHTML = "email no valido";
  res =  false;
}else{
  email.style.borderColor ="";
  msj_email.innerHTML = "";
}
  
  return res;
}

function validar_campo_registro(){

  var exprexion2 = /^[a-zA-Z_áéíóúñ\s]*$/;
  var exprexion = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;

  var nom = document.getElementById("nombre");
  var ape = document.getElementById("apellido");
  var ide = document.getElementById("identificacion");
  var cor = document.getElementById("correo");
  var usu = document.getElementById("usuario");
  var cont = document.getElementById("contrasena");

  var msj_nom = document.getElementById("men_nom");
  var msj_ape = document.getElementById("men_ape");
  var msj_ide = document.getElementById("men_ide");
  var msj_cor = document.getElementById("men_correo");
  var msj_usu = document.getElementById("men_usu");
  var msj_cont = document.getElementById("men_cont");

  var res = true;

  if (nom.value=="") {
  nom.style.borderColor="red";
  msj_nom.innerHTML="campo vacio";
  res =  false;

  }else{
    nom.style.borderColor="";
    msj_nom.innerHTML="";
  }
  if (ape.value=="") {
  ape.style.borderColor="red";
  msj_ape.innerHTML="campo vacio";
  res =  false;

  }else{
    ape.style.borderColor="";
    msj_ape.innerHTML="";
  }
    if (ide.value=="") {
  ide.style.borderColor="red";
  msj_ide.innerHTML="campo vacio";
  res =  false;

  }else{
    ide.style.borderColor="";
    msj_ide.innerHTML="";
  }
    if (cor.value=="") {
  cor.style.borderColor="red";
  msj_cor.innerHTML="campo vacio";
  res =  false;

  }else{
    cor.style.borderColor="";
    msj_cor.innerHTML="";
  }
    if (usu.value=="") {
  usu.style.borderColor="red";
  msj_usu.innerHTML="campo vacio";
  res =  false;

  }else{
    usu.style.borderColor="";
    msj_usu.innerHTML="";
  }
    if (cont.value=="") {
  cont.style.borderColor="red";
  msj_cont.innerHTML="campo vacio";
  res =  false;

  }else{
    cont.style.borderColor="";
    msj_cont.innerHTML="";
  }
  if (nom.value.length <4 && nom.value.length >=1) {
      nom.style.borderColor="red";
      msj_nom.innerHTML="minimo 4 caracteres";
      res = false;
  }
  if (ape.value.length <4 && ape.value.length >=1) {
      ape.style.borderColor="red";
      msj_ape.innerHTML="minimo 4 caracteres";
      res = false;
  }
  if (ide.value.length <10 && ide.value.length >=1) {
      ide.style.borderColor="red";
      msj_ide.innerHTML="minimo 10 caracteres";
      res = false;
  }
  if (usu.value.length <4 && usu.value.length >=1) {
      usu.style.borderColor="red";
      msj_usu.innerHTML="minimo 4 caracteres";
      res = false;
  }
  if (cont.value.length <8 && cont.value.length >=1) {
      cont.style.borderColor="red";
      msj_cont.innerHTML="minimo 8 caracteres";
      res = false;
  }
  if (!exprexion.test(cor.value)){
  cor.style.borderColor ="red";
  msj_cor.innerHTML = "correo no valido";
  res =  false;
}else{
  cor.style.borderColor ="";
  msj_cor.innerHTML = "";
}

   return res;
}
