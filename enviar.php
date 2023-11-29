<?php
    $destinatario = 'contatosantiago.mar@gmail.com';
    // Para el correo al que se enviará el mensaje
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $empresa = $_POST['empresa'];
    $pais = $_POST['pais'];
    $tipoempresa = $_POST['tipoempresa'];
    $industria = $_POST['industria'];
    $mensaje = $_POST['mensaje'];

    $header = "Enviado desde la página Corporativo inMotion"
    $mensajeCompleto = $mensaje . "\nAtentamente" . $nombre;

    mail($destinatario, $industria, $mensajeCompleto, $header);
    echo "<script>alert('Correo enviado exitosamente')</script>";
    echo "<script> setTimeout(\"location.href='index.html'\",1000)</script>";

?>