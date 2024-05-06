<?php
$students = [
    [
        'name' => 'Maria',
        'lastname' => 'Gialli',
        'age' => 29
    ],
    [
        'name' => 'Alessandro',
        'lastname' => 'Marroni',
        'age' => 23
    ],
    [
        'name' => 'Franscesca',
        'lastname' => 'Rossi',
        'age' => 19
    ],
    [
        'name' => 'Ernesto',
        'lastname' => 'Verdi',
        'age' => 27
    ],
];

echo json_encode($students);

// $jsonString = '[{"name":"Maria","lastname":"Gialli","age":29},{"name":"Alessandro","lastname":"Marroni","age":23},{"name":"Franscesca","lastname":"Rossi","age":19},{"name":"Ernesto","lastname":"Verdi","age":27}]';
// $studentsArray = json_decode($jsonString, true);
// var_dump($studentsArray);
?>