<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nombre = htmlspecialchars($_POST["nombre"]);
    $email = htmlspecialchars($_POST["email"]);
    $mensaje = htmlspecialchars($_POST["mensaje"]);

    echo "<p>Gracias, $nombre. Hemos recibido tu mensaje.</p>";
} else { echo "<p>No se ha podido enviar los datos </p>"; }


?>