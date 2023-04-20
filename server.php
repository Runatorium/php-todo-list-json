<?php

$todoList = [
    'task1',
    'task2',
    'task3',
    'task4',
];

header('Content-Type: application/json');
echo json_encode($todoList);

?>