<?php
$todos_json = file_get_contents('todo-list.json');
$todos = json_decode($todos_json, true);

header('Content-Type: application/json');
echo json_encode($todos);
?>