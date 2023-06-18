<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero1 = $_POST["numero1"];
    $numero2 = $_POST["numero2"];
    $numero3 = $_POST["numero3"];

    $mayor = $numero1;

    if ($numero2 > $mayor) {
        $mayor = $numero2;
    }

    if ($numero3 > $mayor) {
        $mayor = $numero3;
    }

    echo "El mayor número es: " . $mayor;
}
?>

