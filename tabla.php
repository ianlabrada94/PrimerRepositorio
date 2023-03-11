<?php
'<link rel = "stylesheet" href = "css/estilos.css" />';
$key = 'P47nb9busDh9SgYvXkRW';
$archivo="https://data.nasdaq.com/api/v3/datasets/OPEC/ORB.json?api_key=".$key;
$dias = 0;
$datos=json_decode(file_get_contents($archivo),true);
foreach ($datos['dataset']['data'] as $elemento) {
    $fecha = date('Y-m-d', strtotime($elemento[0]));
    $precio = $elemento[1];
    $dias++;
    if ($dias == 8) {
        break;
    }
    echo "<tr><td>" . $fecha . "</td><td>" ."$ ".$precio."</td></tr>";
}
?>