<?php
echo "=== GESTOR DE TASQUES ===\n";
echo "Benvingut al sistema!\n\n";
function mostrarUsuari($nom) {
    echo "=== GESTOR DE TASQUES ===\n";
    echo "Benvingut al sistema! $nom\n";
}

$mostrarUsuari = "user1";
mostrarUsuari($mostrarUsuari);

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
