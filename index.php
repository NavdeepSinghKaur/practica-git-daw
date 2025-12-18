<?php
function mostrarTasques($tasques) {
    echo "=== LLISTA DE TASQUES ===\n";
    foreach ($tasques as $key => $value) {
        echo "[$key] $value";
    }
}

$tasques = [
    1 => "this is a test",
    2 => "this is another test",
    3 => "this is the last test",
];


mostrarTasques($tasques);