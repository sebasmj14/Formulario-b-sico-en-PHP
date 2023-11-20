<?php
if($_SERVER['REQUEST_METHOD'] != 'POST' ){
    header("Location: index-form.html" );
}

        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $asunto = $_POST['asunto'];
        $mensaje = $_POST['mensaje'];
        $email = $_POST['email'];
        $telf = $_POST['telefono'];

if( empty(trim($nombre)) ) $nombre = 'anonimo';
if( empty(trim($apellido)) ) $apellido = '';

$body = <<<HTML
    <h1>Contacto desde la web</h1>
    <p>De: $nombre $apellido / $email</p>
    <p>Telefono : $telf</p>
    <h2>Mensaje</h2>
    $mensaje
HTML;

        $header ="MIME-Version: 1.0 \r\n";
        $header.="Content - type: text/html ; charset=UTF-8 \r\n";
        $header.= "FROM: $name <$email> \r\n";
        $header.="To: correosebas@\r\n";
        $header.= "X-Mailer: PHP/" . phpversion();
        $mail= @mail("jofre.lau@gmail.com",$asunto,$body,$header);
        if ($mail){
            echo "<h4 class='textEnviado'>¡Formulario enviado exitosamente! Ya puedes cerrar esta ventana.</h4>";
        } 
        

//header("Location: gracias.html" );