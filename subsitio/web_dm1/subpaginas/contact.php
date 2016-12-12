<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<link href="../imagenes/favicon2.ico"
rel="shortcut icon" />

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Elsa & Fred - Contacto</title> <link href="../../maquetacion.css" type="text/css" />
<link href="../css/maquetacion.css" rel="stylesheet" type="text/css" />
<style type="text/css">
a:link {
	color: #8F6291;
}
a:visited {
	color: #663399;
}
</style>
<link href="../css/styles3.css" rel="stylesheet" type="text/css" />
<script src="jQueryAssets/jquery-1.11.1.min.js" type="text/javascript"></script>
<script type="text/javascript">
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
function MM_validateForm() { //v4.0
  if (document.getElementById){
    var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
    for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=document.getElementById(args[i]);
      if (val) { nm=val.name; if ((val=val.value)!="") {
        if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
          if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
        } else if (test!='R') { num = parseFloat(val);
          if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
          if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
            min=test.substring(8,p); max=test.substring(p+1);
            if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
      } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' is required.\n'; }
    } if (errors) alert('The following error(s) occurred:\n'+errors);
    document.MM_returnValue = (errors == '');
} }
</script>
<!--The following script tag downloads a font from the Adobe Edge Web Fonts server for use within the web page. We recommend that you do not modify it.-->
<script>
var __adobewebfontsappname__="dreamweaver"
</script>
<script src="http://use.edgefonts.net/pt-sans:n4:default.js" type="text/javascript"></script>
<script>

function validar(){
if (document.getElementById('condiciones').checked){
return true;
}
else
{
alert("El formulario no puede ser envia si no acepta el contrato");
return false;
}
}
</script>

<FORM name="formulario" action="contacto.php" onSubmit="return validar();">
</FORM>
</head>

<body onload="MM_preloadImages('../imagenes/botonpelicula.png','../imagenes/botondirector.png','../imagenes/botonfotos.png','../imagenes/redessociales2.png','../imagenes/contacto2.png','../imagenes/personajes1.png','../imagenes/mapadesitio1.png')">
<div id="contenedor" onfocus="MM_validateForm('nombre','','R');MM_validateForm('apellido','','R');MM_validateForm('mail','','RisEmail');MM_validateForm('comentarios','','R');return document.MM_returnValue">
<div id="cabecera">
  <div id="redessociales"><a href="https://www.facebook.com/pages/Elsa-y-Fred/106162482748571?fref=ts" target="_blank" onmouseover="MM_swapImage('facebook','','../imagenes/redesfb2.png',1)" onmouseout="MM_swapImgRestore()"><img src="../imagenes/redesfb1.png" alt="facebook" width="40" height="40" border=0 id="facebook" /></a><a href="https://twitter.com/ElsayFredMexico" target="_blank" onmouseover="MM_swapImage('twitter','','../imagenes/redestw2.png',1)" onmouseout="MM_swapImgRestore()"><img src="../imagenes/redestw1.png" alt="twitter" width="40" height="40" border=0 id="twitter" /></a><a href="https://instagram.com/elsayfred/" target="_blank" onmouseover="MM_swapImage('instagram','','../imagenes/redesinst2.png',1)" onmouseout="MM_swapImgRestore()"><img src="../imagenes/redesinst1.png" alt="instagram" width="40" border=0 height="40" id="instagram" /></a></div>
<a href="../index.html"><img src="../imagenes/logo.gif" alt="elsa y fred" width="550" height="87" class="logo" /></a></div>
<div class="fondosub" id="area2">
<form id="form1" method="post" action="enviarcorreoCAS.php">
<table width="500" border="0">
<tr> <td width="212"><b>Nombre:</b></td> <td width="242"><input name="nombre" type="text" required class="contact_form" id="nombre" placeholder="Carola" size=30/></td> </tr>
<tr> <td height="22"><b>Apellido:</b></td> <td><label> <input name="apellido" type="text" required class="contact_form" id="apellido" placeholder="Ricci" size=30/> </label></td> </tr>
<tr> <td><b>Mail:</b></td> <td><label> <input name="mail" type="text" required class="contact_form" id="mail" placeholder="ejemplo@tumail.com" size=30 /> </label></td> </tr>
<tr> <td><b>Puntuá la pelicula:</b></td><td><label for="select"></label>
          <select name="select" id="select">
            <option value="1 estrella">1 estrella</option>
            <option value="2 estrellas">2 estrellas</option>
            <option value="3 estrellas">3 estrellas</option>
            <option value="4 estrellas">4 estrellas</option>
            <option value="5 estrellas">5 estrellas</option>
        </select></td> 
</tr>
<tr> <td><b>Personaje favorito:</b></td>
<td><label for="select"></label>
          <select name="select" id="select">
            <option value="1 estrella">Elsa</option>
            <option value="2 estrellas">Fred</option>
            <option value="3 estrellas">Cuca</option>
            <option value="4 estrellas">Gabriel</option>
            </select></td> 
</tr>
<tr> <td><b>¿Te parecio entretenida?</b></td><td>
        Si <input name="si" type="radio" required="required" title="si" value="si" /> No <input name="no" type="radio" required="required" title="no" value="no" /></td>
</tr> <tr> <td height="59" colspan="2"><div align="left"><h2><b>Comentarios:</h2></b></div></td> </tr>
<tr> <td height="91" colspan="2"><textarea name="comentarios" cols="55" rows="5" id="comentarios" placeholder="Escriba aqui sus comentarios.." required></textarea></td> 
</tr>
<tr> <td height="41" colspan="2"><label></label> <div align="center"> <input type="submit" name="Submit" value="Enviar" /> <label> <input type="reset" name="Submit2" value="Restablecer" /> </label> 
</div></td> </tr>
</table> 
</form>
</div>
<div id="botonera">
<a href="pelicula.html" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('pelicula','','../imagenes/botonpelicula.png',1)"><img src="../imagenes/botonpelicula2.png" alt="pelicula" width="140" height="66" id="pelicula" /></a> 
<a href="director.html" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('director','','../imagenes/botondirector.png',1)"><img src="../imagenes/botondirector2.png" alt="director" width="140" height="66" id="director" /></a><a href="personajes.html" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('personajes','','../imagenes/personajes1.png',1)"><img src="../imagenes/personajes2.png" alt="personajes" width="140" height="66" id="personajes" /></a><a href="galeria.html" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('fotos','','../imagenes/botonfotos.png',1)"><img src="../imagenes/botonfotos2.png" alt="fotos" width="141" height="66" id="fotos" /></a>
<a href="contacto.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('contacto','','../imagenes/contacto2.png',1)"><img src="../imagenes/contacto1.png" alt="contacto" width="141" height="66" id="contacto" /></a></div>
<div id="pie">
  <div id="pietext">
    <h1><strong><a href="minisitio.html">Magalí Lozano - Diseño Multimedia I</a></strong> / Elsa & Fred - Copyright 2005</h1></div>
<div id="mapasitio"><a href="mapadesitio.html" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('mapadesitio','','../imagenes/mapadesitio1.png',1)"><img src="../imagenes/mapadesitio2.png" alt="mapa de sitio" width="51" height="38" id="mapadesitio" title="mapa de sitio" /></a></div>
</div>
</div>

</body>

</html>
