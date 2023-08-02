<?php

$nombre = $_POST['usuario'];
$mail = $_POST['correo electrónico'];
$categoria =$_POST['categoria'];
$asunto =$_POST['asunto'];
$texto =$_POST['texto'];
$enviar =$_POST['enviar'];

$mensaje = "Este mensaje fue enviado por" . $nombre . ",\n";
$mensaje = "Su E-mail es:" . $mail . ",\n";
$mensaje = "Profesional o Paciente:" . $categoria . ",\n";
$mensaje = "Asunto:" . $asunto . ",\n";
$mensaje = "Mensaje:" . $texto . ",\n";
$mensaje = "Enviado el" . $enviar . ",\n";

$para = 'consultoriospsicologicos732@gmail.com';
$asunto ='Este mail fue enviado desde la web'

mail($para, $asunto, utf8_decode($mensaje), $header);

header('http://127.0.0.1:5503/index.html');

?>