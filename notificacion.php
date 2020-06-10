<?php 
echo "Comienza el email";
$destinatario = "carlos.amrodri@gmail.com"; 
$asunto = "Este mensaje es de prueba"; 
$cuerpo = '
<html> 
<head> 
   <title>Prueba de correo</title> 
</head> 
<body> 
<h1>Hola amigos!</h1> 
<p> 
<b>Bienvenidos a mi correo electrónico de prueba</b>. ESTOY PROBANDO DESDE HEROKU
</p> 
</body> 
</html> 
'; 

//para el envío en formato HTML 
$headers = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 

//dirección del remitente 
$headers .= "From: Carlos Rodriguez <maxirtelecomunicaciones@gmail.com>\r\n"; 




//direcciones que recibián copia 
$headers .= "Cc: carlos.amrodri.dev@gmail.com\r\n"; 

// //direcciones que recibirán copia oculta 
// $headers .= "Bcc: pepe@pepe.com,juan@juan.com\r\n"; 
echo "LLegue hasta el fondo";
mail($destinatario,$asunto,$cuerpo,$headers);
echo "Ya pase por el mail";
?>