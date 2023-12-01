<?php
    $destinatario = 'contacto@corporativoinmotion.com';
    // Para el correo al que se enviará el mensaje
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $empresa = $_POST['empresa'];
    $pais = $_POST['pais'];
    $tipoempresa = $_POST['tipoempresa'];
    $industria = $_POST['industria'];
    $mensaje = $_POST['mensaje'];

    $header = "Enviado desde la página Corporativo inMotion";
    $asunto = "Formulario de página inMotion";
    $mensajeCompleto = "Nombre: " . $nombre . "\nEmail: " . $email  . "\nEmpresa: " . $empresa . "\nPaís: " . $pais . "\nTipo de empresa: " . $tipoempresa . "\nIndustria: " . $industria . "\nMensaje: " . $mensaje;

    mail($destinatario, $asunto, $mensajeCompleto, $header);
    echo "<script>alert('Correo enviado exitosamente')</script>";
    echo "<script> setTimeout(\"location.href='https://corporativoinmotion.com/'\",1000)</script>";

?>


<!-- contacto@corporativoinmotion.com -->