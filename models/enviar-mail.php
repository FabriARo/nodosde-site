<?php

if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    header("Location: ../assets/pages/contacto.php");
}

require '../libs/phpmailer/PHPMailer.php';
require '../libs/phpmailer/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];

if (empty(trim($nombre))) $nombre = 'anonimo';

$body = <<<HTML
        <h1>Contacto desde NODO SDE</h1>
        <p>De: $nombre / $email</p>
        <h2>Mensaje<h2>
        $mensaje
HTML;

$mailer = new PHPMailer();

$mailer->setFrom($email, "$nombre");
$mailer->addAddress('arandafabry@gmail.com', 'Nodo SDE');
$mailer->Subject = "Mensaje web: $asunto";
$mailer->msgHTML($body);
$mailer->AltBody = strip_tags($body);
$mailer->CharSet = 'UTF-8';
$mailer->send( );

?>