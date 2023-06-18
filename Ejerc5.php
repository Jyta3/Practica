<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $horasTrabajadas = $_POST["horasTrabajadas"];
    $tarifaFija = $_POST["tarifaFija"];
    $sueldoMensual = $horasTrabajadas * $tarifaFija;

    if ($sueldoMensual > 20000) {
        $impuesto = 0.2 * $sueldoMensual;
    } else {
        $impuesto = 0;
    }

    $horasExtras = max($horasTrabajadas - 35, 0);
    $pagoHorasExtras = $horasExtras * $tarifaFija * 1.5;

    $sueldoNeto = $sueldoMensual + $pagoHorasExtras - $impuesto;

    echo "Sueldo Mensual: $" . number_format($sueldoMensual, 2) . "<br>";
    echo "Horas Extras Trabajadas: " . $horasExtras . "<br>";
    echo "Pago por Horas Extras: $" . number_format($pagoHorasExtras, 2) . "<br>";
    echo "Impuesto: $" . number_format($impuesto, 2) . "<br>";
    echo "Sueldo Neto: $" . number_format($sueldoNeto, 2);
}
?>