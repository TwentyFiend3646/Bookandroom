<?php
    // Datos
    $room= $_POST['Habitacion'];
    $name= $_POST['Nombre'];
    $ap1= $_POST['Primer_apellido'];
    $ap2= $_POST['Segundo_apellido'];
    $country= $_POST['pais'];
    $mail= $_POST['Correo_electronico'];
    $phone= $_POST['Telefono'];
    $datemin= $_POST['datemin'];
    $datemax= $_POST['datemax'];
    // Contenido del mensaje
    $mensaje= "Piso: $room \n";
    $mensaje.= "Nombre: $name \n";
    $mensaje.= "Apellidos: $ap1 $ap2 \n";
    $mensaje.= "Pais: $country \n";
    $mensaje.= "Correo: $mail \n";
    $mensaje.= "Telefono: $phone \n";
    $mensaje.= "Duración de estancia: $datemin to $datemax \n"; 
    // Envio de los datos
    $email= "interesado@bookandroom.es";
    $asunto= "nuevo interesado";
    $header= "From: interesado@bookandroom.es";
    mail($email,$asunto,$mensaje,$header);
    header('Location:'.$_SERVER['HTTP_REFERER']);

?>