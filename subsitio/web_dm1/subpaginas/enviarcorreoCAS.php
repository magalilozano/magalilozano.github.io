<? //Recepcion de datos 
$nombre=$_POST['nombre']; 
$apellido=$_POST['apellido']; 
$mail=$_POST['mail']; 
$puntuacion=$_POST['puntuacion']; $asunto=$_POST['puntuacion']; 
$comentarios=$_POST['comentarios']; 

// Fin de recpcion de datos 

// Accion de envio 

//---------// 

$para='lozanomagali@gmail.com'; 
$mensaje=' 

Mensaje de: 
'.$nombre.', '.$apellido.' 

Mail: 
'.$mail.' 

Puntuacion: 
'.$puntuacion.' 

Asunto: 
'.$asunto.' 

Comentarios: 
'.$comentarios.' 
'; 
$desde='From: '.$correo.' <lozanomagali@gmail.com>'; 
ini_set(sendmail_from,'lozanomagali@gmail.com'); 
mail($para,$asunto,$mensaje,$desde); 
echo'Mensaje enviado con exito, muchas gracias'; 
?>