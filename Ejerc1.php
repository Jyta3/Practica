<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $base = isset($_POST['base']) ? floatval($_POST['base']) : 0;
    $altura = isset($_POST['altura']) ? floatval($_POST['altura']) : 0;

    function calcularAreaTriangulo($base, $altura) {
        $area = ($base * $altura) / 2;
        return $area;
    }

    $areaTriangulo = calcularAreaTriangulo($base, $altura);
    echo "El área del triángulo con base $base y altura $altura es: $areaTriangulo";
}
?>
