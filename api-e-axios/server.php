<?php
$students_json = file_get_contents('students.json');
$students = json_decode($students_json, true);

// Di default stampiamo tutti gli studenti
$response = $students;

// Però se è settato $_GET['studentIndex'] allora torno uno studente specifico
if(isset($_GET['studentIndex'])) {
    $studentIndex  = intval($_GET['studentIndex']);
    $response = $students[$studentIndex];
}

header('Content-Type: application/json');

echo json_encode($response);
?>
