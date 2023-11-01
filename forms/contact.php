<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    
    // Correo de destino
    $to = "ulimiramar@gmail.com";
    
    // Enviar el correo
    $enviado = mail($to, $subject, $message, "From: $email");
    
    if ($enviado) {
        echo "exito";
    } else {
        echo "error";
    }
} else {
    echo "error";
}
?>
