<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $radio = $_POST["radio"];
    $pi = 3.141592;
    $area = $pi * $radio * $radio;

    echo "El área del círculo es: " . $area;
}
?>