<?php

$todoList = [
    [
        'nome' => 'task1',
        'status' => true,
    ],
    [
        'nome' => 'task2',
        'status' => false,
    ],
    [
        'nome' => 'task3',
        'status' => false,
    ],
    [
        'nome' => 'task4',
        'status' => true,
    ]
];

if (isset($_POST['newtask'])) {
    $todoList[] = $_POST['newtask'];
}


header('Content-Type: application/json');
echo json_encode($todoList);

?>