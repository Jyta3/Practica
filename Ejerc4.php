<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $edad = $_POST["edad"];
    $sexo = $_POST["sexo"];

    $puedeVotar = false;

    if ($sexo == "hombre" && $edad >= 18) {
        $puedeVotar = true;
    }

    if ($sexo == "mujer" && $edad >= 18) {
        $puedeVotar = true;
    }

    if ($puedeVotar) {
        echo "Puede votar.";
    } else {
        echo "No puede votar.";
    }
}
?>