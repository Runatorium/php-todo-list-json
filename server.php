<?php

$todoList = [
    'task1',
    'task2',
    'task3',
    'task4',
];

if (isset($_POST['newtask'])) {
    $todoList[] = $_POST['newtask'];
}

header('Content-Type: application/json');
echo json_encode($todoList);

?>