<?php
$destino= "emmanuelpedro2111@gmail.com";
$name = $_POST["name"];
$mail = $_POST["email"];
$phone = $_POST["phone"];
$message = $_POST["message"];
$contenido = "Nombre: " . $name . "\nemail: " . $email . "\nphone: " . $phone . "\nmessage: " . $message;
$mail = @mail($destino,"contacto", $contenido );
header("location:CONTACTO.php")


?>