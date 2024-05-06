<?php
// Questa API salva un dato in un db

if(isset($_POST['newInfo'])) {
    // Salva nel db l'informazione

    header('Content-Type: application/json');

    echo json_encode([
        'response' => 'Tutto ok, salvato'
    ]);
} else {
    header('Content-Type: application/json');

    echo json_encode([
        'response' => 'Dato da salvare mancante'
    ]);
}
?>